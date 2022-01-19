<?php

namespace App\Http\Controllers;

use App\Models\car_owner_credential;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CarOwnerCredentialController extends Controller
{
    public function car_owner_credential(car_owner_credential $car_owner_credential){
        return Inertia::render('car_owner_credential',[
            'car_owner_credential' => $car_owner_credential-> only(
                'id',
                'credential_name',
                'file_upload',
                'owner_id',
            ),
        ]);
    }
}
