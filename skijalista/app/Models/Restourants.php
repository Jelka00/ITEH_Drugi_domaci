<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restourants extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'class',
        'slug',
        'sky_resort_id',
    ];
    
    public function sky_resort(){
        return $this->belongsTo(Sky_resort::class);
    }
}
