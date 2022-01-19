<?php

namespace App\Http\Controllers;
use App\Models\car_owner;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CarOwnerController extends Controller
{
    public function car_owner(car_owner $car_owner){
        return Inertia::render('car_owner',[
            'car_owner' => $car_owner -> only(
                'id',
                'owner_name',
                'address',
                'contact',
                'profile_image',
                'email_account',
                'username',
                'password',
                'admin_id',
                'account_status',
            ),
        ]);
    }
}
