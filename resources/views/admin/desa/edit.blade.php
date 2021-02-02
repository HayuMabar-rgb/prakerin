@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Data desa
                    </div>
                    <div class="card-body">
                        <form action="{{route('desa.update',$desa->id)}}" method="post">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label>Pilih kecamatan</label>
                            <select name="id_kecamatan" class="form-control">
                                @foreach ($kecamatan as $item)
                                    <option value="{{ $item->id }}">{{$item->nama_kecamatan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama desa</label>
                            <input type="text" name="nama_desa" class="form-control" value="{{$desa->nama_desa}}" class="form-control" required>
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