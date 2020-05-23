<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisposisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disposisis', function (Blueprint $table) {
            $table->id();
            $table->binary('boleh_pulang')->default('0');
            $table->dateTime('tgl_boleh_pulang');
            $table->binary('kontrol_klinik')->default('0');
            $table->string('keterangan_kontrol')->default('None');
            $table->dateTime('tgl_kontrol_klinik');
            $table->binary('dirawat_di_ruang')->default('0');
            $table->string('keterangan_rawat')->default('None');
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
        Schema::dropIfExists('disposisis');
    }
}
