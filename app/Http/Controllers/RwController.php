<?php

namespace App\Http\Controllers;

use App\Models\rw;
use Illuminate\Http\Request;

class RwController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rw = Rw::all();
        $desa = Desa::all();
        return view('admin.rw.index',compact('rw','desa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rw = Rw::all();
        $desa = Desa::all();
        return view('admin.rw.create',compact('rw','desa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rw = new Rw();
        $rw ->id_desa = $request->id_desa;
        $rw ->nama_rw = $request->id_rw;
        $rw ->save();
        return redirect()->route('rw.index')
        ->with(['succes'=>'Data <b>',$rw->nama_rw,
        'berhasil di input </b>']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rw = Rw::findOrFail($id);
        return view('admin.rw.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rw = Rw::findOrFail();
        $kecamatan = Kecamatan::all();
        return view('admin.rw.edit',compact('rw','desa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rw = Rw::findOrFail($id);
        $rw ->id_desa = $request->id_desa;
        $rw ->id_rw = $request ->id_rw;
        $rw ->save();
        return redirect()->route('rw.index')
        ->with(['succe'=>'data<b>', $rw->nama_rw,
        'berhasil di edit</b>']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function destroy(rw $rw)
    {
        $rw = Rw::findOrFail($id);
        $rw->delete();
        return redirect()->route('rw.index')
        ->with(['succes'=>'data<b>',$rw->nama_rw,
        '</b> berhasil di hapus']);
    }
}
