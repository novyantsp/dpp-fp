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
            $table->unsignedBigInteger('pasien_id');
            $table->foreign('pasien_id')->references('id')->on('pasiens')->onDelete('cascade');
            $table->date('tgl_asesmen');
            $table->unsignedBigInteger('anamnesis_id');
            $table->foreign('anamnesis_id')->references('id')->on('anamneses')->onDelete('cascade');
            $table->unsignedBigInteger('pemeriksaan_fisik_id');
            $table->foreign('pemeriksaan_fisik_id')->references('id')->on('pemeriksaan_fisiks')->onDelete('cascade');
            $table->string('rencana_kerja')->default('none');
            $table->string('hasil_pemeriksaan_penunjang')->default('none');
            $table->string('diagnosis')->default('none');
            $table->string('terapi')->default('none');
            $table->string('hasil_pembedahan')->default('none');
            $table->unsignedBigInteger('disposisi_id');
            $table->foreign('disposisi_id')->references('id')->on('disposisis')->onDelete('cascade');
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
