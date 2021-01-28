@extends('layouts.master')
@section('content');
 <div class ="container">
  <div class ="row">
        <div class ="col-md-12">
            <div class ="card">
                <div class ="card-header">Edit data provinsi
                 </div>
                    <div class ="card-body">
         <form action="{{route('admin.provinsi.update',$provinsi->id)}}" method ="post">
            @method('put')
            @csrf
        <div class="form-group">
        <label for="">Kode provinsi</label>
        <input type="text" name= "kode_provinsi" class= "form-control" value="{{$provinsi->kode_provinsi}}">
        </div>
    <div class ="form-group">
    <label for="">Nama provinsi</label>
    <input type="text" name="nama_provinsi" class="form_control" value="{{$provinsi->nama_provinsi}}"> 
    @if ($errors->has('nama_provinsi'))
    <span class="text-danger">{{$errors->first('nama_provinsi')}}
    @endif
    </div>
    <div class= "form-group">
    <button type ="submit" class="btn btn-primary btn-block">simpan</button>
    </div>
    </form>
    </div>
    </div>
    </div></div>
</div>