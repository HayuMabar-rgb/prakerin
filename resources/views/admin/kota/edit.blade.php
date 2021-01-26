@extends('layouts.master')
@section('content');
 <div class ="container">
  <div class ="row">
        <div class ="col-md-12">
            <div class ="card">
                <div class ="card-header">Edit data kota
                 </div>
                    <div class ="card-body">
         <form action="{{route('admin.kota.update',$kota->id)}}" method ="post">
            @method('put')
            @csrf
        <div class="form-group">
        <label for="">Kode kota</label>
        <input type="text" name= "kode_kota" class= "form-control" value="{{$kota->kode_kota}}">
        </div>
    <div class ="form-group">
    <label for="">Nama kota</label>
    <input type="text" name="nama_kota" class="form_control" value="{{$kota->nama_kota}}"> 
    </div>
    <div class= "form-group">
    <button type ="submit" class="btn btn-primary btn-block">simpan</button>
    </div>
    </form>
    </div>
    </div>
    </div></div>
</div>