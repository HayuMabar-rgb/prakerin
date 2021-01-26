@extends('layouts.master')
@section('content')
<div class ="container">
<div class ="row">
<div class ="col-md-12">
<div class ="card">
<div class =" card-header">
 Data kota
 <a href="{{route('kota.create')}}" class ="btn btn-dark float-right">
 tambah
 </a>
    </div>
    <div class ="card-body">
    <div class ="table-responsive"> 
    <table class="table">
        <tr>
        <th>No</th>
        <th>Kode kota</th>
        <th>Provinsi</th>
        <th>Aksi</th>
        </tr>
        @php
            $no=1;
            @endphp
        @foreach ($kota as $data)
        <tr>
        <td>{{$no++}}</td>        
        <td>{{$data->$kode_kota}}</td>        
        <td>{{$data->$nama_kota}}</td>        
        
        </tr>
        <form action="{{route('kota.destroy,$data->id')}}" method ="post">
        @method('delete')
        @csrf
        <a href="{{route('kota.edit',$data->id)}}"class = "btn btn-succes">Edit</a>
        <a href="{{route('kota.show',$data->id)}}" class="btn btn-info">show</a>
        <button type =" submit" class = "btn btn-danger">delete</button>
        </form>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>