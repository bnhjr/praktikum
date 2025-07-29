@extends('adminlte::page')

@section('title', 'Inventori | Tambah Data Pengguna')

@section('content_header')
    <h1 class="m-0 text-dark">Tambah Data Pengguna</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">

                    <form action="{{ route('users.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                            <a href="{{ route('users.index') }}" class="btn btn-md btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
