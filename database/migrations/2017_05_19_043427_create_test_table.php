<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('test', function (Blueprint $table) {
            $table->increments('id_test');
            $table->integer('topic_id');
            $table->integer('user_id');
            $table->string('title');
            $table->integer('is_active');
            $table->integer('is_seen');
            $table->integer('is_done');

            $table->timestamps();
            $table->foreign('topic_id')->references('id')->on('topic')->onDelete('cascade');
            $table->foreign('user_id')->references('user_id')->on('user')->onDelete('cascade');
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
        Schema::dropIfExists('test');
    }
}
