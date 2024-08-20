<?php

namespace App\Http\Controllers\SubAdmin;

use Carbon\Carbon;
use App\Models\Sale;
use App\Models\User;
use App\Models\SaleItem;
use App\Models\Inventory;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SaleController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $inventories = Inventory::where('branch_id',$user->branch_id)->get();
        return view('admin.subAdmin.index',compact('inventories'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'buyer_name' => 'required|string|max:255',
            'inventory_ids' => 'required|array',
            'quantities' => 'required|array',
            'prices' => 'required|array',
        ]);

        $user = Auth::user();

        $saleId = Sale::insertGetId([
            'buyer_name' => $request->buyer_name,
            'branch_id' => $user->branch_id,
            'total_price' => array_sum(array_map(function($qty, $price) {
                return $qty * $price;
            }, $request->quantities, $request->prices)),
            'created_at' => now(),
        ]);

        foreach ($request->inventory_ids as $index => $inventory_id) {
            $quantity_sold = $request->quantities[$index];
            $price = $request->prices[$index];

            SaleItem::insertGetId([
                'sale_id' => $saleId,
                'inventory_id' => $inventory_id,
                'quantity_sold' => $quantity_sold,
                'price' => $price,
                'created_at' => now(),
            ]);

            $inventory = Inventory::find($inventory_id);
            $inventory->quantity -= $quantity_sold;
            $inventory->save();
        }




        return redirect()->route('invoice.show', $saleId);
    }


    public function show($id)
    {
        $sale = Sale::with('saleItems.inventory')->findOrFail($id);


        $pdf = Pdf::setOption(['isHtmlParserEnabled' => true,'isRemoteEnabled'=>true,'defaultFont' => 'sans-serif'])->loadView('admin.subAdmin.show', compact('sale'))->setPaper('A4', 'portrait');
        return $pdf->download("pdfcard.pdf");

        // return view('admin.subAdmin.show', compact('sale'));
    }
}
