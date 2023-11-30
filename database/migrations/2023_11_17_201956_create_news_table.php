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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('thumbnail')->default('berita-example.png');
            $table->string('img1')->default('berita-example.png');
            $table->string('img2')->default('berita-example.png');
            $table->string('title', 60);
            $table->longText('content')->nullable(true);
            $table->smallInteger('duration')->default(10);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
