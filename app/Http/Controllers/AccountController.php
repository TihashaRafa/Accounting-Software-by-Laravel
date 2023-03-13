<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use Auth;
use Illuminate\Support\Carbon;

class AccountController extends Controller
{
    public function AccountAdd(){
        return view('backend.account.account_add');
    }


    public function AccountAll(){
        $account = Account::all();
        return view('backend.account.account_all', compact('account'));
    } //end 

    public function AccountStore(Request $request){
        // $accounts = Account::with('deposits')->get();

        Account::insert([
            'account_id' => $request->account_id,
            'description' => $request->description,
            'balance_bdt' => $request->balance_bdt,
            'balance_usd' => $request->balance_usd,
            'acc_number' => $request->acc_number,
            'contact' => $request->contact,
            'phone' => $request->phone,
            'url' => $request->url,
            'owner' => $request->owner,

            'created_by' =>Auth::user()->id,
            'created_at' =>Carbon::now(),
        ]);
        return redirect()->route('account.all');
    }// end method

 //edit data
 public function AccountEdit($id){

    $account = Account::findOrFail($id); //show data in the field 
    return view('backend.account.account_edit',compact('account'));

}


public function AccountUpdate(Request $request){
    $account_id = $request->id;

    Account::findOrFail($account_id)->update([
        'account_id' => $request->account_id,
        'description' => $request->description,
        'balance_bdt' => $request->balance_bdt,
        'balance_usd' => $request->balance_usd,
        'acc_number' => $request->acc_number,
        'contact' => $request->contact,
        'phone' => $request->phone,
        'url' => $request->url,
        'owner' => $request->owner,
      
        'created_by' =>Auth::user()->id,
        'created_at' =>Carbon::now(),
    ]);
    return redirect()->route('account.all');
}// end method

public function AccountDelete($id){
    Account::findOrFail($id)->delete(); //show data in the field 
    return redirect()->back();
  
} //end method 

public function AccountRecord(){
    return view('backend.account.record_balance');
}

}
