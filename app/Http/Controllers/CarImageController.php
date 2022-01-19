<?php

namespace App\Http\Controllers;
use App\Models\car_image;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CarImageController extends Controller
{
    public function car_image(car_image $car_image){
        return Inertia::render('car_image',[
            'car_image'=> $car_image-> only(
                'id',
                'image_description',
                'car_id',
            ),
        ]);
    }
}
