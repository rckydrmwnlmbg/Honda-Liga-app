<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'harga_motor',
        'jenis_motor',
        'gambar_produk',
        'gambar_konten',
        'deskripsi'
     ];
     protected $guareded =['id'];
}
