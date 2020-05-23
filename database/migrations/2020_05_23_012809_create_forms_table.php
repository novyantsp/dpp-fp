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
            $table->integer('pasien_id')->unsigned();
            $table->foreign('pasien_id')->references('id')->on('pasien')->onDelete('cascade');
            $table->date('tgl-asesmen')->default('none');
            $table->integer('anamnesis_id')->unsigned();
            $table->foreign('anamnesis_id')->references('id')->on('anamnesis')->onDelete('cascade');
            $table->integer('pemeriksaan_fisik_id')->unsigned();
            $table->foreign('pemeriksaan_fisik_id')->references('id')->on('pemeriksaan_fisik')->onDelete('cascade');
            $table->string('rencana-kerja')->default('none');
            $table->string('hasil-pem-penunjang')->default('none');
            $table->string('diagnosis')->default('none');
            $table->string('terapi')->default('none');
            $table->string('hasil-pembedahan')->default('none');
            $table->integer('disposisi_id')->unsigned();
            $table->foreign('disposisi_id')->references('id')->on('disposisi')->onDelete('cascade');
            $table->string('saran')->default('none');
            $table->string('catatan')->default('none');
            $table->string('ttd')->default('none');
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
