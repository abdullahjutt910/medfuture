<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignbarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignbars', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('candidate_id')->references('id')->on('candidates')->onDelete('cascade');
            $table->string('candidateManager')->nullable();
            $table->string('recruitementConsultant')->nullable();
            $table->string('dataAdministrator')->nullable();
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
        Schema::dropIfExists('assignbars');
    }
}
