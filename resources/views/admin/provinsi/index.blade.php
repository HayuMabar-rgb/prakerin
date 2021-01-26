@extends('layouts.master')
@section('content')
<div class ="container">
<div class ="row">
<div class ="col-md-12">
<div class ="card">
<div class =" card-header">
 Data provinsi
 <a href="{{route('provinsi.create')}}" class ="btn btn-dark float-right">
 tambah
 </a>
    </div>
    <div class ="card-body">
    <div class ="table-responsive"> 
    <table class="table">
        <tr>
        <th>No</th>
        <th>Kode provinsi</th>
        <th>Provinsi</th>
        <th>Aksi</th>
        </tr>
        @php
            $no=1;
            @endphp
        @foreach ($provinsi as $data)
        <tr>
        <td>{{$no++}}</td>        
        <td>{{$data->$kode_provinsi}}</td>        
        <td>{{$data->$nama_provinsi}}</td>        
        
        </tr>
        <form action="{{route('provinsi.destroy,$data->id')}}" method ="post">
        @method('delete')
        @csrf
        <a href="{{route('provinsi.edit',$data->id)}}"class = "btn btn-succes">Edit</a>
        <a href="{{route('provinsi.show',$data->id)}}" class="btn btn-info">show</a>
        <button type =" submit" class = "btn btn-danger">delete</button>
        </form>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>