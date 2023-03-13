<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExpanceCatagory;
use Auth;
use Illuminate\Support\Carbon;



class ExpanceCtagoryController extends Controller
{
    public function expancecatagoryAll(){

        $expance_catagory = ExpanceCatagory::all();
        return view('backend.expance_catagory.Expance_catagory_all', compact('expance_catagory'));
    } // end method


    public function expancecatagoryStore(Request $request)
    {
        ExpanceCatagory::insert([
            'Expance_catagory_name' => $request->Expance_catagory_name,
            
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),

        ]);
        return redirect()->route('expance_catagory.all');
    } //end method



    public function expancecatagoryEdit($id){

        $expance_catagory = ExpanceCatagory::findOrFail($id); 
        return view('backend.expance_catagory.Expance_catagory_edit', compact('expance_catagory'));
   
       } //end method 



    public function expancecatagoryUpdate(Request $request){
        $expance_catagory_id = $request->id;

        ExpanceCatagory::findOrFail($expance_catagory_id)->update([
            'Expance_catagory_name' => $request->Expance_catagory_name,

            'created_by' =>Auth::user()->id,
            'created_at' =>Carbon::now(),
        ]);

        return redirect()->route('expance_catagory.all');
     
    }// end method

     // delete all
     public function expanceCatagoryDelete($id){
        ExpanceCatagory::findOrFail($id)->delete(); // delete is not working
        return redirect()->back();

    } //end method
}
