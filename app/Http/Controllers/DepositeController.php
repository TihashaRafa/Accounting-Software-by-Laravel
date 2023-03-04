<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deposite;
use App\Models\Staff;
use App\Models\Account;
use Auth;
use Illuminate\Support\Carbon;

class DepositeController extends Controller
{
    public function DepositeAll(){

        $deposite = Deposite::all();
        $staff = Staff::all();
        $account = Account::all();
        return view('backend.deposite.deposite_all', compact('deposite','staff','account'));
    } // end method


    public function DpositeStore(Request $request){
        Deposite::insert([
            'account_id' => $request->account_id,
            'code' => $request->code,
            'date' => $request->date,
            'description' => $request->description,
            'attached' => $request->attached,
            'currency' => $request->currency,
            'amount' => $request->amount,
            'catagory' => $request->catagory,
            'tags' => $request->tags,
            'company' => $request->company,
            'payer' => $request->payer,
            'staff_id' => $request->staff_id,
            'method' => $request->method,
            'status' => $request->status,
           
            'created_by' =>Auth::user()->id,
            'created_at' =>Carbon::now(),
    
        ]);  
  return redirect()->route('deposite.all');


} //end method

public function DpositeShow($id){
    $deposite = Deposite::find($id);
    return view('backend.deposite.deposite_all', ['deposite' => $deposite]);
}



}
