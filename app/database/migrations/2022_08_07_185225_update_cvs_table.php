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
        Schema::table('cvs', function (Blueprint $table) {
            // Added location via postcode
            $table->unsignedInteger('postcode');
            $table->foreign('postcode')->references('code')->on('postcodes');
            $table->string('street');
            // M or F
            $table->string('sex', 1);
            $table->dateTime('birthdate');
            $table->unsignedTinyInteger('years_of_exp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cvs', function (Blueprint $table) {
            $table->dropForeign(['postcode']);
        });
    }
};
