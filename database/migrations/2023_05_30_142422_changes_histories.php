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
        
        Schema::create('changes_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('layanan_id');
            $table->string('old_name')->nullable();
            $table->string('old_desc')->nullable();
            $table->string('old_price')->nullable();
            $table->string('new_name')->nullable();
            $table->string('new_desc')->nullable();
            $table->string('new_price')->nullable();
            $table->timestamp('time')->nullable();
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
