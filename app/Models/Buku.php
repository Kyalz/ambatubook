<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'bukus';
    protected $fillable = ['judul', 'sinopsis', 'penulis', 'penerbit', 'tahun_terbit', 'stok', 'harga', 'kategori_id'];
    
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }
}
