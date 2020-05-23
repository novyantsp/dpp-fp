<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paru', function (Blueprint $table) {
            $table->id();
            $table->string('suara-nafas')->default('none');
            $table->string('ronki')->default('none');
            $table->string('wheezing')->default('none');
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
        Schema::dropIfExists('paru');
    }
}
