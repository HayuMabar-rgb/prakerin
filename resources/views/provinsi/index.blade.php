@extends('layouts.master')

@section('content')
<div class ="container-fluid" >
    <div class = "row justify-content-center">
        <div class = "col-md-12">
            <div class ="card">
                <div class ="class-header">
            Data provinsi
                </div>
        <div class ="card - body">
            <div class="table-responsive">
                <table class ="table">
                    <tr>
                        <th>
                            <th>no</th>
                            <th>Kode provinsi</th>
                            <th>provinsi</th>
                            <th>Aksi</th>
                        </th>
                    </tr>
                    y@php $no =1; @endphp
                    foreach($provinsi As $data )
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{data->kode_provinsi}}</td>
                        <td>{{data->nama_provinsi}}</td>
                        <td>Edit | Show | Delete</td>
                    </tr>
                    <form action="{{route('provinsi.destroy'. $data->id)}}" method = "post">
                    @method('delete');
                    @csrf
                    <a href="{{route('provinsi.edit', $data->id )}}"></a>

                    </form>
                </table>

            </div>

        </div>
            </div>

        </div>

    </div>
</div>
@endsection