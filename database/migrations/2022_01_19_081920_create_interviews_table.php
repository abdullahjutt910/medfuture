<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('candidate_id')->unsigned();
            $table->string('start_date');
            $table->string('end_date');
            $table->string('distance');
            $table->string('job_location');
            $table->string('practise_licence_number');
            $table->string('licence_board');
            $table->string('gross_salary');
            $table->string('hourly_rate_expectation');
            $table->string('billing_share');
            $table->string('visa_sponsorship');
            $table->string('accommodation');
            $table->string('travel_allowance');
            $table->string('meal_allowance');
            $table->string('uniform_allowance');
            $table->string('moratorium_restriction');
            $table->string('location_restriction');
            $table->string('training_program');
            $table->string('medical_board_condition');
            $table->string('medical_board_undertaking');
            $table->string('skill');
            $table->string('interview_notes');
            $table->string('employment_type');
            $table->string('program_type');
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
        Schema::dropIfExists('interviews');
    }
}
