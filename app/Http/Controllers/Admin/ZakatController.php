<?php

namespace App\Http\Controllers\Admin;

use App\Models\Inventory;
use App\Models\Zakat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ZakatController extends Controller
{
    public function index(Request $request)
    {
        $branchInventoryData = Inventory::selectRaw('branch_id, SUM(quantity) as total_inventory, SUM(price * quantity) as total_price')
            ->groupBy('branch_id')
            ->with('branch')
            ->get();

        $totalSumPrice = $branchInventoryData->sum('total_price');

        $branchData = [];
        foreach ($branchInventoryData as $data) {
            $zakat = $data->total_price * 0.025;
            $branchData[] = [
                'branch_id' => $data->branch_id,
                'branch_name' => $data->branch->name ?? 'Unknown Branch',
                'total_inventory' => $data->total_inventory,
                'total_price' => $data->total_price,
                'zakat' => $zakat
            ];
        }

        $totalZakatAmount = $totalSumPrice * 0.025;
        $branchDataJson = json_encode($branchData);
        $year = Carbon::now()->year;

        $zakatRecord = Zakat::where('year', $year)->first();

        if (!$zakatRecord) {
            $zakatRecord = Zakat::create([
                'total_income' => $totalSumPrice,
                'zakat_amount' => $totalZakatAmount,
                'year' => $year,
                'status' => 'unpaid',
                'branch_data' => $branchDataJson
            ]);
        } else {
            $zakatRecord->update([
                'total_income' => $totalSumPrice,
                'zakat_amount' => $totalZakatAmount,
                'branch_data' => $branchDataJson,
                'status' => $zakatRecord->status
            ]);
        }

        $zakatRecords = Zakat::orderBy('year', 'desc')->get(); // Fetch all Zakat records

        return view('admin.zakat.index', compact('branchInventoryData', 'totalSumPrice', 'totalZakatAmount', 'zakatRecord', 'zakatRecords'));
    }


    public function edit($id)
    {
        $zakatRecord = Zakat::findOrFail($id);
        return view('admin.zakat.edit', compact('zakatRecord'));
    }

    public function update(Request $request, $id)
    {
        $zakatRecord = Zakat::findOrFail($id);

        $request->validate([
            'status' => 'required|in:paid,unpaid',
        ]);

        $zakatRecord->status = $request->input('status');
        $zakatRecord->save();

        return redirect()->route('zakat.index')->with('success', 'Zakat status updated successfully.');
    }

}
