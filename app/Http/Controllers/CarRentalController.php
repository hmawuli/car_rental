<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class CarRentalController extends Controller
{
    public function index(){
        $admin = admin::all();
    }

    
}
