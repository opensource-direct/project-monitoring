@extends('layouts.app')

@section('title', isset($barang) ? 'Ubah Data Barang' : 'Tambah Data Barang')

@section('contents')
<form action="{{ isset($barang) ? route('barang.update', $barang->id) : route('barang.store') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ isset($barang) ? 'Form Ubah Data Barang' : 'Form Tambah Data Barang' }}</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="kode_barang">Kode Barang</label>
                        <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="{{ isset($barang) ? $barang->kode_barang : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ isset($barang) ? $barang->nama_barang : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="kategori_barang">Kategori Barang</label>
                        <input type="text" class="form-control" id="kategori_barang" name="kategori_barang" value="{{ isset($barang) ? $barang->kategori_barang : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga" value="{{ isset($barang) ? $barang->harga : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="stock">Stok</label>
                        <input type="text" class="form-control" id="stock" name="stock" value="{{ isset($barang) ? $barang->stock : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="sisa">Sisa</label>
                        <input type="text" class="form-control" id="sisa" name="sisa" value="{{ isset($barang) ? $barang->sisa : '' }}">
                    </div>
                </div>
                <div class="card-footer">
                    <button style="submit" class="btn btn-primary mr-2">{{ isset($barang) ? 'Update' : 'Simpan' }}</button>
                    <a href="{{ route('barang') }}" class="btn btn-secondary">Batalkan</a>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection