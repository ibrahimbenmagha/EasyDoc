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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false)->references('name')->on('users');
            $table->string('surname',30)->nullable(false)->references('surname')->on('users');
            $table->foreignId('user_id')->references('id')->on('users')->nullable();
            $table->string('phone', 250)->nullable(false);
            $table->string('email',150)->unique()->references('email')->on('users');
            $table->string('specialite', 250);
            $table->foreign('specialite')->references('name_specialite')->on('specialities');
            $table->string('addressCabinet', 250)->nullable(false);
            $table->rememberToken();
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
