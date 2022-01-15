<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateCandidatesTable extends Migration
{
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id')->unsigned()->nullable();
            $table->string('title')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender')->nullable();
            $table->date('dob');
            $table->string('mobile');
            $table->string('home')->nullable();
            $table->string('work')->nullable();
            $table->string('email');
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('distance_to_main')->nullable();
            $table->string('town')->nullable();
            $table->string('state')->nullable();
            $table->string('district')->nullable();
            $table->string('country')->nullable();
            $table->string('post_code')->nullable();
            $table->string('main_city')->nullable();
            $table->string('profession')->nullable();
            $table->string('devision')->nullable();
            $table->string('senority')->nullable();
            $table->string('specialty')->nullable();
            $table->string('professional_qualification')->nullable();
            $table->string('graduation')->nullable();
            $table->string('country_of_primary_degree')->nullable();
            $table->string('medical_school')->nullable();
            $table->string('practice_country')->nullable();
            $table->string('practice_licensing_body')->nullable();
            $table->string('license_type')->nullable();
            $table->string('experience_from_home')->nullable();
            $table->string('experience_from_residing')->nullable();
            $table->string('recognised_comparable_experience')->nullable();
            $table->string('current_employment_status')->nullable();
            $table->string('country_of_citizenship')->nullable();
            $table->string('country_of_residence')->nullable();
            $table->string('visa_type')->nullable();
            $table->string('work_rights_status')->nullable();
            $table->string('profession_login')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('cv_document')->nullable();
            $table->string('registration_form_document')->nullable();
            $table->string('privacy_concerns')->nullable();
            $table->string('office_number')->nullable();
            $table->string('engagement_term')->nullable();
            $table->string('placement_term')->nullable();
            $table->string('candidate_manager')->nullable();
            $table->string('recruitement')->nullable();
            $table->string('administrator')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
