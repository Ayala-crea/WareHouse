<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use App\Models\Barang_keluar;

class BarangKeluar extends Controller
{
    public function index()
    {
        $barang_keluars = Barang_keluar::get();
        return view('barang.barangMasuk.index', ["Barang_keluar" => $barang_keluars]);
    }

    public function tambah()
    {
        return view('barang.barangmasuk.form');
    }

    public function simpan(Request $request)
    {
        $input = [
            'kode_barang'=>$request->kode_barang,
            'nama_barang'=>$request->nama_barang,
            'tanggal_masuk'=>$request->tanggal_masuk,
            'kategori_barang'=>$request->kategori_barang,
            'pembelian'=>$request->pembelian,
            'jumlah'=>$request->jumlah,
            'stok'=>$request->stok
        ];

        Barang_keluar::create($input);
        return redirect()->route('barangmasuk');
    }

    public function edit($id)
    {
        $barang_keluars = Barang_keluar::find($id);

        return view('barangmasuk.databarang.form', ['barangmasuk'=>$barang_keluars]);
    }

    public function update($id, Request $request)
    {
        $input = [
            'kode_barang'=>$request->kode_barang,
            'nama_barang'=>$request->nama_barang,
            'tanggal_masuk'=>$request->tanggal_masuk,
            'kategori_barang'=>$request->kategori_barang,
            'pembelian'=>$request->pembelian,
            'jumlah'=>$request->jumlah,
            'stok'=>$request->stok
        ];

        Barang_keluar::find($id)->update($input);

        return redirect()->route('barangmasuk');
    }

    public function hapus($id)
    {
        Barang_keluar::find($id)->delete();

        return redirect()->route('barangmasuk');
    }
}
