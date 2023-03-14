<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use Auth;
use Illuminate\Support\Carbon;


class OwnerController extends Controller
{
    public function OwnerAll(){

        $owner = Owner::all();
        return view('backend.owner.owner_all', compact('owner'));
    } // end method


    public function OwnerStore(Request $request)
    {
        Owner::insert([
            'owner_name' => $request->owner_name,
            
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),

        ]);
        return redirect()->route('owner.all');
    } //end method



    public function OwnerEdit($id){

        $owner = Owner::findOrFail($id); 
        return view('backend.owner.owner_edit', compact('owner'));
   
       } //end method 



    public function OwnerUpdate(Request $request){
        $expance_catagory_id = $request->id;

        Owner::findOrFail($expance_catagory_id)->update([
            'owner_name' => $request->owner_name,

            'created_by' =>Auth::user()->id,
            'created_at' =>Carbon::now(),
        ]);

        return redirect()->route('owner.all');
     
    }// end method

     // delete all
     public function OwnerDelete($id){
        Owner::findOrFail($id)->delete(); // delete is not working
        return redirect()->back();

    } //end method
}
