<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ecommerce extends Model
{
    use HasFactory;

    protected $table = "ecommerce";
    protected $fillable = ['nama_produk', 'harga_produk', 'stock_produk', 'deskripsi_produk', 'gambar_produk'];

}
 