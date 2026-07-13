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
        Schema::create('residence_rooms', function (Blueprint $table) {
            $table->id();
           $table->foreignId('residence_id')
               ->constrained('residences')
             ->cascadeOnDelete();

            $table->string('room_number');
            $table->integer('number_of_bunks');
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('residence_rooms');
    }
      
};
