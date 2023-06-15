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
        // DB::statement('CREATE TRIGGER update_user_id
        //     AFTER INSERT ON doctors
        //     FOR EACH ROW
        //     BEGIN
        //         UPDATE doctors
        //         SET user_id = (SELECT id FROM users WHERE role = "doctor" AND id = NEW.user_id)
        //         WHERE id = NEW.id;
        //     END;');
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
