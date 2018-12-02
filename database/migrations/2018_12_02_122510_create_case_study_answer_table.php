<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaseStudyAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_study_answer', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('case_id');
            $table->integer('step_id');
            $table->integer('question_id');
            $table->text('question_answer');
            $table->integer('score');
            $table->integer('full_score');
            $table->timestamps();
            $table->primary(['user_id', 'case_id', 'step_id', 'question_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('case_study_answer');
    }
}
