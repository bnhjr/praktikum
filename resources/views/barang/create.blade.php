@extends('adminlte::page')

@section('title', 'Tambah Data Barang')

@section('content_header')
    <h1 class="m-0 text-dark">Data Barang</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">

                    <form action="{{ route('barang.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Masukkan Nama Barang">
                        </div>
                        <div class="form-group">
                            <label for="merk">Merk</label>
                            <input type="text" class="form-control" name="merk" id="merk" placeholder="Masukkan Merk">
                        </div>
                        <div class="form-group">
                            <label for="tipe">Tipe</label>
                            <select class="form-control" name="tipe" id="tipe">
                                <option value="">--Pilih Tipe--</option>
                                <option value="FOOD">FOOD</option>
                                <option value="NON FOOD">NON FOOD</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="satuan">Satuan</label>
                            <input type="text" class="form-control" name="satuan" id="satuan" placeholder="Masukkan Satuan">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('barang.index') }}" class="btn btn-danger">Batal</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
@stop
