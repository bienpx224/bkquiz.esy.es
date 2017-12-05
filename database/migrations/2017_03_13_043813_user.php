<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('user', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('first_name')->unique();
            $table->string('last_name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('username');
            $table->string('password');
            $table->string('remember_token', 100)->nullable();
            $table->integer('is_active');
            $table->integer('authority');

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
        //
        Schema::dropIfExists('user');
    }
}
