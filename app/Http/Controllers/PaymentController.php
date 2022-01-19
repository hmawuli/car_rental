<?php

namespace App\Http\Controllers;
use App\Models\payment;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PaymentController extends Controller
{
    public function payment(payment $payment){
        return Inertia::render('payment',[
            'payment' => $payment-> only(
                'id',
                'rental_id',
                'payment_amount',
                'add_charges',
                'payment_date',
                'admin_id',


            ),
        ]);
    }
}
