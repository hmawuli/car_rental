<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\custmoer_credential;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CustomerCredentialController extends Controller
{
    public function custmoer_credential(custmoer_credential $custmoer_credential){
        return Inertia::render('CustomerCredential',[
           'customer_credential' => $custmoer_credential-> only(
               'id',
               'credential_name',
               'file_Upload',
               'customer_id',

           ),
        ]);

    }
}
