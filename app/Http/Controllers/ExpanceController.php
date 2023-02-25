<?php

namespace App\Http\Controllers;
use App\Models\Expance;
use Auth;
use Illuminate\Support\Carbon;

use Illuminate\Http\Request;

class ExpanceController extends Controller
{
    public function ExpanceAll(){

        $expance = Expance::all();
        return view('backend.expance.expance_all', compact('expance'));
    } // end method

    public function ExpanceStore(Request $request){
        Expance::insert([
            'account' => $request->account,
            'code' => $request->code,
            'date' => $request->date,
            'description' => $request->description,
            'attached' => $request->attached,
            'currency' => $request->currency,
            'amount' => $request->amount,
            'catagory' => $request->catagory,
            'tags' => $request->tags,
            'company' => $request->company,
            'payee' => $request->payee,
            'staff' => $request->staff,
            'method' => $request->method,
            'status' => $request->status,
            'ref' => $request->ref,

            'created_by' =>Auth::user()->id,
            'created_at' =>Carbon::now(),
    
        ]);  
  return redirect()->route('expance.all');


} //end method

public function ExpanceShow($id){
    $expance = Expance::find($id);
    return view('backend.expance.expance_all', ['expance' => $expance]);
}

}
