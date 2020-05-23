<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeriksaanFisikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeriksaan_fisik', function (Blueprint $table) {
            $table->id();
            $table->foreign('mata_id')->references('id')->on('mata')->onDelete('cascade');
            $table->foreign('tht_id')->references('id')->on('tht')->onDelete('cascade');
            $table->foreign('leher_id')->references('id')->on('leher')->onDelete('cascade');
            $table->foreign('torak_id')->references('id')->on('torak')->onDelete('cascade');
            $table->foreign('jantung_id')->references('id')->on('jantung')->onDelete('cascade');
            $table->foreign('paru_id')->references('id')->on('paru')->onDelete('cascade');
            $table->foreign('abdomen_id')->references('id')->on('abdomen')->onDelete('cascade');
            $table->string('hepar')->default('none');
            $table->string('lien')->default('none');
            $table->string('lain-lain')->default('none');
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
        Schema::dropIfExists('pemeriksaan_fisik');
    }
}
