<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFollowerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_follower', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('follower_id');
            $table->timestamps();

            $table->primary(['user_id', 'follower_id']);
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('follower_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_follower');
    }
}
