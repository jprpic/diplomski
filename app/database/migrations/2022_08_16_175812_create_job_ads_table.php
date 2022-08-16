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
        Schema::create('job_ads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->unsignedTinyInteger('minAge');
            $table->unsignedTinyInteger('maxAge');
            $table->unsignedTinyInteger('minExp');
            $table->unsignedTinyInteger('maxExp');
            $table->string('county');
            $table->string('city');
            $table->json('skill_ids');
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
        Schema::dropIfExists('job_ads');
    }
};
