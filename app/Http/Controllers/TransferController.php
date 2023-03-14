<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Transfer;
use Auth;
use App\Models\Account;
use App\Models\PaymentMethod;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


class TransferController extends Controller
{
    public function TransferAll(){

        $transfer = Transfer::select('transfers.*', 'accounts.*', 'payment_methods.*')
        ->with(['account', 'PaymentMethod'])
        ->join('accounts', 'accounts.id', '=', 'transfers.account_id')
        ->join('payment_methods', 'payment_methods.id', '=', 'transfers.payment_method_name')
        ->get();
 $account = Account::all();
 $PaymentMethod = PaymentMethod::all();
 return view('backend.transfer.transfer_all', compact('transfer','account', 'PaymentMethod' ));
} // end method



    public function TransferStore(Request $request){
        Transfer::insert([
            'account_id' => $request->account_id,
            'account_id' => $request->account_id,
            'date' => $request->date,
            'description' => $request->description,
            'currency' => $request->currency,
            'amount' => $request->amount,
            'tags' => $request->tags,
            'payment_method_name' => $request->payment_method_name,
            'ref' => $request->ref,

            'created_by' =>Auth::user()->id,
            'created_at' =>Carbon::now(),
    
        ]);  
  return redirect()->route('transfer.all');


} //end method

public function TransferShow($id){
    $transfer = Transfer::find($id);
    return view('backend.transfer.transfer_all', ['transfer' => $transfer]);
}
}
