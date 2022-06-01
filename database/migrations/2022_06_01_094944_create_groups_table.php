<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image_group');
            $table->string('banner_group');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('groups_translations', function (Blueprint $table) {
            $table->id();
            $table->integer('group_id');
            $table->string('locale');
            $table->string('description');
            $table->timestamps();
        });
        Schema::create('groups_favorites', function (Blueprint $table) {
            $table->id();
            $table->integer('group_id');
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
        Schema::dropIfExists('groups');
        Schema::dropIfExists('groups_translations');
        Schema::dropIfExists('groups_favorites');
    }
}
