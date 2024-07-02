<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_produk', 'harga', 'kategori', 'stok', 'cover'];
	public $timestamps = true;
    // public function produk()
    // {
    //     return $this->hasMany(Produk::class);
    // }
}
