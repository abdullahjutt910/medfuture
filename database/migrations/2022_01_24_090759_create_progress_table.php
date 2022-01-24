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
            $table->string('Initial_Screening')->nullable();
            $table->string('Short_Listed')->nullable();
            $table->string('Shelved')->nullable();
            $table->string('Job_Matching')->nullable();
            $table->string('Submissions')->nullable();
            $table->string('Declined')->nullable();
            $table->string('Interviews')->nullable();
            $table->string('Due_Check')->nullable();
            $table->string('Offered')->nullable();
            $table->string('Rejected')->nullable();
            $table->string('Placed')->nullable();
            $table->string('Archived')->nullable();
            $table->string('Testimony')->nullable();
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
