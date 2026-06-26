<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Berita extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'user_id',
        'kabupaten',
        'komunitas_motor',
        'by',
        'media',
        'nama_berita',
        'keterangan_berita',
        'link_berita',
        'dokumentasi',
        'status'
    ];
    protected $guareded =['id'];
}
