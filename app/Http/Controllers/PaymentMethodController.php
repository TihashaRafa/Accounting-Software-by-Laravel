<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentMethod;
use Auth;
use Illuminate\Support\Carbon;

class PaymentMethodController extends Controller
{
    public function PaymentMethodAll(){

        $payment_method = PaymentMethod::all();
        return view('backend.PaymentMethod.pament_method_all', compact('payment_method'));
    } // end method


    public function PaymentMethodStore(Request $request)
    {
        PaymentMethod::insert([
            'payment_method_name' => $request->payment_method_name,
            
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),

        ]);
        return redirect()->route('PaymentMethod.all');
    } //end method



    public function PaymentMethodEdit($id){

        $payment_method = PaymentMethod::findOrFail($id); 
        return view('backend.PaymentMethod.payment_method_edit', compact('payment_method'));
   
       } //end method 



    public function PaymentMethodUpdate(Request $request){
        $payment_method_id = $request->id;

        PaymentMethod::findOrFail($payment_method_id)->update([
            'payment_method_name' => $request->payment_method_name,

            'created_by' =>Auth::user()->id,
            'created_at' =>Carbon::now(),
        ]);

        return redirect()->route('PaymentMethod.all');
     
    }// end method

     // delete all
     public function PaymentMethodDelete($id){
        PaymentMethod::findOrFail($id)->delete(); // delete is not working
        return redirect()->back();

    } //end method
}
