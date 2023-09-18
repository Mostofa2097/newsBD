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
        Schema::create('namaz', function (Blueprint $table) {
            $table->id();
            $table->string('fajar')->nullable();
            $table->string('johor')->nullable();
            $table->string('ashor')->nullable();
            $table->string('magrib')->nullable();
            $table->string('esha')->nullable();
            $table->string('jummah')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('namaz');
    }
};
