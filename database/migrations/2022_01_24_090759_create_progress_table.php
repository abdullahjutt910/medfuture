<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progress', function (Blueprint $table) {
            $table->id();
            $table->string('contacted')->nullable();
            $table->string('initial_screening')->nullable();
            $table->string('short_listed')->nullable();
            $table->string('shelved')->nullable();
            $table->string('job_matching')->nullable();
            $table->string('submissions')->nullable();
            $table->string('declined')->nullable();
            $table->string('interviews')->nullable();
            $table->string('due_Check')->nullable();
            $table->string('offered')->nullable();
            $table->string('rejected')->nullable();
            $table->string('placed')->nullable();
            $table->string('archived')->nullable();
            $table->string('testimony')->nullable();
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
        Schema::dropIfExists('progress');
    }
}
