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
        Schema::create('history', function (Blueprint $table) {
            $table->increments('history_id');
            $table->integer('user_id');
            $table->integer('test_id');
            $table->integer('right_answer');
            $table->integer('is_active');

            $table->timestamps();
            $table->foreign('user_id')->references('user_id')->on('user')->onDelete('cascade');
            $table->foreign('test_id')->references('test_id')->on('test')->onDelete('cascade');
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
        Schema::dropIfExists('history');
    }
}
