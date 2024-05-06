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
        Schema::create('exercise_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exercise_id')->constrained()->onDelete('cascade');
            $table->text('instruction');
            $table->text('calories_burned_description');
            $table->text('photo_path')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercise_detail');
    }
};
