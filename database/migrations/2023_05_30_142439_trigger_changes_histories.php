<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared('
        CREATE TRIGGER changes_history AFTER UPDATE ON `layanans` FOR EACH ROW
            BEGIN
                INSERT INTO changes_histories (`layanan_id`,`old_name`, `old_desc`, `old_price`, `new_name`, `new_desc`, `new_price`, `time`) VALUES (OLD.id,OLD.name, OLD.description, OLD.price, NEW.name, NEW.description, NEW.price, now());
            END
        ');
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared(`DROP TRIGGER 'changes_history'`);
    }
};
