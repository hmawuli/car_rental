<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(){
        $data = [
            'fname' => 'benz',
             'lname' => 'toyota',
        ];
        return Inertia::render('Dashboard/Index', $data);
    }
}
