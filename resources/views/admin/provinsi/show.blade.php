@extends('layouts.master')
@section('content')
<div class ="container">
    <div class = "row">
     <div class ="col-md-12">
      <div class ="card">
        <div class ="card-header"> Edit data provinsi
     <div class ="card-body">
     <div class ="form-group">
        <label for="">kode provinsi</label>
        <input type="text" name ="kode_provinsi" class = "form-control" value="{{$provinsi->kode_provinsi}}">
     </div>
      <div class="form-group">
        <label for="">Nama provinsi</label>
        <input type="text" name="nama_provinsi" class="form-control" value="{{$provinsi->nama_provinsi}}">
      </div>
      <div class ="form-group">
      <a href="{{url()->previous()}}" class="btn btn-primary">kembali</a>
      </div>
     </div>
     </div>
     </div>

    </div>
</div>