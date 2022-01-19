<?php

namespace App\Http\Controllers;

use App\Models\car_review;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CarReviewController extends Controller
{
    public function car_review( car_review $car_review){
        return Inertia::render('car_review',[
            'car_review' => $car_review -> only(
                'id',
                'review',
                'review_score',
                'date',
                'customer_id',
                'car_id',
            ),
        ]);

    }
}
