<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJantungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jantungs', function (Blueprint $table) {
            $table->id();
            $table->string('s1-s2')->default('none');
            $table->binary('reguler')->default('0');
            $table->string('murmur')->default('none');
            $table->string('lain-lain')->default('none');
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
        Schema::dropIfExists('jantungs');
    }
}
