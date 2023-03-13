<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payer;
use Auth;
use Illuminate\Support\Carbon;


class PayerController extends Controller
{
    public function PayerAll(){

        $payer = Payer::all();
        return view('backend.payer.payer_all', compact('payer'));
    } // end method


    public function PayerStore(Request $request)
    {
        Payer::insert([
            'payer_name' => $request->payer_name,
            
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),

        ]);
        return redirect()->route('payer.all');
    } //end method



    public function PayerEdit($id){

        $payer = Payer::findOrFail($id); 
        return view('backend.payer.payer_edit', compact('payer'));
   
       } //end method 



    public function PayerUpdate(Request $request){
        $expance_catagory_id = $request->id;

        Payer::findOrFail($expance_catagory_id)->update([
            'payer_name' => $request->payer_name,

            'created_by' =>Auth::user()->id,
            'created_at' =>Carbon::now(),
        ]);

        return redirect()->route('payer.all');
     
    }// end method

     // delete all
     public function PayerDelete($id){
        Payer::findOrFail($id)->delete(); // delete is not working
        return redirect()->back();

    } //end method
}
