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
        Schema::create('structures', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('name', 60);
            $table->enum('work_as', ['guru', 'staff', 'kepala sekolah', 'wakil kepala sekolah']);
            $table->string('job_desc', 30)->nullable(true);
            $table->enum('category', ['tk', 'sd', 'smp', 'sma']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('structures');
    }
};
