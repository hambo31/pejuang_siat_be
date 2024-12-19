<?php

namespace Database\Seeders;

use App\Models\Film;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            [
                'film_id' => Film::where('title', 'Inception')->first()->id,
                'user_id' => User::where('name', 'John Doe')->first()->id,
                'rating' => 5,
                'comment' => 'Amazing movie with an intricate plot!',
                'created_at' => now(),
            ],
            [
                'film_id' => Film::where('title', 'Avengers: Endgame')->first()->id,
                'user_id' => User::where('name', 'Jane Smith')->first()->id,
                'rating' => 4,
                'comment' => 'A satisfying conclusion, but a bit too long.',
                'created_at' => now(),
            ],
            [
                'film_id' => Film::where('title', 'Interstellar')->first()->id,
                'user_id' => User::where('name', 'Bob Brown')->first()->id,
                'rating' => 5,
                'comment' => 'A visually stunning and thought-provoking movie.',
                'created_at' => now(),
            ],
            // Tambahkan review lainnya...
        ];

        foreach ($reviews as $review) {
            Review::create($review);
        }
    }
}
