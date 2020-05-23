<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matas', function (Blueprint $table) {
            $table->id();
            $table->string('anemia')->default('none');
            $table->string('ikterus')->default('none');
            $table->string('reflek_pupil')->default('none');
            $table->string('edema_palpebrae')->default('none');
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
        Schema::dropIfExists('matas');
    }
}
