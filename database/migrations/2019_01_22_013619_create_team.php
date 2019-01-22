<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->date('dateOfBirth');
            $table->string('place');
            $table->string('city');
            $table->string('personLegally');
            $table->foreign('teams_id')
            ->unsigned()
            ->nullable()
            ->references('id')
            ->on('team');
            $table->foreign('teacher_id')
            ->unsigned()
            ->nullable()
            ->references('id')
            ->on('teacher');
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
        Schema::dropIfExists('teams');
    }
}
