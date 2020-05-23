<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLehersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lehers', function (Blueprint $table) {
            $table->id();
            $table->string('jvp')->default('none');
            $table->string('pembesaran_kelenjar')->default('none');
            $table->binary('kaku_kuduk')->default('0');
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
        Schema::dropIfExists('lehers');
    }
}
