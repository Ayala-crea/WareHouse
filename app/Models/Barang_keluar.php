<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang_keluar extends Model
{
    use HasFactory;

    protected $table = 'barang_keluars';

    protected $fillable = ['kode_barang', 'nama_barang', 'tanggal_masuk', 'kategori_barang', 'pembelian', 'jumlah', 'stok'];

}
