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
        Schema::create('detail_infor', function (Blueprint $table) {
            $table->increments('detail_infor_id');
            $table->string('question_question_id');
            $table->string('title');
            $table->string('content');

            $table->timestamps();
            $table->foreign('question_question_id')->references('question_id')->on('question')->onDelete('cascade');
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
        Schema::dropIfExists('detail_infor');
    }
}
