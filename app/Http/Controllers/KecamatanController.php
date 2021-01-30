<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Http\Controllers\KotaController;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kecamatan = Kecamatan::all();
        $kota = Kota::all();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kecamatan = Kecamatan::all();
        $kota = Kota::all();
        return view('admin.kecamatan.index',compact('kota'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {$request->validate([
        'kode_kecamatan'=>'required|max:3|s',
        'kode_kecamatan'=>'required|unique:s'
    ],  [
        'kode_kecamatan.required'=>'kode kecamatan tidak boleh kososng',
        'kode_kecamatan.max'     =>'kode kecamatan maksimal 3',
        'kode.kecamatan.unique'  =>'kode kecamatan sudah terdaftar',
        'nama_kecamatan.required'=>'nama kecamatan tidak boleh kosong',
        'nama_kecamatan.unique'  =>'Nama kecamatan sudah terdaftar'
    ]);
    $kecamatan = new Kecamatan();
    $kecamatan ->id_kota = $request->id_kota;
    $kecamatan ->nama_kecamatan = $requrest->nama_kecamatan;
    $kecamatan ->save();
    return redirect()->route('kecamatan.index')
    ->with(['succes'=>' Data <b> ', $kecamatan->nama_kecamatan,'</b> berhasil di input']);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function show(kecamatan $kecamatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function edit(kecamatan $kecamatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kecamatan $kecamatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(kecamatan $kecamatan)
    {
        //
    }
}
