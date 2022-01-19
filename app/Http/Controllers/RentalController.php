<?php

namespace App\Http\Controllers;

use App\Models\rental;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RentalController extends Controller
{
    public function rental(rental $rental){
        return Inertia::render('rental',[
            'rental'=> $rental-> only(
                'id',
                'rental_date',
                'rental_time',
                'return_time',
                'owner-id',
                'car_id',
                'customer_id',
                'rental_status',
            ),
        ]);
    }
}
