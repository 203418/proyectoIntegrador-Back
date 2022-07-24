<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Humidity extends Model
{
    use HasFactory;

    protected $fillable = [
        'plant_id',
        'humidity'
    ];

    public function Plant(){
        return $this->belongsTo(Plant::class);
    }
}
