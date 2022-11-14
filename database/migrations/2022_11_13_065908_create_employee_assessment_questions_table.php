<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_assessment_questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('assessment_id');
            $table->foreign('assessment_id')->references('id')->on('employee_assessments');
            $table->foreignId('question_id');
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
        Schema::dropIfExists('employee_assessment_questions');
    }
};
