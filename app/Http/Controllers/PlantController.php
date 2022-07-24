<?php

namespace App\Http\Controllers;

use App\Models\Brightness;
use App\Models\Humidity;
use App\Models\Plant;
use App\Models\PlantTemperature;
use App\Models\WaterDistance;
use App\Models\WaterPump;
use App\Models\WaterTemperature;
use Illuminate\Http\Request;

class PlantController extends Controller
{
    public function getPlant(Request $request)
    {

        $plant = Plant::where('code', $request->code)
            ->with('PlantTemperature')
            ->with('Humidity')
            ->with('WaterDistance')
            ->with('Brightness')
            ->with('Brightness')
            ->with('WaterTemperature')
            ->with('WaterPump')
        ->first();
        if ($plant) {
            return $plant;
        }
        return $request->code;
    }

    public function postDataPlant(Request $request){
        $plant = Plant::where('code', $request->code)->first();

        if (isset($request->data)) {

            $data = explode(',', $request->data);

            PlantTemperature::create([
                'plant_id' => $plant->id,
                'temperature' => $data[0]
            ]);

            Humidity::create([
                'plant_id' => $plant->id,
                'humidity' => $data[1]
            ]);

            WaterDistance::create([
                'plant_id' => $plant->id,
                'distace' => $data[2]
            ]);

            Brightness::create([
                'plant_id' => $plant->id,
                'brightness' => $data[3]
            ]);

            WaterTemperature::create([
                'plant_id' => $plant->id,
                'temperature' => $data[4]
            ]);

            WaterPump::create([
                'plant_id' => $plant->id,
                'status' => $data[5]
            ]);

            return response('created');
        }
    }
}
