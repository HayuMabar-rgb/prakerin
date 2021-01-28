<?php

namespace App\Http\Controllers;

use App\Models\desa;
use App\Models\kecamatan;
use Illuminate\Http\Request;

class DesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $desa = Desa::all();
        $kecamatan = Kecamatan::all();

        // return view('admin.desa.index',compact('desa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $desa = Desa::all();
        $kecamatan = Kecamatan::all();
        return view('admin.desa.create', compact ('kecamatan'));
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
            'kode_desa'=>'required|max:3|s',
            'kode_desa'=>'required|unique:s'
        ],  [
            'kode_desa.required'=>'kode desa tidak boleh kososng',
            'kode_desa.max'=>'kode desa maksimal 3',
            'kode.desa.unique'=>'kode desa sudah terdaftar',
            'nama_desa.required'=>'nama desa tidak boleh kosong',
            'nama_desa.unique'=>'Nama desa sudah terdaftar'
        ]);
        $desa = new Desa();
        $desa ->id_kecamatan = $request->id_kecamatan;
        $desa ->nama_desa = $requrest->nama_desa;
        $desa ->save();
        return redirect()->route('desa.index')
        ->with(['succes'=>' Data <b> ', $desa->nama_desa,'</b> berhasil di input']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function show(desa $desa)
    {
        $desa = Desa::findOrFail($id);
        return view('admin.desa.show',compact('desa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function edit(desa $desa)
    {
        $desa = Desa::findOrFail($id);
        $kecamatan = Kecamatan::all();
        return view('admin.desa.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, desa $desa)
    {
        $desa = Desa::findOrFail();
        $desa ->id_kecamatan = $requrest->id_kecamatan;
        $desa ->nama_desa = $request->nama_desa;
        $desa ->save();
        return redirect()->route('desa.index')->with(['succes'=>'Data<b>' , $desa->nama_desa,
        '</b> berhasil di edit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function destroy(desa $desa)
    {
        //
    }
}
