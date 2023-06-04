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
            $table->integer('id_doc');
            $table->integer('id_patient');
            $table->text('appointment_result')->nullable();
            $table->boolean('isApproved')->default(false);
            $table->integer('appointment_day')->nullable(false);
            $table->foreign('id_doc')->references('id')->on('doctors');
            $table->foreign('id_patient')->references('id')->on('patients');
            $table->foreign('appointment_day')->references('id')->on('availability');
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
