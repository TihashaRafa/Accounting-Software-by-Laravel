<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catagory;
use Auth;
use Illuminate\Support\Carbon;

class CatagoryController extends Controller
{
    public function catagoryAll(){

        $catagory = catagory::all();
        return view('backend.income_catagory.catagory_all', compact('catagory'));
    } // end method


    public function catagoryStore(Request $request)
    {
        catagory::insert([
            'catagory_name' => $request->catagory_name,
            
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),

        ]);
        return redirect()->route('catagory.all');
    } //end method



    public function catagoryEdit($id){

        $catagory = catagory::findOrFail($id); 
        return view('backend.income_catagory.catagory_Edit', compact('catagory'));
   
       } //end method 



    public function catagoryUpdate(Request $request){
        $catagory_id = $request->id;

        catagory::findOrFail($catagory_id)->update([
            'catagory_name' => $request->catagory_name,

            'created_by' =>Auth::user()->id,
            'created_at' =>Carbon::now(),
        ]);

        return redirect()->route('catagory.all');
     
    }// end method

     // delete all
     public function CatagoryDelete($id){
        catagory::findOrFail($id)->delete(); // delete is not working
        return redirect()->back();

    } //end method



}
