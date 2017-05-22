<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTablePengiriman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengiriman', function (Blueprint $table) {
            $table->increments('KD_pengiriman');
            $table->string('nama_pengirim');
            $table->string('no_telp_pengirim');
            $table->string('nama_penerima');
            $table->string('alamat_penerima');
            $table->string('no_telp_penerima');
            $table->string('nama_barang');
            $table->float('berat_barang');
            $table->integer('total_biaya');

            $table->integer('kd_jenis_barang',false,true);
            $table->foreign('kd_jenis_barang')
                    ->references('kd_jenis_barang')
                    ->on('jenisbarang')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->integer('kd_jenis_packaging',false,true);
            $table->foreign('kd_jenis_packaging')
                    ->references('kd_jenis_packaging')
                    ->on('jenispackaging')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->integer('id_jp',false,true);
            $table->foreign('id_jp')
                    ->references('id_jp')
                    ->on('jenis_pengiriman')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->integer('id_wilayah',false,true);
            $table->foreign('id_wilayah')
            ->references('id_wilayah')
            ->on('wilayah')
            ->onDelete('cascade')
            ->onUpdate('cascade');


            $table->integer('id_kurir',false,true);
            $table->foreign('id_kurir')
            ->references('id_kurir')
            ->on('kurir')
            ->onDelete('cascade')
            ->onUpdate('cascade');


            $table->integer('id_petugas',false,true);
            $table->foreign('id_petugas')
            ->references('id_petugas')
            ->on('petugas')
            ->onDelete('cascade')
            ->onUpdate('cascade');

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
        Schema::drop('pengiriman');
    }
}
