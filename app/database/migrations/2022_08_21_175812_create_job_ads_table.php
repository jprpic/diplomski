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
            $table->foreignId('org_c_v_s_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->unsignedTinyInteger('minAge');
            $table->unsignedTinyInteger('maxAge');
            $table->unsignedTinyInteger('minExp');
            $table->unsignedTinyInteger('maxExp');
            $table->string('county')->nullable();
            $table->string('city')->nullable();
            $table->json('skills');
            $table->json('responsibilities');
            $table->string('description', 5000);
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
