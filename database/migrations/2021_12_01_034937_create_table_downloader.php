<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDownloader extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_downloader', function (Blueprint $table) {
            $table->id();
            $table->string('kabupaten');
            $table->string('komunitas_motor');
            $table->string('nama_member');
            $table->string('kode_referal');
            $table->string('nama_konsumen');
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
        Schema::dropIfExists('table_downloader');
    }
}
