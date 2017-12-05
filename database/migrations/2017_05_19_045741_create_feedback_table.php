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
        Schema::create('feedback', function (Blueprint $table) {
            $table->increments('feedback_id');
            $table->integer('test_id');
            $table->string('name');
            $table->string('email');
            $table->string('content');
            $table->integer('is_active');
            $table->integer('is_seen');

            $table->timestamps();
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
        Schema::dropIfExists('feedback');
    }
}
