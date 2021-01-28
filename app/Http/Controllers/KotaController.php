<?php

namespace App\Http\Controllers;

use App\Models\kota;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kota = Kota::all();
        $provinsi = Provinsi::all();
        return view('admin.kota.index',compact('kota,provinsi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kota = Kota::all();
        $provinsi = Provinsi::all();
        return view('admin.kota.create',compact('kecamatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_kota'=>'required|max:3|kotas',
            'kode_kota'=>'required|unique:kotas'
        ],  [
            'kode_kota.required'=>'kode Kota tidak boleh kososng',
            'kode_kota.max'=>'kode kota maksimal 3',
            'kode.kota.unique'=>'kode kota sudah terdaftar',
            'nama_kota.required'=>'nama kota tidak boleh kosong',
            'nama_kota.unique'=>'Nama kota sudah terdaftar'
        ]);
        $kota = new Kota();
        $kota->id_provinsi = $request->id_provinsi;
        $kota->id_kota = $request->id_kota;
        $kota->save();
        return redirect()->route('kota.index')
        ->with(['succes'=>'data<b>',$kota->nama_kota
        ,'berhasil di input</b>']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function show(kota $kota)
    {
        $kota = Kota::findOrFail($id);
        return view('admin.kota.show',compact('kota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function edit(kota $kota)
    {
        $kota = Kota::findOrFail($id);
        $provinsi = Provinsi::all();
        return view('admin.kota.index',compact('kota,provinsi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kota $kota)
    {
        $kota = Kota::findOrFail($id);
        $kota ->id_provinsi = $request ->id_provinsi;
        $kota ->id_kota =$request->id_kota;
        $kota->save();
        return redirect()->route('kota.index')
        ->with(['succes'=>'data<b>',$kota->nama_kota,
        'berhasil di ubah</b>']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function destroy(kota $kota)
    {
        $kota = Kota::findOrFail($id);
        $kota->delete();
        return redirect()->routes('kota.index')
        ->with(['succes'=>'data<b>',$kota->nama_kota,
        'berhasil di hapus</b>']);
    }
}
