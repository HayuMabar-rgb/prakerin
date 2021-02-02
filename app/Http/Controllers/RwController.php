<?php

namespace App\Http\Controllers;

use App\Models\rw;
use App\Models\desa;
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

        // $rw = rw::with('admin.desa')->get();
        // return view('admin.rw.index',compact('rw'));
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
        return view('admin.rw.create' , compact('desa'));
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
            'nama_rw' => 'required|unique:rws'
        ], [
            'nama_rw.required' => 'Nama rw tidak boleh kosong',
            'nama_rw.unique' => 'Nama desa sudah terdaftar'
        ]);

        $rw = new Rw();
        $rw->id_desa = $request->id_desa;
        $rw->nama_rw = $request->nama_rw;
        $rw->save();
        return redirect()->route('rw.index')
                    ->with(['succes'=>'Data <b>',$rw->nama_rw,
                    '</b> berhasil di input']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rw = rw::findOrFail($id);
        return view('admin.rw.show', compact('rw'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rw = Rw::findOrFail($id);
        $desa = Desa::all();
        return view('admin.rw.edit', compact('rw','desa'));
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
        $request->validate([
            'nama_rw' => 'required'
        ], [
            'nama_rw.required' => 'Nama rw tidak boleh kosong',
        ]);
        
        $rw = Rw::findOrFail($id);
        $rw->id_desa = $request->id_desa;
        $rw->nama_rw = $request->nama_rw;
        $rw->save();
        return redirect()->route('rw.index')
                    ->with(['succes'=>'Data <b>',$rw->nama_rw,
                    '</b> berhasil di edit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rw = Rw::findOrFail($id);
        $rw->delete();
        return redirect()->route('rw.index')
                    ->with(['succes'=>'Data <b>',$rw->nama_rw,
                    '</b> berhasil di hapus']);
    }
}