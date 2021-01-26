@extends('layouts.master')
@section('content');
 <div class ="container">
  <div class ="row">
        <div class ="col-md-12">
            <div class ="card">
                <div class ="card-header">Tambah Data desa
                 </div>
                    <div class ="card-body">
         <form action="{{route('desa.store')}}" method ="post">
            @csrf
        <div class="form-group">
        <label for="">Kode desa</label>
        <input type="text" name= "kode_desa" class= "form-control" required>
        </div>
    <div class ="form-group">
    <label for="">Nama desa</label>
    <input type="text" name="nama_desa" class="form_control" required> 
    </div>
    <div class= "form-group">
    <button type ="submit" class="btn btn-primary btn-block">simpan</button>
    </div>
    </form>
    </div>
    </div>
    </div></div>
</div>