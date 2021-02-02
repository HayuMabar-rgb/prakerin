@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Tambah Data rw
                    </div>
                    <div class="card-body">
                        <form action="{{route('rw.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                                <label>Pilih desa</label>
                                <select name="id_desa" class="form-control">
                                @foreach ($desa as $item)
                                      <option value="{{ $item->id }}">{{$item->nama_desa}}</option>
                                @endforeach
                                </select>
                            </div>
                        <div class="form-group">
                            <label for="">Nama rw</label>
                            <input type="text" name="nama_rw" class="form-control" required>
                            @if($errors->has('nama_rw'))
                                <span class="text-danger">{{ $errors->first('nama_rw') }}</span>
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