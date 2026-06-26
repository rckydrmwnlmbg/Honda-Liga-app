<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class kontenkreatifdigital extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'user_id',
        'judul_konten',
        'isi_konten',
        'penulis',
        'kabupaten',
        'komunitas_motor',
        'media',
        'kategori_konten',
        'link_konten',
        'mulai_periode',
        'akhir_periode',
        'like_target',
        'like_actual',
        'share_target',
        'share_actual',
        'comment_target',
        'comment_actual',
        'dokumentasi',
        'status'
    ];
    protected $guareded =['id'];
}
