<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Auth;
use Illuminate\Support\Carbon;

class TransactionController extends Controller
{
    public function TransactionAll(){

        $transaction = Transaction::all();
        return view('backend.transaction.transaction_all', compact('transaction'));
    } // end method

    public function TransactionUnclear(){

        $transaction = Transaction::all();
        return view('backend.transaction.transactio_unclear', compact('transaction'));
    } // end method


    public function TransactionStore(Request $request){
        Transaction::insert([
            'daterange' => $request->daterange,
            'transactionType' => $request->transactionType,
            'amount' => $request->amount,
            'contact' => $request->contact,
            'catagory' => $request->catagory,

            'created_by' =>Auth::user()->id,
            'created_at' =>Carbon::now(),
    
        ]);  
  return redirect()->route('transaction.all');


} //end method

public function TransactionShow($id){
    $transaction = Transaction::find($id);
    return view('backend.transaction.transaction_all', ['transaction' => $transaction]);
    
    } //end method
}
