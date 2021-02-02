@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Data kota
                    </div>
                    <div class="card-body">
                        
                
                        <div class="form-group">
                            <label for="">Kode kota</label>
                        <input type="text" name="kode_kota" class="form-control" value="{{$kota->kode_kota}}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Nama kota</label>
                            <input type="text" name="nama_kota" class="form-control" value="{{$kota->nama_kota}}" class="form-control" readonly>
                        </div>
                        <div class="fprm-group">
                            <a href="{{url()->previous()}}" class="btn btn-primary">Kembali</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection