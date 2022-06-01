<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('password');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('is_admin');
            $table->string('is_group');
            $table->string('is_active');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('users_profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('city');
            $table->string('image_user');
            $table->string('image_banner');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('users_comments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('concert_id');
            $table->string('comment');
            $table->string('city');
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
        Schema::dropIfExists('users');
    }
}
