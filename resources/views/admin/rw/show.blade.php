@extends('layouts.master')
@section('content')
<div class ="container">
    <div class = "row">
     <div class ="col-md-12">
      <div class ="card">
        <div class ="card-header"> Edit data rw
     <div class ="card-body">
     <div class ="form-group">
        <label for="">kode rw</label>
        <input type="text" name ="kode_rw" class = "form-control" value="{{$rw->kode_rw}}">
     </div>
      <div class="form-group">
        <label for="">Nama rw</label>
        <input type="text" name="nama_rw" class="form-control" value="{{$rw->nama_rw}}">
      </div>
      <div class ="form-group">
      <a href="{{url()->previous()}}" class="btn btn-primary">kembali</a>
      </div>
     </div>
     </div>
     </div>

    </div>
</div>