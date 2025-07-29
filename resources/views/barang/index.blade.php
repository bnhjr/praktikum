@extends('adminlte::page')

@section('title', 'Inventori | Data Barang')

@section('plugins.Datatables', true)

@section('content_header')
    <h1 class="m-0 text-dark font-weight-bold" >DATA BARANG</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('barang.create') }}" class="btn btn-md btn-primary float-right ml-2">Tambah Baru</a>
                    <a href="{{ route('cetak.barang') }}" class="btn btn-md btn-danger float-right ml-2">Cetak</a>
                    <a href="{{ route('export.barang') }}" class="btn btn-md btn-success float-right">Export Excel</a>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr align="center">
                                <th>No.</th>
                                <th>Nama Barang</th>
                                <th>Merk</th>
                                <th>Tipe</th>
                                <th>Satuan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
@stop

@push('js')
<script>
    $(function() {
        var table = $('.table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('get.barang') }}",
                type: 'GET'
            },
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false, className: 'text-center'},
                {data: 'nama_barang', name: 'nama_barang'},
                {data: 'merk', name: 'merk'},
                {data: 'tipe', name: 'tipe'},
                {data: 'satuan', name: 'satuan'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
    });
</script>
@endpush




