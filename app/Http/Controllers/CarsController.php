<?php

namespace App\Http\Controllers;
use App\Models\cars;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CarsController extends Controller
{
    public function cars(cars $cars){
        return Inertia::render('cars',[
            'cars'=> $cars-> only(
                'id',
                'car_name',
                'description',
                'model_year',
                'car_brand',
                'color',
                'capacity',
                'plate_number',
                'rate',
                'owner_id',
                'status',

            ),
        ]);


    }
}
