<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_title',
        'post_content',
        'excerpt',
        'slug',
        'sky_resort_id',
        'user_id',
    ];

    public function sky_resort(){
        return $this->belongsTo(Sky_resort::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
