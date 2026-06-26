<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_sales', function (Blueprint $table) {
            $table->id();
            $table->string('kabupaten');
            $table->string('komunitas_motor');
            $table->string('nama_member');
            $table->string('kategori_motor');
            $table->string('type_motor');
            $table->string('lokasi_pengajuan_motor');
            $table->string('nama_sales');
            $table->string('nama_konsumen');
            $table->string('pekerjaan_konsumen');
            $table->string('fincoy');
            $table->string('down_payment');
            $table->string('foto_ktp');
            $table->string('foto_spk');
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
        Schema::dropIfExists('table_sales');
    }
}
