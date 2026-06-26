<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class proposal extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'user_id',
        'kabupaten',
        'komunitas_motor',
        'kategori_event',
        'nama_event',
        'ket_event',
        'lokasi_event',
        'rencana_mulai',
        'rencana_akhir',
        'target_peserta',
        'actual_peserta',
        'konten_acara',
        'undangan_peserta',
        'undangan_peserta_actual',
        'nomor_undangan_peserta',
        'nomor_undangan_peserta_actual',
        'undang_club_lain_target',
        'undang_club_lain_actual',
        'total_biaya',
        'file_proposal',
        'dokumentasi',
        'status',
        'status_done'
     ];
     protected $guareded =['id'];
}
