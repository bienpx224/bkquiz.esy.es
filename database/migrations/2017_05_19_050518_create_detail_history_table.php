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
        Schema::create('detail_history', function (Blueprint $table) {
            $table->integer('question_question_id');
            $table->integer('history_history_id');
            $table->integer('answer');

            $table->timestamps();
            $table->foreign('question_question_id')->references('question_id')->on('question')->onDelete('cascade');
            $table->foreign('history_history_id')->references('history_id')->on('history')->onDelete('cascade');
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
        Schema::dropIfExists('detail_history');
    }
}
