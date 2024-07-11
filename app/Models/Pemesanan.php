<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'id_produk', 'nama_pemesan', 'jumlah', 'tambahan'];
    public $timestamps = true;

    public function Produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }
}
