<?php

namespace App\Http\Controllers;

use App\Models\kasus;
use Illuminate\Http\Request;

class KasusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kasus = Kasus::all();
        $rw = rw::all();
        return view('admin.kasus.index',compact('kasus','rw'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kasus = Kasus::all();
        $rw = rw::all();
        return view('admin.kasus.create',compact('rw'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kasus = new Kasus();
        $kasus->id_rw = $request->id_rw();
        $kasus->nama_kasus=$request->nama_kasus();
        $kasus->save();
        return redirect()->route('kasus.index')
        ->with(['succes'=>'data<b>',$kasus->nama_kasus,
        'berhasil di input</b>']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function show(kasus $kasus)
    {
        $kasus = Kasus::findOrFail();
        return view('admin.kasus.show',compact('kasus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function edit(kasus $kasus)
    {
        $kasus = Kasus::findOrFail($id);
        $rw = Rw::all();
        return view('admin.kasus.edit',compact('kasus','rw'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kasus $kasus)
    {$request->validate([
        'kode_kasus'=>'required|max:3|s',
        'kode_kasus'=>'required|unique:s'
    ],  [
        'kode_kasus.required'=>'kode kasus tidak boleh kososng',
        'kode_kasus.max'=>'kode kasus maksimal 3',
        'kode.kasus.unique'=>'kode kasus sudah terdaftar',
        'nama_kasus.required'=>'nama kasus tidak boleh kosong',
        'nama_kasus.unique'=>'Nama kasus sudah terdaftar'
    ]);
        $kasus = Kasus::findOrFail();
        $kasus->id_rw ->$request->id_rw;
        $kasus->nama_kasus->$request->nama_kasus;
        $kasus->save();
        return redirect()->route('kasus.index')
        ->with(['succes'=>'Data<b>',$kasus->nama_kasus,
        'berhasil di ubah</b>']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function destroy(kasus $kasus)
    {
        $kasus = Kasus::findOrFail($id);
        $kasus->delete();
        return redirect()->route('kasus.index')
        ->with(['succes'=>'data<b>',$kasus->nama_kasus,
        'berhasil di hapus</b>']);
    }
}
