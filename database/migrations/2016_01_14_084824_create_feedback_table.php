<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * Create Feedback table
         */
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->text('comment');
        });
        /*
         * RAW SQL
         * CREATE TABLE feedback (
         *  id INT(11),
         *  name VARCHAR(255),
         *  email VARCHAR(255),
         *  comment TEXT,
         * )
         *
         */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('feedback');
        /*
         * DROP TABLE feedback
         */
    }
}
