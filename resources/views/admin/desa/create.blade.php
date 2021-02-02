@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Tambah Data desa
                    </div>
                    <div class="card-body">
                        <form action="{{route('desa.store')}}" method="post">
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
                            <input type="text" name="nama_desa" class="form-control"  id="exampleInputPassword1" placeholder="Nama Desa" required>
                            @if($errors->has('nama_desa'))
                                <span class="text-danger">{{ $errors->first('nama_desa') }}</span>
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