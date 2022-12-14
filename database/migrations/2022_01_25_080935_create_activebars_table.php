<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivebarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activebars', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('candidate_id')->references('id')->on('candidates')->onDelete('cascade');
            $table->string('activity_type')->nullable();
            $table->string('activity_type_2')->nullable();
            $table->string('activity_note')->nullable();
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
        Schema::dropIfExists('activebars');
    }
}
