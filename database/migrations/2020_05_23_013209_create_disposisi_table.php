<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisposisiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disposisi', function (Blueprint $table) {
            $table->id();
            $table->binary('boleh-pulang')->default('0');
            $table->dateTime('boleh-pulang');
            $table->binary('kontrol-klinik')->default('0');
            $table->string('keterangan-kontrol')->default('None');
            $table->dateTime('kontrol-klinik');
            $table->binary('dirawat-di-ruang')->default('0');
            $table->string('keterangan-rawat')->default('None');
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
        Schema::dropIfExists('disposisi');
    }
}
