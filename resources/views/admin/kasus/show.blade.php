@extends('layouts.master')
@section('content')
<div class ="container">
    <div class = "row">
     <div class ="col-md-12">
      <div class ="card">
        <div class ="card-header"> Edit data kasus
     <div class ="card-body">
     <div class ="form-group">
        <label for="">kode kasus</label>
        <input type="text" name ="kode_kasus" class = "form-control" value="{{$kasus->kode_kasus}}">
     </div>
      <div class="form-group">
        <label for="">Nama kasus</label>
        <input type="text" name="nama_kasus" class="form-control" value="{{$kasus->nama_kasus}}">
      </div>
      <div class ="form-group">
      <a href="{{url()->previous()}}" class="btn btn-primary">kembali</a>
      </div>
     </div>
     </div>
     </div>

    </div>
</div>