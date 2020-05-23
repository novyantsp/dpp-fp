<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mata', function (Blueprint $table) {
            $table->id();
            $table->string('anemia')->default('none');
            $table->string('ikterus')->default('none');
            $table->string('reflek-pupil')->default('none');
            $table->string('edema-palpebrae')->default('none');
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
        Schema::dropIfExists('mata');
    }
}
