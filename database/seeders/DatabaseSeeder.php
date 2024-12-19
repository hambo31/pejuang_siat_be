<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Menjalankan Seeder untuk Category
        $this->call(CategorySeeder::class);

        // Menjalankan Seeder untuk Film
        $this->call(FilmSeeder::class);

        // Menjalankan Seeder untuk User
        $this->call(UserSeeder::class);

        // Menjalankan Seeder untuk Review
        $this->call(ReviewSeeder::class);
    }
}
