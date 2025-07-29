@extends('adminlte::page')

@section('title', 'Inventori | Edit Data Barang')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Data Barang</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">

                    <form action="{{ route('barang.update', $barang->id) }}') }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Nama Barang</label>
                            <input value="{{ $barang->nama_barang}}" type="text" name="nama_barang" class="form-control" id="nama_barang" placeholder="Masukkan Nama Barang" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Merk</label>
                            <input value="{{ $barang->merk}}" type="text" name="merk" class="form-control" id="merk" placeholder="Masukkan Merk" required>
                        </div>
                        <div class="form-group">
                            <label for="tipe">Tipe</label>
                            <select class="form-control" name="tipe" id="tipe" required>
                                <option value="">--Pilih Tipe--</option>
                                <option value="FOOD" {{ $barang->tipe == 'FOOD' ? 'selected' : '' }}>FOOD</option>
                                <option value="NON FOOD" {{ $barang->tipe == 'NON FOOD' ? 'selected' : '' }}>NON FOOD</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="satuan">Satuan</label>
                            <input value="{{ $barang->satuan}}" type="text" name="satuan" class="form-control" id="satuan" placeholder="Masukkan Satuan" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                            <a href="{{ route('barang.index') }}" class="btn btn-md btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
