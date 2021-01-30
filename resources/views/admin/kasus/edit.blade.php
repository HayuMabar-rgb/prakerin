@extends('layouts.master')
@section('content');
 <div class ="container">
  <div class ="row">
        <div class ="col-md-12">
            <div class ="card">
                <div class ="card-header">Edit data kasus
                 </div>
                    <div class ="card-body">
         <form action="{{route('admin.kasus.update',$kasus->id)}}" method ="post">
            @method('put')
            @csrf
        <div class="form-group">
        <label for="">Kode kasus</label>
        <input type="text" name= "kode_kasus" class= "form-control" value="{{$kasus->kode_kasus}}">
        </div>
    <div class ="form-group">
    <label for="">Nama kasus</label>
    <input type="text" name="nama_kasus" class="form_control" value="{{$kasus->nama_kasus}}"> 
    @if ($errors->has('nama_kasus'))
    <span class="text-danger">{{$errors->first('nama_kasus')}}
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