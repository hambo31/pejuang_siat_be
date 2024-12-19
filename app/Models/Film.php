<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $table = 'films';

    // Relasi dengan kategori
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relasi dengan review
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
