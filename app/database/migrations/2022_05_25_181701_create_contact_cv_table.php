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
        Schema::create('contact_cv', function (Blueprint $table) {
            $table->unsignedTinyInteger('contact_id');
            $table->foreign('contact_id')->references('id')->on('contacts');
            // On CV delete, delete all contacts
            $table->foreignId('cv_id')->constrained()->onDelete('cascade');
            // Composite primary key
            $table->primary(['contact_id','cv_id']);
            $table->string('value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_cv');
    }
};
