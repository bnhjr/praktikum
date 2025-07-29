@extends('adminlte::page')

@section('title', 'Inventori | Data Pengguna')

@section('content_header')
    <h1 class="m-0 text-dark font-weight-bold" >DATA PENGGUNA</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('users.create') }}" class="btn btn-md btn-primary float-right">Tambah Baru</a>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tr align="center">
                            <th>No. </th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Aksi</th>
                        </tr>

                        @php
                            $no = 1;
                        @endphp

                        @foreach ($users as $user)
                        <tr>
                            <td align="center">{{ $no++ }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->password }}</td>
                            <td>
                                <form align="center" action="{{ route('users.destroy', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-md btn-warning">Edit</a>
                                    <button type="submit" class="btn btn-md btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
@stop
