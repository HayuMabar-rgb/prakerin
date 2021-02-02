@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Data rw
                    </div>
                    <div class="card-body">
                        
                        <div class="form-group">
                            <label for="">Nama rw</label>
                            <input type="text" name="nama_rw" class="form-control" value="{{$rw->nama_rw}}" class="form-control" readonly>
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