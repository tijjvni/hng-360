<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
   {
      DB::statement($this->dropView());
      DB::statement($this->createView());
   }

   private function dropView(): string
   {
      return <<<SQL
         DROP VIEW IF EXISTS `assessment_scores`;
      SQL;
   }

   private function createView(): string
   {
      return <<<SQL
         CREATE VIEW `assessment_scores` AS
         SELECT * from employee_assessment_questions, employee_assessment_question_answers
      SQL;
   }

};
