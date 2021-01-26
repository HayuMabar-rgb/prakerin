@extends('layouts.master')
@section('content');
 <div class ="container">
  <div class ="row">
        <div class ="col-md-12">
            <div class ="card">
                <div class ="card-header">Edit data kecamatan
                 </div>
                    <div class ="card-body">
         <form action="{{route('admin.kecamatan.update',$kecamatan->id)}}" method ="post">
            @method('put')
            @csrf
        <div class="form-group">
        <label for="">Kode kecamatan</label>
        <input type="text" name= "kode_kecamatan" class= "form-control" value="{{$kecamatan->kode_kecamatan}}">
        </div>
    <div class ="form-group">
    <label for="">Nama kecamatan</label>
    <input type="text" name="nama_kecamatan" class="form_control" value="{{$kecamatan->nama_kecamatan}}"> 
    </div>
    <div class= "form-group">
    <button type ="submit" class="btn btn-primary btn-block">simpan</button>
    </div>
    </form>
    </div>
    </div>
    </div></div>
</div>