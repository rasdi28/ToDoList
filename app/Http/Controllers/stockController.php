<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use App\Models\Category;
use App\Models\Stock;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class stockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stock = DB::table('stocks')->get();
       $barang = DB::table('barang_masuks')->where('name','mie')->value('description');
       $kategori = DB::table('stocks')->find(2);

       dd($kategori);

    //    return view('pages.admin.stock.index')->with([
    //        'stocks'=>$stocks
    //    ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = BarangMasuk::all();
        return view('pages.admin.stock.create')->with([
            'barang' => $barang
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
        //
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
}
