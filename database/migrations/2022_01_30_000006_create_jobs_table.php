<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('string_job_id')->nullable();
            $table->string('company_name')->nullable();
            $table->string('trade_name')->nullable();
            $table->string('abn')->nullable();
            $table->string('devision')->nullable();
            $table->string('cetagory')->nullable();
            $table->string('bussiness_service')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('suburb')->nullable();
            $table->string('state')->nullable();
            $table->string('post_code')->nullable();
            $table->string('country')->nullable();
            $table->string('district')->nullable();
            $table->string('distance_to_main_city')->nullable();
            $table->string('main_city')->nullable();
            $table->string('website')->nullable();
            $table->string('google_address_link')->nullable();
            $table->string('corporate_brand')->nullable();
            $table->string('ownership_type')->nullable();
            $table->string('branch')->nullable();
            $table->string('profession')->nullable();
            $table->string('division')->nullable();
            $table->string('specialty')->nullable();
            $table->string('seniority')->nullable();
            $table->string('skills')->nullable();
            $table->string('placement_type')->nullable();
            $table->string('engagment_term')->nullable();
            $table->string('employment_type')->nullable();
            $table->decimal('gross_salary', 15, 2)->nullable();
            $table->string('gross_salary_information')->nullable();
            $table->string('billing_share')->nullable();
            $table->string('billing_share_information')->nullable();
            $table->string('hourly_rate')->nullable();
            $table->string('hourly_rate_information')->nullable();
            $table->string('job_title')->nullable();
            $table->date('post_date')->nullable();
            $table->string('priority_status')->nullable();
            $table->date('commencement_date')->nullable();
            $table->date('finished_date')->nullable();
            $table->string('recruitment_consultant')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('email')->nullable();
            $table->longText('terms_and_condition')->nullable();
            $table->longText('contacts')->nullable();
            $table->string('client_manager')->nullable();
            $table->string('recruitment_consultant_2')->nullable();
            $table->string('data_administrator')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
