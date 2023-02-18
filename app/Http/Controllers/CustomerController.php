<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Auth;
use Illuminate\Support\Carbon;

class CustomerController extends Controller
{
    public function customerAll(){

        $customer = Customer::all();
        return view('backend.customer.customer_all', compact('customer'));
    } // end method

    public function customerAdd(){
        return view('backend.customer.customer_add');
    } //end 
//data store
    
public function CustomerStore(Request $request){
        Customer::insert([
            'name' => $request->name,
            'code' => $request->code,
            'display_name' => $request->display_name,
            'company' => $request->company,
            'business_number' => $request->business_number,
            'type' => $request->type,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'country' => $request->country,
            'email' => $request->email,
            'secondary_email' => $request->secondary_email,
            'phone' => $request->phone,
            'currency' => $request->currency,
            'group' => $request->group,
            'owner' => $request->owner,
            'username' => $request->username,
            'password' => $request->password,
            'confirm_password' => $request->confirm_password,
          
            'created_by' =>Auth::user()->id,
            'created_at' =>Carbon::now(),
        ]);
        return redirect()->route('customer.all');
    }// end method

    //edit data
    public function CustomerEdit($id){

        $customer = Customer::findOrFail($id); //show data in the field 
        return view('backend.customer.customer_edit',compact('customer'));

    }
// update data
    public function CustomerUpdate(Request $request){
        $customer_id = $request->id;

        Customer::findOrFail($customer_id)->update([
            'name' => $request->name,
            'code' => $request->code,
            'display_name' => $request->display_name,
            'company' => $request->company,
            'business_number' => $request->business_number,
            'type' => $request->type,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'country' => $request->country,
            'email' => $request->email,
            'secondary_email' => $request->secondary_email,
            'phone' => $request->phone,
            'currency' => $request->currency,
            'group' => $request->group,
            'owner' => $request->owner,
            'username' => $request->username,
            'password' => $request->password,
            'confirm_password' => $request->confirm_password,
          
            'created_by' =>Auth::user()->id,
            'created_at' =>Carbon::now(),
        ]);
        return redirect()->route('customer.all');
    }// end method

    // delete all
    public function CustomerDelete($id){
        Customer::findOrFail($id)->delete(); //show data in the field 
        return redirect()->back();
      
    } //end method 

// show all data 
    public function CustomerShow($id){
        $customer = Customer::find($id);
        return view('backend.customer.customer_show', ['customer' => $customer]);
    }
}
