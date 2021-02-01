@extends('layouts.master');
@section('content');
<div class ="container">
<div class ="row">
<div class ="col-md-12">
<div class ="card">
<div class =" card-header">
 Data desa
 <a href="{{route('desa.create')}}" class ="btn btn-dark float-right">
 tambah
 </a>
    </div>
    <div class ="card-body">
    <div class ="table-responsive"> 
    <table class="table">
        <tr>
        <th>No</th>
        <th>Kode desa</th>
        <th>Provinsi</th>
        <th>Aksi</th>
        </tr>
        @php
            $no=1;
            @endphp
        @foreach ($desa as $data)
        <tr>
        <td>{{$no++}}</td>        
        <td>{{$data->$kode_desa}}</td>        
        <td>{{$data->$nama_desa}}</td>        
        
        </tr>
        <form action="{{route('desa.destroy,$data->id')}}" method ="post">
        @method('delete')
        @csrf
        <a href="{{route('desa.edit',$data->id)}}"class = "btn btn-succes">Edit</a>
        <a href="{{route('desa.show',$data->id)}}" class="btn btn-info">show</a>
        <button type =" submit" class = "btn btn-danger">delete</button>
        </form>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>