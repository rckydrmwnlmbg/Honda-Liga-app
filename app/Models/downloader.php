<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class downloader extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'user_id',
        'kabupaten',
        'komunitas_motor',
        'nama_member',
        'kode_referal',
        'nama_konsumen',
        'dokumentasi',
        'status'
    ];
    protected $guareded =['id'];
}
