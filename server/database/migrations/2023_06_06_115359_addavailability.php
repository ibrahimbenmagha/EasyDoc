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
        DB::statement('CREATE TRIGGER addavailability
        AFTER INSERT ON doctors
        FOR EACH ROW
        BEGIN
          INSERT INTO availability (id_doc, day_of_week, start_time, end_time, available)
          VALUES
            (NEW.id, "Monday", "10:00:00", "11:00:00", TRUE),
            (NEW.id, "Monday", "09:00:00", "10:00:00", TRUE),
            (NEW.id, "Monday", "11:00:00", "12:00:00", TRUE),
            (NEW.id, "Monday", "14:00:00", "15:00:00", TRUE),
            (NEW.id, "Monday", "15:00:00", "16:00:00", TRUE),
            (NEW.id, "Monday", "16:00:00", "17:00:00", TRUE),
        
            (NEW.id, "Tuesday", "09:00:00", "10:00:00", TRUE),
            (NEW.id, "Tuesday", "10:00:00", "11:00:00", TRUE),
            (NEW.id, "Tuesday", "11:00:00", "12:00:00", TRUE),
            (NEW.id, "Tuesday", "14:00:00", "15:00:00", TRUE),
            (NEW.id, "Tuesday", "15:00:00", "16:00:00", TRUE),
            (NEW.id, "Tuesday", "16:00:00", "17:00:00", TRUE),
        
            (NEW.id, "Wednesday", "09:00:00", "10:00:00", TRUE),
            (NEW.id, "Wednesday", "10:00:00", "11:00:00", TRUE),
            (NEW.id, "Wednesday", "11:00:00", "12:00:00", TRUE),
            (NEW.id, "Wednesday", "14:00:00", "15:00:00", TRUE),
            (NEW.id, "Wednesday", "15:00:00", "16:00:00", TRUE),
            (NEW.id, "Wednesday", "16:00:00", "17:00:00", TRUE),
        
            (NEW.id, "Thursday", "09:00:00", "10:00:00", TRUE),
            (NEW.id, "Thursday", "10:00:00", "11:00:00", TRUE),
            (NEW.id, "Thursday", "11:00:00", "12:00:00", TRUE),
            (NEW.id, "Thursday", "14:00:00", "15:00:00", TRUE),
            (NEW.id, "Thursday", "15:00:00", "16:00:00", TRUE),
            (NEW.id, "Thursday", "16:00:00", "17:00:00", TRUE),
        
            (NEW.id, "Friday", "09:00:00", "10:00:00", TRUE),
            (NEW.id, "Friday", "10:00:00", "11:00:00", TRUE),
            (NEW.id, "Friday", "11:00:00", "12:00:00", TRUE),
            (NEW.id, "Friday", "14:00:00", "15:00:00", TRUE),
            (NEW.id, "Friday", "15:00:00", "16:00:00", TRUE),
            (NEW.id, "Friday", "16:00:00", "17:00:00", TRUE);
            
        END ;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
