@extends('layouts.dashboard.app')
@section('title', 'Form Barang masuk')
@section('contents')
    <form action="{{ isset($barang_keluars) ? route('barangmasuk.tambah.update', $barang_keluars->id): route('barangmasuk.tambah.simpan') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <!-- Basic Card Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="kode_barang">kode barang</label>
                                <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="{{ isset($barang_keluars) ? $barang_keluars->kode_barang: '' }}">
                            </div>
                            <div class="form-group">
                                <label for="nama_barang">nama barang</label>
                                <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ isset($barang_keluars) ? $barang_keluars->nama_barang: '' }}">
                            </div>
                            <div class="form-group">
                                <label for="tanggal_masuk">Tanggal masuk</label>
                                <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk" value="{{ isset($barang_keluars) ? $barang_keluars->tanggal_masuk: '' }}">
                            </div>
                            <div class="form-group">
                                <label for="kategori_barang">Kategori Barang</label>
                                <input type="text" class="form-control" id="kategori_barang" name="kategori_barang" value="{{ isset($barang_keluars) ? $barang_keluars->kategori_barang: '' }}">
                            </div>
                            <div class="form-group">
                                <label for="pembelian">Terjual</label>
                                <input type="decimal" class="form-control" id="pembelian" name="pembelian" value="{{ isset($barang_keluars) ? $barang_keluars->pembelian: '' }}">
                            </div>
                            <div class="form-group">
                                <label for="jumlah">jumlah barang</label>
                                <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ isset($barang_keluars) ? $barang_keluars->jumlah: '' }}">
                            </div>
                            <div class="form-group">
                                <label for="stok">Stok barang</label>
                                <input type="number" class="form-control" id="stok" name="stok" value="{{ isset($barang_keluars) ? $barang_keluars->stok: '' }}">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">simpan</button>
                        </div>
                    </div>

                </div>
            </div>
    </form>

@endsection
