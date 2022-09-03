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
        Schema::create('contact__org_c_v_s', function (Blueprint $table) {
            $table->unsignedTinyInteger('contact_id');
            $table->foreign('contact_id')->references('id')->on('contacts');
            // On CV delete, delete all contacts
            $table->foreignId('org_c_v_s_id')->constrained()->onDelete('cascade');
            // Composite primary key
            $table->primary(['contact_id','org_c_v_s_id']);
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
        Schema::dropIfExists('contact__org_c_v_s');
    }
};
