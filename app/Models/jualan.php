<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class jualan extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'user_id',
        'kabupaten',
        'komunitas_motor',
        'nama_member',
        'kategori_motor',
        'type_motor',
        'tmp_pengajuan',
        'nama_sales',
        'nama_konsumen',
        'pekerjaan',
        'fincoy',
        'dp',
        'foto_ktp',
        'foto_spk',
        'status'
    ];
    protected $guareded =['id'];
}
