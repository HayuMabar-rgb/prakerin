@extends('layouts.master')
@section('content')
<div class ="container">
<div class ="row">
<div class ="col-md-12">
<div class ="card">
<div class =" card-header">
 Data kecamatan
 <a href="{{route('kecamatan.create')}}" class ="btn btn-dark float-right">
 tambah
 </a>
    </div>
    <div class ="card-body">
    <div class ="table-responsive"> 
    <table class="table">
        <tr>
        <th>No</th>
        <th>Kode kecamatan</th>
        <th>Provinsi</th>
        <th>Aksi</th>
        </tr>
        @php
            $no=1;
            @endphp
        @foreach ($kecamatan as $data)
        <tr>
        <td>{{$no++}}</td>        
        <td>{{$data->$kode_kecamatan}}</td>        
        <td>{{$data->$nama_kecamatan}}</td>        
        
        </tr>
        <form action="{{route('kecamatan.destroy,$data->id')}}" method ="post">
        @method('delete')
        @csrf
        <a href="{{route('kecamatan.edit',$data->id)}}"class = "btn btn-succes">Edit</a>
        <a href="{{route('kecamatan.show',$data->id)}}" class="btn btn-info">show</a>
        <button type =" submit" class = "btn btn-danger">delete</button>
        </form>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>