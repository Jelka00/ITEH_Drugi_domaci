<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sky_track extends Model
{
    use HasFactory;

    protected $fillable = [
        'track_name',
        'track_length',
        'track_category',
        'slug',
        'sky_resort_id',
    ];

    public function sky_resort(){
        return $this->belongsTo(Sky_resort::class);
    }
}
