@extends('layouts.master')
@section('content')
<div class ="container">
    <div class = "row">
     <div class ="col-md-12">
      <div class ="card">
        <div class ="card-header"> Edit data kecamatan
     <div class ="card-body">
     <div class ="form-group">
        <label for="">kode kecamatan</label>
        <input type="text" name ="kode_kota" class = "form-control" value="{{$kecamatan->kode_kota}}">
     </div>
      <div class="form-group">
        <label for="">Nama kecamatan</label>
        <input type="text" name="nama_kota" class="form-control" value="{{$kecamatan->nama_kota}}">
      </div>
      <div class ="form-group">
      <a href="{{url()->previous()}}" class="btn btn-primary">kembali</a>
      </div>
     </div>
     </div>
     </div>

    </div>
</div>