@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Data kecamatan
                    </div>
                    <div class="card-body">
                        
                        <div class="form-group">
                            <label for="">Nama kecamatan</label>
                            <input type="text" name="nama_kecamatan" class="form-control" value="{{$kecamatan->nama_kecamatan}}" class="form-control" readonly>
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