@extends('adminlte::page')

@section('title', 'Data Surat')

@section('content_header')
    <!-- <h1 class="m-0 text-dark">Surat Masuk dan Keluar</h1> -->
@stop

@section('style-css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

@section('content')
    <!-- <div class="container"> -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header"><h2 class="m-0 text-dark">Surat Masuk dan Keluar</h2></div>
                    <div class="card-body">
                        <a href="{{ route('surats.create') }}" class="btn btn-info btn-sm float-end mb-2">Tambah Data</a>
                        
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table" id="surat">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <!-- <th>Id</th> -->
                                    <th>Nomor Surat</th>
                                    <th>Perihal</th>
                                    <th>Tanggal</th>
                                    <th>Tindak lanjut </th>
                                    <!-- <th>Keterangan </th> -->
                                    <!-- <th>Id User </th>
                                    <th>Id Jenis Surat </th> -->
                                    <!-- <th>Created At </th>
                                    <th>Updated At </th> -->
                                    <th>Opsi</th>
                                </tr>
                            <tbody></tbody>
                            </thead>
                        </table>
                        <form action="" method="POST" id="deleteForm">
                            @csrf
                            @method("DELETE")
                            <input type="submit" value="Hapus" style="display: none">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- </div> -->
@endsection

@push('js')
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(function() {
            $('#surat').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                lengthChange: false,
                autoWidth: false,
                
                // Route untuk menampilkan data surat
                ajax: '{{ route('data-surat.data') }}',
                columns: [{
                        data: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'nomor_surat'
                    },
                    {
                        data: 'perihal'
                    },
                    {
                        data: 'tanggal'
                    },
                    {
                        data: 'tl'
                    },
                    // {
                    //     data: 'created_at'
                    // },
                    // {
                    //     data: 'updated_at'
                    // },
                    {
                        data: 'action'
                    }
                ]
            })
        })
    </script>
@endpush