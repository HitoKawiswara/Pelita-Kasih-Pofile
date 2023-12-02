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

        Structure::factory(50)->create();
        News::factory(20)->create();
        User::factory(1)->create();
        AkademikImg::factory(14)->create();
        Ekstrakurikuler::factory(4)->create();

    }
}