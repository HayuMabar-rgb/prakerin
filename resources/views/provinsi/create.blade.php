@extends('layouts.master')
@section('content')
<div class ="container">
<div class =" row" >
<div class =" col-md-12">
    <div class =" card">
        <div class = "header">
        Tambah data Provinsi 
        <div class =" card-body">
        <form action= "{{route('provinsi.store')}}" method = "post">
            @csrf
            <div class =" form-group">
                <label for="">kode Provinsi</label>
                <input type="text" name ="kode_provinsi" class = " form-control">

            </div>
            <div class =" form-group">
                <label for="">nama Provinsi</label>
                <input type="text" name ="kode_provinsi" class = "form-control">
            </div>
            <div class =" form-group">
            <button type = "submit" class = " btn btn-primary btn-block">Simpan </button>
        </div>

        </form>
        </div>

        </div>

    </div>

</div>
</div>
</div>