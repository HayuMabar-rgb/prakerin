@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Tambah Data kecamatan
                    </div>
                    <div class="card-body">
                        <form action="{{route('kecamatan.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                                <label>Pilih kota</label>
                                <select name="id_kota" class="form-control">
                                @foreach ($kota as $item)
                                      <option value="{{ $item->id }}">{{$item->nama_kota}} - {{$item->kode_kota}}</option>
                                @endforeach
                                </select>
                            </div>
                        <div class="form-group">
                            <label for="">Nama kecamatan</label>
                            <input type="text" name="nama_kecamatan" class="form-control" id="exampleInputPassword1" placeholder="Nama Kecamatan" required>
                            @if($errors->has('nama_kecamatan'))
                                <span class="text-danger">{{ $errors->first('nama_kecamatan') }}</span>
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