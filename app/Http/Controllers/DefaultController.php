<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Company;
use App\Models\Customer;
use Auth;
use Illuminate\Support\Carbon;

class DefaultController extends Controller
{
  
    public function GetCustomer(Request $request){

        $supplier_id = $request->supplier_id;
        // dd($supplier_id);bn 
        $allcustomer = Product::with(['customer'])->select('customer_id')->where('supplier_id',$supplier_id)->groupBy('customer_id')->get();
        return response()->json($allcustomer);
    } // End Mehtod 



    public function GetCompany(Request $request){

        $company_id = $request->company_id;
        // dd($supplier_id);bn 
        $allcompany = Product::select('company_id')->where('company_id',$company_id)->get();
        return response()->json($allcompany);
    } // End Mehtod 
}
