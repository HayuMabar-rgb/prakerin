@extends('layouts.master')
@section('content');
 <div class ="container">
  <div class ="row">
        <div class ="col-md-12">
            <div class ="card">
                <div class ="card-header">Tambah Data Provinsi
                 </div>
                    <div class ="card-body">
         <form action="{{route('kasus.store')}}" method ="post">
            @csrf
        <div class="form-group">
        <label for="">Kode kasus</label>
        <input type="text" name= "kode_kasus" class= "form-control" required>
        </div>
    <div class ="form-group">
    <label for="">Nama kasus</label>
    <input type="text" name="nama_kasus" class="form_control" required> 
    @if ($errors->has('nama_kasus'))
    <span class="text-danger">{{$errors->first('nama_kasus')}}
    @endif
    </span>
    </div>
    <div class= "form-group">
    <button type ="submit" class="btn btn-primary btn-block">simpan</button>
    </div>
    </form>
    </div>
    </div>
    </div></div>
</div>