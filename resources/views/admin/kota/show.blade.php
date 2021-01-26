@extends('layouts.master')
@section('content')
<div class ="container">
    <div class = "row">
     <div class ="col-md-12">
      <div class ="card">
        <div class ="card-header"> Edit data kota
     <div class ="card-body">
     <div class ="form-group">
        <label for="">kode kota</label>
        <input type="text" name ="kode_kota" class = "form-control" value="{{$kota->kode_kota}}">
     </div>
      <div class="form-group">
        <label for="">Nama kota</label>
        <input type="text" name="nama_kota" class="form-control" value="{{$kota->nama_kota}}">
      </div>
      <div class ="form-group">
      <a href="{{url()->previous()}}" class="btn btn-primary">kembali</a>
      </div>
     </div>
     </div>
     </div>

    </div>
</div>