<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller
{
    public function about(Request $request)
    {
        return Inertia::render('About');
    }

    public function home(Request $request)
    {
        return Inertia::render('Home');
    }
    public function admin(Request $request)
    {
        return Inertia::render('Admin');
    }
    public function carimage(Request $request)
    {
        return Inertia::render('CarImage');
    }

    public function carowner(Request $request)
    {
        return Inertia::render('Carowner');
    }
    public function carownercredential(Request $request)
    {
        return Inertia::render('CarOwnerCredential');
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
    public function payment(Request $request)
    {
        return Inertia::render('Payment');
    }
}
