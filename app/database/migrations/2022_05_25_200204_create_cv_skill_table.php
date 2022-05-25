<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Many-to-many pivot table
        Schema::create('cv_skill', function (Blueprint $table) {
            // On CV delete, delete all CV_Skills
            $table->foreignId('cv_id')->constrained()->onDelete('cascade');
            $table->unsignedSmallInteger('skill_id');
            $table->foreign('skill_id')->references('id')->on('skills');
            $table->primary(['cv_id','skill_id']);
            // Skill level range 1-5
            $table->tinyInteger('skill_level');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cv_skill');
    }
};
