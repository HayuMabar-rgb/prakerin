@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                        Data Kota
                    <a href="{{route('kecamatan.create')}}"
                        class="btn btn-dark float-right">
                        Tambah
                    </a>
                    </div>
                    <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kecamatan<th>
                                    <th>Aksi</th>
                                </tr>
                                @php
                                    $no=1;
                                @endphp
                                @foreach ($kecamatan as $data)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$data->nama_kecamatan}}</td>
                                        <td>
                                            <form action="{{route('kecamatan.destroy', $data->id)}}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{route('kecamatan.edit', $data->id)}}" class="btn btn-success">Edit</a>
                                                <a href="{{route('kecamatan.show', $data->id)}}" class="btn btn-info">Show</a>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection