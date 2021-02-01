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
                        <form action="{{route('kota.update',$kota->id)}}" method="post">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label>Pilih Provinsi</label>
                            <select name="id_provinsi" class="form-control">
                                @foreach ($provinsi as $item)
                                    <option value="{{ $item->id }}">{{$item->nama_provinsi}} - {{$item->kode_provinsi}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Kode kota</label>
                        <input type="text" name="kode_kota" class="form-control" value="{{$kota->kode_kota}}" class="form-control" required>
                        @if($errors->has('kode_kota'))
                            <span class="text-danger">{{ $errors->first('kode_kota') }}</span>
                        @endif
                        </div>
                        <div class="form-group">
                            <label for="">Nama kota</label>
                            <input type="text" name="nama_kota" class="form-control" value="{{$kota->nama_kota}}" class="form-control" required>
                            @if($errors->has('nama_kota'))
                                <span class="text-danger">{{ $errors->first('nama_kota') }}</span>
                            @endif
                        </div>
                        <div class="fprm-group">
                            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection