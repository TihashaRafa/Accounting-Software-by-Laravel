<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Invoice;
use Auth;
use Illuminate\Support\Carbon;

class InvoiceController extends Controller
{
    public function InvoiceAdd(){
        return view('backend.invoice.invoice_all');
    }


    public function InvoiceAll(){
        return view('backend.invoice.invoice_add');
    }
}
