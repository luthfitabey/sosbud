@extends('adminlte::page')

@section('title', 'Tambah Jenis Surat')

@section('content_header')
    <h1 class="m-0 text-dark">Jenis Surat</h1>
@stop

@section('content')
    <form action="{{route('jenis.store')}}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputName">Id Jenis Surat</label>
                        <input type="text" class="form-control @error('id') is-invalid @enderror" id="exampleInputName" placeholder="Bilangan 1-10" name="id_jenis_surat" value="{{old('name')}}">
                        @error('id') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputText">Jenis Surat</label>
                        <input type="text" class="form-control @error('text') is-invalid @enderror" id="exampleInputText" placeholder="Surat Masuk/Keluar" name="jenis_surat" value="{{old('text')}}">
                        @error('text') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('jenis.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop