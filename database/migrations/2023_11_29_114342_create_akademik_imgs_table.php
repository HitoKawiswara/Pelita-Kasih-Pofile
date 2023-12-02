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
        Schema::create('akademik_imgs', function (Blueprint $table) {
            $table->id();
            $table->string('img')->default('akademik_img_ex.png');
            $table->enum('type', ['tk', 'sd', 'smp', 'sma']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akademik_imgs');
    }
};
