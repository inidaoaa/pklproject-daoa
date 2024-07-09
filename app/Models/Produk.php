<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = ['nama_produk', 'deskripsi', 'harga', 'stok' , 'kategori_id'];
    protected $visible = ['nama_produk', 'deskripsi', 'harga', 'stok' , 'kategori_id'];

    public $timestamps = true;
    public function kategori()
    {
        return $this->belongsTo(Kategori::class , 'kategori_id');
    }
}
