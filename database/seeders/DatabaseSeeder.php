<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AkademikImg;
use App\Models\Ekstrakurikuler;
use App\Models\News;
use App\Models\Structure;
use App\Models\User;
use Database\Factories\EkstrakurikulerFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(1)->create();
    }
}