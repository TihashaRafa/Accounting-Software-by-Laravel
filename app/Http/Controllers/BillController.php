<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Bill;
use Auth;
use Illuminate\Support\Carbon;

class BillController extends Controller
{
    public function BillAll(){

        $bill = Bill::all();
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
            'account' => $request->account,
            'payee' => $request->payee,
            'catagory' => $request->catagory,
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
