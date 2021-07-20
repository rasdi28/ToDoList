<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tukangsayur;
use Illuminate\Http\Request;

class TukangSayurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tukangsayurs = Tukangsayur::all();
        return view('pages.admin.tukangsayur.index')->with([
            'tukangsayurs'=>$tukangsayurs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.tukangsayur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tukangsayur = $request->all();
        Tukangsayur::create($tukangsayur);
        return redirect()->route('tukangsayur.index');
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
        $tukangsayur = Tukangsayur::findOrFail($id);
        return view('pages.admin.tukangsayur.edit')->with([
            'tukangsayur'=>$tukangsayur
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
        $tukangsayurnew = $request->all();
        $tukangsayur = Tukangsayur::findOrFail($id);
        $tukangsayur -> update($tukangsayurnew);
        return redirect()->route('tukangsayur.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tukangsayur = Tukangsayur::findOrFail($id);
        $tukangsayur->delete();
        return redirect()->route('tukangsayur.index');
    }
}
