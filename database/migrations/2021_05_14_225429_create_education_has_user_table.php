<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationHasUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_has_user', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('education_id');
            $table->unsignedBigInteger('user_id');

            $table->timestamps();

            $table->foreign('education_id')->references('id')->on('education')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education_has_user');
    }
}
