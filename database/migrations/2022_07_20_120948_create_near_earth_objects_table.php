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
        Schema::create('near_earth_objects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('referenced');
            $table->string('name');
            $table->unsignedBigInteger('speed');
            $table->boolean('is_hazardous');
            $table->timestamp('date');
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
        Schema::dropIfExists('near_earth_objects');
    }
};
