  
@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Tambah Data kasus
                    </div>
                    <div class="card-body">
                        <form action="{{route('kasus.store')}}" method="post">
                        @csrf
                        @livewireScripts
                        @livewire('dropdowns')
                        @livewireStyles
                        <div class="form-group">
                                {{-- <label>Pilih rw</label>
                                <select name="id_rw" class="form-control">
                                @foreach ($rw as $item)
                                      <option value="{{ $item->id }}">{{$item->nama_rw}}</option>
                                @endforeach
                                </select> --}}
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Positif</label>
                                <input type="number" name="positif" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Meninggal</label>
                                <input type="number" name="meninggal" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Sembuh</label>
                                <input type="number" name="sembuh" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn block">Simpan</button>
                                <a href=" {{ route('kasus.index') }} " class="btn btn-danger">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection