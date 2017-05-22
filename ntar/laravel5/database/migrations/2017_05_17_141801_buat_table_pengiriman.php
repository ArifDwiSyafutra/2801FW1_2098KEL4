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
            $table->increments('id');
            $table->string('nama_pengirim');
            $table->string('no_telp_pengirim');
            $table->string('nama_penerima');
            $table->string('alamat_penerima');
            $table->string('no_telp_penerima');
            $table->string('nama_barang');
            $table->float('berat_barang');
            $table->integer('total_biaya');

            $table->integer('jenisbarang_id',false,true);
            $table->foreign('jenisbarang_id')
                    ->references('id')
                    ->on('jenisbarang')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->integer('jenispackaging_id',false,true);
            $table->foreign('jenispackaging_id')
                    ->references('id')
                    ->on('jenispackaging')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->integer('jenis_pengiriman_id',false,true);
            $table->foreign('jenis_pengiriman_id')
                    ->references('id')
                    ->on('jenis_pengiriman')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->integer('wilayah_id',false,true);
            $table->foreign('wilayah_id')
            ->references('id')
            ->on('wilayah')
            ->onDelete('cascade')
            ->onUpdate('cascade');


            $table->integer('kurir_id',false,true);
            $table->foreign('kurir_id')
            ->references('id')
            ->on('kurir')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            


            $table->integer('petugas_id',false,true);
            $table->foreign('petugas_id')
            ->references('id')
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
