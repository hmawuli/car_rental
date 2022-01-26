<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller
{
    public function about(Request $request)

    {

        return Inertia::render('about');
    }

    public function home(Request $request)
    {
        return Inertia::render('home');
    }
    public function admin(Request $request)
    {
        return Inertia::render('admin');
    }
    public function carimage(Request $request)
    {
        return Inertia::render('carImage');
    }

    public function carowner(Request $request)
    {
        return Inertia::render('carowner');
    }
    public function carownercredential(Request $request)
    {
        return Inertia::render('carOwnerCredential');
    }
    public function carrental(Request $request)
    {
        return Inertia::render('carRental');
    }
    public function carreview(Request $request)
    {
        return Inertia::render('carReview');
    }
    public function cars(Request $request)
    {
        return Inertia::render('cars');
    }
    public function customer(Request $request)
    {
        return Inertia::render('customer');
    }
    public function customercredential(Request $request)
    {
        return Inertia::render('customerCredential');
    }
    public function payment(Request $request)
    {
        return Inertia::render('payment');
    }
}
