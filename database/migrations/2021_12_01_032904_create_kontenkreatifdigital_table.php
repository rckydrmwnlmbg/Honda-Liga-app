<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKontenkreatifdigital extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_kontenkreatifdigital', function (Blueprint $table) {
            $table->id();
            $table->string('judul_konten');
            $table->string('isi_konten');
            $table->string('penulis');
            $table->string('kabupaten');
            $table->string('komunitas_motor');
            $table->string('media');
            $table->string('kategori_konten');
            $table->string('link_konten');
            $table->string('mulai_periode');
            $table->string('akhir_periode');
            $table->string('like_target');
            $table->string('like_actual');
            $table->string('share_target');
            $table->string('share_actual');
            $table->string('comment_target');
            $table->string('comment_actual');
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
        Schema::dropIfExists('table_kontenkreatifdigital');
    }
}
