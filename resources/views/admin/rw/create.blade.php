@extends('layouts.master')
@section('content');
 <div class ="container">
  <div class ="row">
        <div class ="col-md-12">
            <div class ="card">
                <div class ="card-header">Tambah Data Provinsi
                 </div>
                    <div class ="card-body">
         <form action="{{route('rw.store')}}" method ="post">
            @csrf
        <div class="form-group">
        <label for="">Kode rw</label>
        <input type="text" name= "kode_rw" class= "form-control" required>
        </div>
    <div class ="form-group">
    <label for="">Nama rw</label>
    <input type="text" name="nama_rw" class="form_control" required> 
    @if ($errors->has('nama_rw'))
    <span class="text-danger">{{$errors->first('nama_rw')}}
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