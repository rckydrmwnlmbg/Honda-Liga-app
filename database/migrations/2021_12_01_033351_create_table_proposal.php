<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProposal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_proposal', function (Blueprint $table) {
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
            $table->string('konten_acara');
            $table->string('undangan_peserta');
            $table->string('nomor_undangan_peserta');
            $table->string('total_biaya');
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
        Schema::dropIfExists('table_proposal');
    }
}
