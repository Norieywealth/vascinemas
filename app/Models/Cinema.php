<?php

namespace App\Models;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cinema extends Model
{
    use HasFactory;


    protected $fillable = [
        'cinema_name',
    ];

    public function user()
    {
        return   $this->belongsTo(User::class);
    }

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}
