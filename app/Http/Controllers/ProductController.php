<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Company;
use App\Models\Customer;
use Auth;
use Illuminate\Support\Carbon;

class ProductController extends Controller
{
    public function productAll(){
        $product = Product::all();
        return view('backend.product.product_all', compact('product'));
    } //end method


    public function productAdd(){
        $supplier = Supplier::all();
        $company = Company::all();
        $customer = Customer::all();
        return view('backend.product.product_add', compact('supplier', 'company', 'customer' ));
    } // end method 


    public function ProductStore(Request $request){
        Product::insert([
            'name' => $request->name,
            'supplier_id' => $request->supplier_id,
            'customer_id' => $request->customer_id,
            'company_id' => $request->company_id,
            'quantity' => '0',

            'created_by' =>Auth::user()->id,
            'created_at' =>Carbon::now(),
     
        ]);
        return redirect()->route('product.all');
    }//end method

    public function ProductEdit($id){
        $supplier = Supplier::all();
        $company = Company::all();
        $customer = Customer::all();
        $product = Product::findOrFail($id);

        return view('backend.product.product_edit', compact('supplier', 'company', 'customer', 'product' ));
    }


    public function ProductUpdate(Request $request){
        $product_id = $request->id;


        Product::findOrFail($product_id)->update([
            'name' => $request->name,
            'supplier_id' => $request->supplier_id,
            'customer_id' => $request->customer_id,
            'company_id' => $request->company_id,

            'updated_by' =>Auth::user()->id,
            'updated_at' =>Carbon::now(),
     
        ]);
        return redirect()->route('product.all');
    } // end method

    // delete all
    public function ProductDelete($id){
        Product::findOrFail($id)->delete(); //show data in the field 
        return redirect()->back();
      
    } //end method 



}
