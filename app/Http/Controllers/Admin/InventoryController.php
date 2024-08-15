<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inventory;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Carbon\Carbon;

class InventoryController extends Controller
{
    public function index()

    {
        $inventory = Inventory::count();

        return view('admin.inventories.index',compact('inventory'));
    }
    
        // yajra pagination
        public function getInventory(Request $request)
        {
            if ($request->ajax()) {
    
                $fromDate = $request->input('from_date');
                $toDate = $request->input('to_date');
    
                if($fromDate == null && $toDate == null){
    
                    $data = Inventory::get();
                }
    
                else{
                    //Date Filter
                    $data = Inventory::whereBetween('created_at', [$fromDate, $toDate])->get();
                }
    
                return Datatables::of($data)
                    ->addIndexColumn()
    
                    ->addColumn('action', function ($row) {
    
                        $btn = '<button class="btn btn-sm  btn-info ml-2 my-3 edit" value="' . $row->id . '" type="button"><i class="fa fa-edit"></i></button>';
                        $btn = $btn .  '<a class="btn btn-sm btn-danger ml-2 my-3" href="'.url('/Inventory-delete/'.$row->id).'" role="button"><i class="fa fa-trash"></i></a>';
    
                        return $btn;
                    })
                    ->addColumn('created_by', function ($row) {
    
                        $created_at = $row->created_at;
    
                        $formatted_date = Carbon::parse($created_at)->format('Y-m-d H:i:s');
                        return $formatted_date;
                    })
                    ->rawColumns(['action', 'created_by'])
                    ->make(true);
    
            }
        }
        public function addinventory(Request $req){

            Inventory::insert([
                'name' => $req->name,
                'discription' => $req->discription,
                'quantity' => $req->quantity,
                'price' => $req->price,
                'karat' => $req->karat,

                'created_at' => now(),
            ]);
    
            return redirect()->back();
        }
   
}