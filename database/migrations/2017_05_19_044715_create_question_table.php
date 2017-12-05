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
        Schema::create('question', function (Blueprint $table) {
            $table->increments('question_id');
            $table->integer('test_id');
            $table->integer('user_id');
            $table->string('question');
            $table->string('anwser_a');
            $table->string('anwser_b');
            $table->string('anwser_c');
            $table->integer('correct_anwser');
            $table->integer('number_a');
            $table->integer('number_b');
            $table->integer('number_c');

            $table->timestamps();
            $table->foreign('test_id')->references('test_idw')->on('test')->onDelete('cascade');
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
        Schema::dropIfExists('question');
    }
}
