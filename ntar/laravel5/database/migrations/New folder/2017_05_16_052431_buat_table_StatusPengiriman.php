<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableStatusPengiriman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuspengiriman', function (Blueprint $table) {
            $table->integer('status_id',false,true);
            $table->foreign('status_id')->references('id_status')->on('status')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('pengiriman_kd',false,true);
            $table->foreign('pengiriman_kd')->references('KD_pengiriman')->on('pengiriman')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('statuspengiriman');
    }
}
