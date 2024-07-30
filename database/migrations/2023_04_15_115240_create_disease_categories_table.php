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
        Schema::create('disease_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('name of disease category');
            $table->string('code')->comment('code of disease category');
            $table->unsignedBigInteger('disease_id');
            $table->foreign('disease_id')->references('id')->on('diseases');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disease_categories');
    }
};
