<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeriksaanFisiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeriksaan_fisiks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mata_id');
            $table->foreign('mata_id')->references('id')->on('matas')->onDelete('cascade');
            $table->unsignedBigInteger('tht_id');
            $table->foreign('tht_id')->references('id')->on('thts')->onDelete('cascade');
            $table->unsignedBigInteger('leher_id');
            $table->foreign('leher_id')->references('id')->on('lehers')->onDelete('cascade');
            $table->unsignedBigInteger('torak_id');
            $table->foreign('torak_id')->references('id')->on('toraks')->onDelete('cascade');
            $table->unsignedBigInteger('jantung_id');
            $table->foreign('jantung_id')->references('id')->on('jantungs')->onDelete('cascade');
            $table->unsignedBigInteger('paru_id');
            $table->foreign('paru_id')->references('id')->on('parus')->onDelete('cascade');
            $table->unsignedBigInteger('abdomen_id');
            $table->foreign('abdomen_id')->references('id')->on('abdomens')->onDelete('cascade');
            $table->string('hepar')->default('none');
            $table->string('lien')->default('none');
            $table->string('lain_lain')->default('none');
            $table->unsignedBigInteger('extremitas_id');
            $table->foreign('extremitas_id')->references('id')->on('extrimitas')->onDelete('cascade');
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
        Schema::dropIfExists('pemeriksaan_fisiks');
    }
}
