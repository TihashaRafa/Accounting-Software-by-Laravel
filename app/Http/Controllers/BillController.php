<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Bill;
use App\Models\Account;
use App\Models\catagory;
use App\Models\Payer;
use App\Models\PaymentMethod;
use Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class BillController extends Controller
{
    public function BillAll()
    {
   
        $bill = Bill::select('bills.*', 'accounts.*', 'catagories.*','payers.*')
               ->with(['account','catagory', 'PaymentMethod', 'payer'])
               ->join('accounts', 'accounts.id', '=', 'bills.account_id')
               ->join('catagories', 'catagories.id', '=', 'bills.catagory_name')
               ->join('payers', 'payers.id', '=', 'bills.payer_name')
               ->get();
           
     
        return view('backend.bill.bill_all', compact('bill'));
    } // end method


    public function BillAdd(){
        return view('backend.bill.bill_add');
    } //end 

    public function SummeryAdd(){
        return view('backend.bill.bill_summery');
    } //end 

  
    public function BillStore(Request $request){
        Bill::insert([
            'title' => $request->title,
            'duedate' => $request->duedate,
            'repeat' => $request->repeat,
            'currency' => $request->currency,
            'amount' => $request->amount,
            'account_id' => $request->account_id,
            'payer_name' => $request->payer_name,
            'catagory_name' => $request->catagory_name,
            'website' => $request->website,
           
            'created_by' =>Auth::user()->id,
            'created_at' =>Carbon::now(),
    
        ]);  
  return redirect()->route('bill.all');


} //end method

public function BillShow($id){
    $bill = Bill::find($id);
    return view('backend.bill.bill_all', ['bill' => $bill]);
  } //end method


}
