<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConcertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concerts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('schedule');
            $table->string('date');
            $table->string('city');
            $table->string('title');
            $table->string('description');
            $table->string('image');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('concerts_translations', function (Blueprint $table) {
            $table->id();
            $table->integer('concert_id');
            $table->string('locale');
            $table->string('title');
            $table->string('description');
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
        Schema::dropIfExists('concerts');
    }
}
