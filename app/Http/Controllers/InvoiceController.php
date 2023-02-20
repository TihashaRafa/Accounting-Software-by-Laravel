<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// // use App\Models\Product;
// // use App\Models\Supplier;
// // use App\Models\Company;
// // use App\Models\Customer;
// use Auth;
use Illuminate\Support\Carbon; 

use App\Models\Invoice;
use App\Models\InvoiceDetails;
use App\Models\Payment;
use App\Models\PaymentDetails;




class InvoiceController extends Controller
{
    public function InvoiceAll(){
        $allData = Invoice::orderBy('date','desc')->orderBy('id','desc')->get();
        return view('backend.invoice.invoice_all',compact('allData'));
    } // end method 
}
