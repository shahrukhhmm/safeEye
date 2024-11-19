<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Sale;
use App\Models\User;
use App\Models\Branch;
use App\Models\SaleItem;
use App\Models\Inventory;
use Illuminate\Http\Request;
use App\Models\UserAttandance;
use App\Models\InventoryCategory;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{

    public function registerPage()
    {
        return view('admin.auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'status' => 'pending',
        ]);

        // Auth::login($user);

        return redirect()->route('dashboard');
    }

    public function loginPage()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            if (Auth::user()->status === 'active') {
                return redirect()->route('dashboard');
            }

            Auth::logout();
            return back()->withErrors(['email' => 'Your account is not active.']);
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }


    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }


    // dashboard

    public function dashboard()
    {
        $user = Auth::user();

        if($user->role_id == 2){
            return redirect('/user-attendance');
        }

        $user = User::count();
        $branch = Branch::count();
        $inventory = Inventory::count();
        $category = InventoryCategory::count();
        // Category-based inventory count
        $categoryInventory = Inventory::select('category_id', DB::raw('count(*) as total'))
        ->groupBy('category_id')
        ->with('category')
        ->get();
        // Branch-based inventory count
        $branchInventory = Inventory::select('branch_id', DB::raw('count(*) as total'))
            ->groupBy('branch_id')
            ->with('branch')
            ->get();


        // Get sales data grouped by branch
        $salesData = Sale::join('sale_items', 'sales.id', '=', 'sale_items.sale_id')
        ->join('inventories', 'sale_items.inventory_id', '=', 'inventories.id')
        ->join('branches', 'inventories.branch_id', '=', 'branches.id')
        ->selectRaw('branches.name as branch_name, SUM(sale_items.quantity_sold * sale_items.price) as total_sales, SUM(sale_items.quantity_sold) as total_quantity')
        ->groupBy('branches.name')
        ->orderBy('branches.name', 'asc')
        ->get();

        // Extract the data for the graph
        $branchNames = $salesData->pluck('branch_name');
        $totalSales = $salesData->pluck('total_sales');
        $totalQuantities = $salesData->pluck('total_quantity');



        // category wise item sold  graph
        $categorySalesData = SaleItem::join('inventories', 'sale_items.inventory_id', '=', 'inventories.id')
        ->join('inventory_categories', 'inventories.category_id', '=', 'inventory_categories.id')
        ->selectRaw('inventory_categories.name as category_name, SUM(sale_items.quantity_sold) as total_quantity_sold')
        ->groupBy('inventory_categories.name')
        ->orderBy('inventory_categories.name', 'asc')
        ->get();





        // early checkin
        $earlyCheckin = UserAttandance::orderBy('created_at', 'DESC')->with('user')->paginate(5);

        // today activity


        $todayDate = Carbon::now()->toDateString();


        $todayActivity = UserAttandance::whereDate('created_at', $todayDate)->with('user')
            ->orderBy('created_at')
            ->get();

            // dd($todayActivity );

        $data = [];

        foreach ($todayActivity as $activity) {
            $employeeId = $activity->employee_id;

            if (!array_key_exists($employeeId, $data)) {
                $data[$employeeId] = [
                    'activities' => [],
                ];
            }


            $employeeData = &$data[$employeeId]['activities'];

            if ($activity->status == 'Start') {

                $latlng = explode(',', $activity->latlng);

                $employeeData[] = [
                    'name' => $activity->user->name,
                    'lat' => $latlng[0],
                    'lng' => $latlng[1],
                    'startTime' => $activity->created_at,
                    'endTime' => null,
                    'totalBreakTime' => 0,
                ];
            } elseif ($activity->status == 'End for today') {
                if (!empty($employeeData)) {
                    $employeeData[count($employeeData) - 1]['endTime'] = $activity->created_at;
                }
            } elseif ($activity->status == 'Break') {
                if (!empty($employeeData)) {
                    $employeeData[count($employeeData) - 1]['breakStartTime'] = $activity->created_at;
                }
            } elseif ($activity->status == 'Break end') {
                if (!empty($employeeData) && isset($employeeData[count($employeeData) - 1]['breakStartTime'])) {
                    $breakEndTime = $activity->created_at;
                    $breakStartTime = $employeeData[count($employeeData) - 1]['breakStartTime'];
                    $breakTime = $breakEndTime->diffInMinutes($breakStartTime);
                    $employeeData[count($employeeData) - 1]['totalBreakTime'] += $breakTime;
                    unset($employeeData[count($employeeData) - 1]['breakStartTime']);
                }
            }
        }

        $dataJson = json_encode($data);



        // today employee status

        $numEmployeesStarted = 0;
        $numEmployeesEnded = 0;
        $numEmployeesOnBreak = 0;

        foreach ($todayActivity as $status) {


            if($status->status == 'Start'){
                $numEmployeesStarted++;
            }elseif($status->status == 'Break'){
                $numEmployeesOnBreak++;
            }elseif($status->status == 'Break end'){
                $numEmployeesOnBreak--;
            }elseif($status->status == 'End for today'){
                $numEmployeesEnded++;
                $numEmployeesStarted--;
            }
        }



        return view('admin.dashboard.index', compact('user', 'branch', 'inventory', 'category', 'categoryInventory', 'branchInventory','branchNames', 'totalSales', 'totalQuantities','earlyCheckin','data','numEmployeesStarted','numEmployeesEnded','numEmployeesOnBreak','categorySalesData'));
    }
}
