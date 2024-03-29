<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BarangMasuk;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = Stock::with(['barangmasuk'])->get();
        // echo $stocks;
        return view('pages.admin.stok.index')->with([
            'stocks'=>$stocks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barangs = BarangMasuk::all();
        return view('pages.admin.stok.create')->with([
            'barangs'=>$barangs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $stock = $request->all();
        $stock1['stock'] = $request->stok;
        //create stok
        Stock::create($stock);
        $id = $stock['barangmasuk_id'];
        //find tabel barang masuk
        $barangmasuk = BarangMasuk::findOrFail($id);
        //proses penjumlahan stok di barang masuk
        $total['stock'] = $barangmasuk['stock'] + $stock1['stock'];
        //update stok dibarang masuk
        $barangmasuk->update($total);
        return redirect()->route('stock.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    //data jumlah stok
    public function inventory()
    {
        $id = 4;
        $total = Stock::where('barangmasuk_id',$id)->get();
        
        return response()->json($total);


    }
}
