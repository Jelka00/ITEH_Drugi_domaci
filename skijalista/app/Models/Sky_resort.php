<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sky_resort extends Model
{
    use HasFactory;
    protected $fillable = [
        'resort_name',
        'resort_location',
        'track_km',
        'slug',
    ];

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function restourants(){
        return $this->hasMany(Restourants::class);
    }

    public function sky_track(){
        return $this->hasMany(Sky_track::class);
    }
}
