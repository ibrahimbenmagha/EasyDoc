<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     DB::statement('CREATE TRIGGER insert_cabinet
    // AFTER INSERT ON doctors
    // FOR EACH ROW
    // BEGIN
    //     INSERT INTO cabinets (address, phone)
    //     VALUES (NEW.addressCabinet, NEW.phone);
    // END;');
    // }
    public function up(): void
{
    DB::statement('CREATE TRIGGER insert_cabinet
        AFTER INSERT ON doctors
        FOR EACH ROW
        BEGIN
            INSERT INTO cabinets (id_doc, address, phone)
            VALUES (NEW.id, NEW.addressCabinet, NEW.phone);
        END;');
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
