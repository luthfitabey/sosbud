@extends('adminlte::page')

@section('title', 'Jenis Surat')

@section('content_header')
    <h1 class="m-0 text-dark">Jenis Surat</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <a href="{{route('jenis.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>

                    <table class="table table-hover table-bordered table-stripped" id="j2">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Id Jenis Surat</th>
                            <th>Jenis Surat</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($jenis as $key => $j)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$j->id_jenis_surat}}</td>
                                <td>{{$j->jenis_surat}}</td>
                                <td>
                                    <a href="{{route('jenis.edit', $j)}}" class="btn btn-primary btn-xs">
                                        Edit
                                    </a>
                                    <a href="{{route('jenis.destroy', $j)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@stop

@push('js')
    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
    <script>
        $('#j2').DataTable({
            "responsive": true,
        });

        function notificationBeforeDelete(event, el) {
            event.preventDefault();
            if (confirm('Apakah anda yakin akan menghapus data ? ')) {
                $("#delete-form").attr('action', $(el).attr('href'));
                $("#delete-form").submit();
            }
        }

    </script>
@endpush