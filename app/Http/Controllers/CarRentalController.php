<?php

namespace App\Http\Controllers;

use Inertia\Inertia;


class CarRentalController extends Controller
{

    public function about(Request $request)
    {
        return Inertia::render('About');
    }

    public function home(Request $request)
    {
        return Inertia::render('Home');
    }
    public function carimage(Request $request)
    {
        return Inertia::render('CarImage');
    }

    public function carrental(Request $request)
    {
        return Inertia::render('CarRental');
    }
    public function carreview(Request $request)
    {
        return Inertia::render('CarReview');
    }
    public function cars(Request $request)
    {
        return Inertia::render('Cars');
    }
    public function customer(Request $request)
    {
        return Inertia::render('Customer');
    }
    public function customercredential(Request $request)
    {
        return Inertia::render('CustomerCredential');
    }

}
