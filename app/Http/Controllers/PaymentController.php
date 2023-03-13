<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function paymentAll(){
        return view('backend.payment.payment_all');
    }
}
