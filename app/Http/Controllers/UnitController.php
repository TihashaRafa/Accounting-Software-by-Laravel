<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
use Auth;
use Illuminate\Support\Carbon;


class UnitController extends Controller
{
    public function UnitAll(){

        $unit = Unit::all();
        return view('backend.unit.unit_all', compact('unit'));
    } // end method


    public function UnitStore(Request $request)
    {
        Unit::insert([
            'unit_name' => $request->unit_name,
            
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),

        ]);
        return redirect()->route('unit.all');
    } //end method



    public function UnitEdit($id){

        $unit = Unit::findOrFail($id); 
        return view('backend.unit.unit_edit', compact('unit'));
   
       } //end method 



    public function UnitUpdate(Request $request){
        $unit_id = $request->id;

        Unit::findOrFail($unit_id)->update([
            'unit_name' => $request->unit_name,

            'created_by' =>Auth::user()->id,
            'created_at' =>Carbon::now(),
        ]);

        return redirect()->route('unit.all');
     
    }// end method

     // delete all
     public function UnitDelete($id){
        Unit::findOrFail($id)->delete(); // delete is not working
        return redirect()->back();

    } //end method
}
