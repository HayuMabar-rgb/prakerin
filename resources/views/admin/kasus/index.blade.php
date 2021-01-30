@extends('layouts.master')
@section('content')
<div class ="container">
<div class ="row">
<div class ="col-md-12">
<div class ="card">
<div class =" card-header">
 Data kasus
 <a href="{{route('kasus.create')}}" class ="btn btn-dark float-right">
 tambah
 </a>
    </div>
    <div class ="card-body">
    <div class ="table-responsive"> 
    <table class="table">
        <tr>
        <th>No</th>
        <th>Kode kasus</th>
        <th>Provinsi</th>
        <th>Aksi</th>
        </tr>
        @php
            $no=1;
            @endphp
        @foreach ($kasus as $data)
        <tr>
        <td>{{$no++}}</td>        
        <td>{{$data->$kode_kasus}}</td>        
        <td>{{$data->$nama_kasus}}</td>        
        
        </tr>
        <form action="{{route('kasus.destroy,$data->id')}}" method ="POST">
        @method('delete')
        @csrf
        <a href="{{route('kasus.edit',$data->id)}}"class = "btn btn-succes">Edit</a>
        <a href="{{route('kasus.show',$data->id)}}" class="btn btn-info">show</a>
        <button type =" submit" class = "btn btn-danger">delete</button>
        </form>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
