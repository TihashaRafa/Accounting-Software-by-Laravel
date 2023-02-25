<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Transfer;
use Auth;
use Illuminate\Support\Carbon;


class TransferController extends Controller
{
    public function TransferAll(){

        $transfer = Transfer::all();
        return view('backend.transfer.transfer_all', compact('transfer'));
    } // end method

    public function TransferStore(Request $request){
        Transfer::insert([
            'from' => $request->from,
            'to' => $request->to,
            'date' => $request->date,
            'description' => $request->description,
            'currency' => $request->currency,
            'amount' => $request->amount,
            'tags' => $request->tags,
            'method' => $request->method,
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
