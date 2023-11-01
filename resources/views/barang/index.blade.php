@extends('layouts.app')

@section('title','Data Barang')

@section('contents')
<div id="content-wrapper" class="d-flex flex-column">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Table Stock Barang</h6>
        </div>
        <div class="card-body">
            <a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">Tambah Data Barang</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode Produk</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stock</th>
                            <th>Sisa</th>
                            <th>Added at</th>
                            <th style="width: 15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($barang->count() > 0)
                            @php($no = 1)
                            @foreach($barang as $item)
                                <tr>
                                    <td style="vertical-align: middle">{{ $no++ }}</td>
                                    <td style="vertical-align: middle">{{ $item->kode_barang }}</td>
                                    <td style="vertical-align: middle">{{ $item->nama_barang }}</td>
                                    <td style="vertical-align: middle">{{ $item->kategori_barang }}</td>
                                    <td style="vertical-align: middle">{{ $item->harga }}</td>
                                    <td style="vertical-align: middle">{{ $item->stock }}</td>
                                    <td style="vertical-align: middle">{{ $item->sisa }}</td>
                                    <td style="vertical-align: middle">{{ $item->created_at }}</td>
                                    <td style="vertical-align: middle">
                                        <a href="{{ route('barang.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="{{ route('barang.delete', $item->id) }}" class="btn btn-danger btn-sm">Hapus</a>
                                        <a href="{{ route('barang.detail', $item->id) }}" class="btn btn-primary btn-sm">Preview</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="8" style="text-align: center">Tidak ada data terecord dalam database</td>
                            </tr>  
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection