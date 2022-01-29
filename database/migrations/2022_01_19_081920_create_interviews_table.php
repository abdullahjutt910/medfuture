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
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('distance')->nullable();
            $table->string('job_location')->nullable();
            $table->string('practise_licence_number')->nullable();
            $table->string('licence_board')->nullable();
            $table->string('gross_salary')->nullable();
            $table->string('hourly_rate_expectation')->nullable();
            $table->string('billing_share')->nullable();
            $table->string('visa_sponsorship')->nullable();
            $table->string('accommodation')->nullable();
            $table->string('travel_allowance')->nullable();
            $table->string('meal_allowance')->nullable();
            $table->string('uniform_allowance')->nullable();
            $table->string('moratorium_restriction')->nullable();
            $table->string('location_restriction')->nullable();
            $table->string('medical_board_condition')->nullable();
            $table->string('medical_board_undertaking')->nullable();
            $table->string('skill')->nullable();
            $table->string('interview_notes')->nullable();
            $table->string('program_type')->nullable();
            $table->string('job_summary')->nullable();
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
