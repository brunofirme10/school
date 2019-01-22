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
            $table->engine = "MyISAM";
            $table->increments('id');
            $table->unsignedInteger("teacher_id");
            $table->foreign("teacher_id")->references("id")->on("teachers")->onDelete("cascade");
            $table->smallInteger('min_students')->default(5); // número mínimo de estudantes por turma
            $table->smallInteger('max_students')->default(10); // número máximo de estudantes por turma
            $table->string('slug')->unique();
            $table->string('title');
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
