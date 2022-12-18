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
        'km_of_tracks',
    ];
}
