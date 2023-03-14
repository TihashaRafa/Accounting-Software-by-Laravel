<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Auth;
use Illuminate\Support\Carbon;

class TransactionController extends Controller
{
        public function TransactionAll(Request $request)
        {
            // $query = Transaction::query();
            // $data = $request->input('data_filter');
            // if ($data) {
            //     switch ($data) {
            //         case 'today':
            //             $query->whereDate('created_at', Carbon::today());
            //             break;
            //         case 'yesterday':
            //             $query->whereDate('created_at', Carbon::yesterday());
            //             break;
            //         case 'this_week':
            //             $query->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
            //             break;
            //         case 'last_week':
            //             $query->whereBetween('created_at', [Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()]);
            //             break;
            //         case 'this_month':
            //             $query->whereMonth('created_at', Carbon::now()->month);
            //             break;
            //         case 'last_month':
            //             $query->whereMonth('created_at', Carbon::now()->subMonth()->month);
            //             break;
            //         case 'this_year':
            //             $query->whereYear('created_at', Carbon::now()->year);
            //             break;
            //         case 'last_year':
            //             $query->whereYear('created_at', Carbon::now()->subYear()->year);
            //             break;
            //     }
            // }
        
            // $transactions = $query->get();
            $transaction = Transaction::all();
            return view('backend.transaction.transaction_all', compact('transaction'));
        } //end method


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
