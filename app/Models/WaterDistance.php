<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaterDistance extends Model
{
    use HasFactory;

    protected $fillable = [
        'plant_id',
        'distace'
    ];

    public function Plant(){
        return $this->belongsTo(Plant::class);
    }
}
