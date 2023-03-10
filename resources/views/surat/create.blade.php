@extends('adminlte::page')

@section('title', 'Tambah Surat')

@section('content_header')
    <!-- <h1 class="m-0 text-dark">Tambah Surat</h1> -->
@stop

@section('style-css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


@section('content')
    <!-- <div class="container"> -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header"><h2 class="m-0 text-dark">Tambah Surat</h2></div>
                    <div class="card-body">
                        {{-- action form yang mengarah ke route surat.store untuk proses penyimpanan data --}}
                        <form action="{{ route('surats.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="jenis-option">Jenis Surat</label>
                                <select class="form-control" id="jenis-option" name="id_jenis_surat">
                                    @foreach ($jenis as $jenis)
                                        <option value="{{ $jenis->id_jenis_surat }}"> {{ $jenis->jenis_surat}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Nomor Surat</label>
                                <input type="text" name="nomor_surat" class="form-control @error('nomor') is-invalid @enderror" id="">
                                @error('nomor')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Perihal</label>
                                <input type="text" name="perihal" class="form-control @error('perihal') is-invalid @enderror" id="">
                                @error('perihal')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Tanggal</label>
                                <input type="datetime-local" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" id="">
                                @error('tanggal')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Tindak Lanjut</label>
                                <input type="text" name="tl" class="form-control @error('tl') is-invalid @enderror" id="">
                                @error('tl')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Keterangan</label><br>
                                <img id="previewImage" class="mb-2" src="#" width="100%" alt="">
                                <input type="file" name="keterangan" class="form-control @error('image') is-invalid @enderror"
                                    id="image">
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- </div> -->
@endsection

@push('js')
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <script>
        // fungsi ini akan berjalan ketika akan menambahkan gambar dimana fungsi ini
        // akan membuat preview image sebelum kita simpan gambar tersebut.      
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#previewImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        // Ketika tag input file denghan class image di klik akan menjalankan fungsi di atas
        $("#image").change(function() {
            readURL(this);
        });
    </script>
@endpush