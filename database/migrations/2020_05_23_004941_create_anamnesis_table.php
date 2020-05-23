<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnamnesisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anamnesis', function (Blueprint $table) {
            $table->id();
            $table->string('keluhan-utama')->default('none');
            $table->string('riwayat-penyakit-sekarang')->default('none');
            $table->string('riwayat-pengobatan')->default('none');
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
        Schema::dropIfExists('anamnesis');
    }
}
