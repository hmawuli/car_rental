<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CustomerController extends Controller
{
    public function show(customer $customer)
    {
        return Inertia::render('customer/show',[
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
