<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use Illuminate\Http\Request;
use PDF;

class barangMasukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = BarangMasuk::all();
        return view('pages.admin.barangmasuk.index')->with([
            'items'=>$items
        ]);
    }

    public function cetakkartu()
    {
        $items = BarangMasuk::all();
        return view('pages.admin.barangmasuk.cetakkartu',compact('items'));
    }   


    public function print()
    {
      $items = BarangMasuk::all();
      $pdf = PDF::loadview('pages.admin.barangmasuk.cetakkartu')=>setPaper('A4','potrait');
      return $pdf->stream();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pages.admin.barangmasuk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barangmasuk = $request->all();
        $barangmasuk['image'] = 'storage/'.$request->file('image')->store(
            'assets/barangmasuk','public'
        );
        BarangMasuk::create($barangmasuk);
        return redirect()->route('barangmasuk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = BarangMasuk::findOrFail($id);
        return view('pages.admin.barangmasuk.show')->with([
            'item'=>$item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = BarangMasuk::findOrFail($id);
        return view('pages.admin.barangmasuk.edit')->with([
            'item'=>$item
        ]);
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
        $new_items = $request->all();
        $new_items['image']= 'storage/'.$request->file('image')->store(
            'assets/barangmasuk','public'
        );
        $items = BarangMasuk::findOrFail($id);
        $items->update($new_items);
        return redirect()->route('barangmasuk.index',$items->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = BarangMasuk::findOrFail($id);
        $item->delete();
        return redirect()->route('barangmasuk.index');
    }
}
