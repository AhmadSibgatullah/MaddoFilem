<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filem extends Model
{
    use HasFactory;
    protected $table = 'movie';
    protected $fillable = ['judul', 'sutradara', 'deskripsi', 'cover', 'genre_id'];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
