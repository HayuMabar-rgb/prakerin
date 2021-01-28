@extends('layouts.master')
@section('content');
 <div class ="container">
  <div class ="row">
        <div class ="col-md-12">
            <div class ="card">
                <div class ="card-header">Tambah Data Provinsi
                 </div>
                    <div class ="card-body">
         <form action="{{route('provinsi.store')}}" method ="post">
            @csrf
        <div class="form-group">
        <label for="">Kode provinsi</label>
        <input type="text" name= "kode_provinsi" class= "form-control" required>
        </div>
    <div class ="form-group">
    <label for="">Nama provinsi</label>
    <input type="text" name="nama_provinsi" class="form_control" required> 
    @if ($errors->has('nama_provinsi'))
    <span class="text-danger">{{$errors->first('nama_provinsi')}}
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