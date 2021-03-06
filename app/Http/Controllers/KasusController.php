<?php

namespace App\Http\Controllers;

use App\Models\Kasus;
use App\Models\Rw;
use App\Models\Kecamatan;
use App\Models\Desa;
use App\Models\Provinsi;
use App\Models\Kota;
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
        $rw = Rw::all();
        return view('admin.kasus.index', compact('kasus'));

        // $kasus = kasus::with('admin.rw')->get();
        // return view('admin.kasus.index',compact('kasus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kasus = Kasus::all();
        $rw = Rw::all();
        return view('admin.kasus.create' , compact('kasus','rw'));
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
        $kasus->id_rw = $request->id_rw;
        $kasus->positif = $request->positif;
        $kasus->sembuh = $request->sembuh;
        $kasus->meninggal = $request->meninggal;
        $kasus->tanggal = $request->tanggal;
        $kasus->save();
        return redirect()->route('kasus.index')
                    ->with(['succes'=>'Data <b>',$kasus->positif,
                    '</b> berhasil di input']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kasus = Kasus::findOrFail($id);
        $rw=Rw::all();
        $kota=Kota::all();
        $provinsi=Provinsi::all();
        $kecamatan=Kecamatan::all();
        $desa=Desa::all();
        return view ('admin.kasus.show' , compact('kasus' , 'rw' , 'kota' , 'provinsi' , 'kecamatan' , 'desa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kasus = Kasus::findOrFail($id);
        $rw = Rw::all();
        $selected = $kasus->rw->pluck('id')->toArray();
        return view('admin.kasus.edit', compact('kasus', 'rw' , 'selected'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kasus = Kasus::findOrFail($id);
        $kasus->id_rw = $request->id_rw;
        $kasus->positif = $request->positif;
        $kasus->sembuh = $request->sembuh;
        $kasus->meninggal = $request->meninggal;
        $kasus->tanggal = $request->tanggal;
        $kasus->save();
        return redirect()->route('kasus.index')
                    ->with(['succes'=>'Data <b>',$kasus->positif,
                    '</b> berhasil di edit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kasus = Kasus::findOrFail($id);
        $kasus->delete();
        return redirect()->route('kasus.index')
                    ->with(['succes'=>'Data <b>',$kasus->nama_kasus,
                    '</b> berhasil di hapus']);
    }
}