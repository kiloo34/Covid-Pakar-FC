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
        Schema::create('symptom_disease_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('symptom_category_id')->constrained();
            $table->foreignId('disease_category_id')->constrained();
            $table->string('custom_question')->comment('custom question for better life')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('symptom_disease_categories');
    }
};
