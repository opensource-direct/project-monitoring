<?php

namespace App\Http\Controllers;

use App\Models\Barang as ModelBarang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = ModelBarang::get();
        return view('barang.index', ['barang' => $barang]);
    }

    public function create()
    {
        return view('barang.form');
    }

    public function store(Request $request)
    {
        $data = [
            'kode_barang' =>$request->kode_barang,
            'nama_barang' =>$request->nama_barang,
            'kategori_barang' =>$request->kategori_barang,
            'harga' =>$request->harga,
            'stock' =>$request->stock,
            'sisa' =>$request->sisa,
        ];

        ModelBarang::create($data);

        return redirect()->route('barang');
    }

    public function edit($id)
    {
        $barang = ModelBarang::find($id);
        return view('barang.form', ['barang' => $barang]);    
    } 

    public function update(Request $request, $id)
    {
        $data = [
            'kode_barang' =>$request->kode_barang,
            'nama_barang' =>$request->nama_barang,
            'kategori_barang' =>$request->kategori_barang,
            'harga' =>$request->harga,
            'stock' =>$request->stock,
            'sisa' =>$request->sisa,
        ];

        ModelBarang::find($id)->update($data);

        return redirect()->route('barang');
    }

    public function delete($id)
    {
        ModelBarang::find($id)->delete();

        return redirect()->route('barang');
    }
}
