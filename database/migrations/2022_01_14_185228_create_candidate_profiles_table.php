<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('candidate_id')->unsigned()->nullable();
            $table->string('register')->nullable();
            $table->string('verified')->nullable();
            $table->string('cv_receive_date')->nullable();
            $table->string('privacy_term')->nullable();
            $table->string('registerd_date')->nullable();
            $table->string('candidate_term')->nullable();
            $table->string('source_type')->nullable();
            $table->string('registration_type')->nullable();
            $table->string('CDF')->nullable();
            $table->string('registered_by')->nullable();
            $table->string('availability')->nullable();
            $table->string('working_status')->nullable();
            $table->string('access_status')->nullable();
            $table->string('registeration_body')->nullable();
            $table->string('source_name')->nullable();
            $table->string('email_verified')->nullable();
            $table->string('profile_grade')->nullable();
            $table->string('registration_via')->nullable();
            $table->string('lead_method')->nullable();
            $table->string('visa_status')->nullable();

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
        Schema::dropIfExists('candidate_profiles');
    }
}
