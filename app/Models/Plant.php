<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    use HasFactory;


    public function Humidity(){
        return $this->hasMany(Humidity::class);
    }

    public function PlantTemperature(){
        return $this->hasMany(PlantTemperature::class);
    }

    public function WaterDistance(){
        return $this->hasMany(WaterDistance::class);
    }

    public function Brightness(){
        return $this->hasMany(Brightness::class);
    }

    public function WaterTemperature(){
        return $this->hasMany(WaterTemperature::class);
    }

    public function WaterPump(){
        return $this->hasMany(WaterPump::class);
    }

}
