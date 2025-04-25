<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class SaleController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'inventory_id' => 'required|exists:inventories,id',
            'jumlah' => 'required|integer|min:1'
        ]);

        $inventory = Inventory::findOrFail($request->inventory_id);

        if ($inventory->stok < $request->jumlah) {
            return back()->with('error', 'Stok tidak cukup untuk penjualan.');
        }

        $inventory->stok -= $request->jumlah;
        $inventory->save();

        return view('sales.slip', [
            'nama' => $inventory->nama,
            'jumlah' => $request->jumlah,
            'harga' => $inventory->harga,
            'total' => $inventory->harga * $request->jumlah
        ]);
    }
}
