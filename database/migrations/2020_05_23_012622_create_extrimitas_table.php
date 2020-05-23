<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtrimitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extrimitas', function (Blueprint $table) {
            $table->id();
            $table->binary('suhu')->default('0');
            $table->string('edema')->default('none');
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
        Schema::dropIfExists('extrimitas');
    }
}
