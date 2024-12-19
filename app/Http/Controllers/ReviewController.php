<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function getReviews($filmId)
    {
        // Ambil semua review berdasarkan film_id
        $reviews = Review::where('film_id', $filmId)
            ->with('user') // Jika ingin menampilkan data user yang memberikan review
            ->get();

        return response()->json($reviews);
    }
}
