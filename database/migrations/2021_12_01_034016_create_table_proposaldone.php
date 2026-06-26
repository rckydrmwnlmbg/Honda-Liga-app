<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProposaldone extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_proposaldone', function (Blueprint $table) {
            $table->id();
            $table->string('kabupaten');
            $table->string('komunitas_motor');
            $table->string('kategori_event');
            $table->string('nama_event');
            $table->string('ket_event');
            $table->string('lokasi_event');
            $table->string('rencana_mulai');
            $table->string('rencana_akhir');
            $table->string('target_peserta');
            $table->string('actual_peserta');
            $table->string('konten_acara');
            $table->string('undangan_peserta');
            $table->string('undangan_peserta_actual');
            $table->string('nomor_undangan_peserta');
            $table->string('nomor_undangan_peserta_actual');
            $table->string('undang_club_lain_target');
            $table->string('undang_club_lain_actual');
            $table->string('pengajuan_biaya_btl_sharing');
            $table->string('pengajuan_biaya_btl_sharingg');
            $table->string('pengajuan_biaya_btl_sharing_club');
            $table->string('total_biaya');
            $table->string('dokumentasi');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_proposaldone');
    }
}
