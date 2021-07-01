<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguajeLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languaje_levels', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('languaje_id');

            $table->string('level');

            $table->timestamps();

            $table->foreign('languaje_id')->references('id')->on('languajes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('languaje_levels');
    }
}
