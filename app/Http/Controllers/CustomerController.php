<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CustomerController extends Controller
{
    public function customer(customer $customer)
    {
        return Inertia::render('customer',[
            'customer' => $customer->only(
                'id',
                'customer_name',
                'address',
                'contact',
                'profile-image',
                'email_account',
                'username',
                'password',
                'account-status',



            ),


        ]);


    }
}
