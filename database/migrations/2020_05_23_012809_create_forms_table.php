<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->foreign('pasien_id')->references('id')->on('pasien')->onDelete('cascade');
            $table->string('keterangan')->default('none');
            $table->foreign('anamnesis_id')->references('id')->on('anamnesis')->onDelete('cascade');
            $table->foreign('pemeriksaan_fisik_id')->references('id')->on('pemeriksaan_fisik')->onDelete('cascade');
            $table->string('keterangan')->default('none');
            $table->string('keterangan')->default('none');
            $table->string('keterangan')->default('none');
            $table->string('keterangan')->default('none');
            $table->string('keterangan')->default('none');
            $table->foreign('disposisi_id')->references('id')->on('disposisi')->onDelete('cascade');
            $table->string('keterangan')->default('none');
            $table->string('keterangan')->default('none');
            $table->string('keterangan')->default('none');
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
        Schema::dropIfExists('forms');
    }
}
