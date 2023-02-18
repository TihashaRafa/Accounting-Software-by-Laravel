<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Supplier;
use App\Models\Company;
use App\Models\Customer;
use Auth;
use Illuminate\Support\Carbon;

class PurchaseController extends Controller
{
   public function PurchaseAll(){
    $allData = Purchase::orderBy('date', 'desc')->orderBy('id', 'desc')->get();
    return view('backend.purchase.purchase_all', compact('allData'));

   } // end method

   public function PurchaseAdd(){

    $supplier = Supplier::all();
    $company = Company::all();
    $customer = Customer::all();
    return view('backend.purchase.purchase_add', compact('supplier', 'company', 'customer'));

   } // end method
}
