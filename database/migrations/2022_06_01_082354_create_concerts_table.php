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
            $table->integer('group_id');
            $table->string('schedule');
            $table->string('date');
            $table->string('city');
            $table->string('image');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('concert_translations', function (Blueprint $table) {
            $table->id();
            $table->integer('concert_id');
            $table->string('locale');
            $table->string('title');
            $table->mediumText('description');
            $table->timestamps();
        });
        Schema::create('concerts_groups', function (Blueprint $table) {
            $table->id();
            $table->integer('group_id');
            $table->string('concert_id');
            $table->timestamps();
        });
        Schema::create('concerts_favorites', function (Blueprint $table) {
            $table->id();
            $table->integer('concert_id');
            $table->integer('user_id');
            $table->timestamps();
            $table->softDeletes();
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
        Schema::dropIfExists('concerts_translations');
        Schema::dropIfExists('concerts_groups');
    }
}
