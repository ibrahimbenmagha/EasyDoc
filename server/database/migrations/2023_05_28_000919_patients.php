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
        Schema::create('patients', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('name',30)->nullable(false)->references('name')->on('users');
            $table->string('email',35)->unique()->references('email')->on('users');
            $table->string('phone', 25)->nullable(false)->references('phone')->on('users');
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
