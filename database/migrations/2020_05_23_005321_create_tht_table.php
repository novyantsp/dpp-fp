<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tht', function (Blueprint $table) {
            $table->id();
            $table->string('tonsil')->default('none');
            $table->string('faring')->default('none');
            $table->string('lidah')->default('none');
            $table->string('bibir')->default('none');
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
        Schema::dropIfExists('tht');
    }
}
