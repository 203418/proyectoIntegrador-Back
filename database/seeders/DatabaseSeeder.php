<?php

namespace Database\Seeders;

use App\Models\Brightness;
use App\Models\Humidity;
use App\Models\PlantTemperature;
use App\Models\WaterDistance;
use App\Models\WaterPump;
use App\Models\WaterTemperature;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        for ($i=0; $i < 50; $i++) {
            Brightness::create([
                'plant_id' => 1,
                'brightness' => rand(0, 10),
            ]);

            PlantTemperature::create([
                'plant_id' => 1,
                'temperature' =>  rand(0, 10)
            ]);

            Humidity::create([
                'plant_id' => 1,
                'humidity' => rand(0, 10)
            ]);

            WaterDistance::create([
                'plant_id' => 1,
                'distace' => rand(0, 10)
            ]);

            WaterTemperature::create([
                'plant_id' => 1,
                'temperature' => rand(0, 10)
            ]);

            WaterPump::create([
                'plant_id' => 1,
                'status' => rand(0, 1)
            ]);
        }


    }
}
