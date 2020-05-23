<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbdomensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abdomens', function (Blueprint $table) {
            $table->id();
            $table->binary('distensi')->default('0');
            $table->binary('meteorismus')->default('0');
            $table->integer('peristaltic')->default('0');
            $table->binary('asciles')->default('0');
            $table->binary('nyeri_tekan')->default('0');
            $table->string('lokasi')->default('none');
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
        Schema::dropIfExists('abdomens');
    }
}
