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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            // On CV delete, delete all experiences
            // One-to-many relationship with CV table (many)
            $table->foreignId('cv_id')->constrained()->onDelete('cascade');
            // Educational or employment experience
            $table->string('type');
            // Name of the event/job/education programme
            $table->string('name');
            // From where was the experience obtained
            $table->string('source');
            // Skills obtained or responsibilities held
            $table->json('results');
            $table->dateTime('started_at');
            // Null in case the experience is still ongoing
            $table->dateTime('finished_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experiences');
    }
};
