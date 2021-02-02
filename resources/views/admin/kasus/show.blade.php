@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Data kasus
                    </div>
                    <div class="card-body">
                        
                        
                        <div class="form-group">
                                <label for="">Positif</label>
                                <input type="text" name="positif" class="form-control" value="{{$kasus->positif}}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Sembuh</label>
                                <input type="text" name="sembuh" class="form-control" value="{{$kasus->sembuh}}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Meninggal</label>
                                <input type="text" name="meninggal" class="form-control" value="{{$kasus->meninggal}}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                    <label for="">Tanggal</label>
                                    <input type="text" name="tanggal" class="form-control" value="{{$kasus->tanggal}}" class="form-control" readonly>
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