<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Film;
use Faker\Core\File;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Menampilkan daftar semua film.
     */
    public function index()
    {
        // Ambil semua film dengan relasi kategori (misalnya jika ada relasi dengan kategori)
        $films = Film::with('category')->get();

        return response()->json($films);
    }

    /**
     * Menampilkan detail film berdasarkan ID.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        // Ambil film berdasarkan ID dan relasi dengan kategori
        $film = Film::with(['category', 'reviews.user'])->findOrFail($id);

        return response()->json($film);
    }
}
