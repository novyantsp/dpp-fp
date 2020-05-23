<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parus', function (Blueprint $table) {
            $table->id();
            $table->string('suara_nafas')->default('none');
            $table->string('ronki')->default('none');
            $table->string('wheezing')->default('none');
            $table->string('lain_lain')->default('none');
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
        Schema::dropIfExists('parus');
    }
}
