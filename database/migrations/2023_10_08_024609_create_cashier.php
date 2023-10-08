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
        Schema::create('cashier', function (Blueprint $table){
            $table->increments('cashier_id');
            $table->unsignedInteger('list_of_course');
            $table->foreign('list_of_course')->references('list_of_courses')->on('registrar');
            $table->string('enrollment_form');
            $table->string('state_of_account');
            $table->string('receipt');
            $table->string('certificate_of_enrollment');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cashier');
    }
};
