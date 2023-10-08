<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registrar', function (Blueprint $table) {
            $table->integer('registrar_id');
            $table->unsignedInteger('students_id');
            $table->foreign('students_id')->references('students_id')->on('students');
            $table->increments('list_of_courses');
            $table->string('clearance');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrar');
    }
};
