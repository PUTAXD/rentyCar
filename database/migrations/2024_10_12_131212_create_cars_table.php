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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('merk_id')->constrained(
                table: 'merks', indexName: 'cars_merk_id'
            );
            $table->string('slug')->unique();
            $table->string('licensePlate');
            $table->string('type');
            $table->text('initialCondition');
            $table->text('body');
            $table->decimal('price', 10, 2);
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
