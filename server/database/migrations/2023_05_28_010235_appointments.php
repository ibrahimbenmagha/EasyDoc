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
        Schema::create('appointments', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->foreignId('id_doc')->references('id')->on('doctors');
            $table->foreignId('id_patient')->references('id')->on('patients');
            $table->foreignId('id_availability')->references('id')->on('availability');
            $table->text('appointment_result')->nullable();
            $table->boolean('isApproved')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
