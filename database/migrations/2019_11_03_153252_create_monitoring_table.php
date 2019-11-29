<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonitoringTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitoring', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('transaksi_id');
            $table->enum('tanaman', ['Tanaman Baru', 'Tanaman Belum Menghasilkan', 'Tanaman Menghasilkan']);
            $table->enum('proses', ['Pembibitan', 'Penanaman', 'Panen']);
            $table->enum('penyakit', ['Tidak terdeteksi', 'Terserang penyakit']);
            $table->string('kondisi_tumbuhan');
            $table->string('kondisi_lahan');
            $table->string('kondisi_hama');
            $table->string('keterangan');
            $table->string('foto');
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
        Schema::dropIfExists('monitoring');
    }
}
