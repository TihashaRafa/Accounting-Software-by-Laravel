<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;
use Auth;
use Illuminate\Support\Carbon;

class ServiceController extends Controller
{
    public function ServiceAdd(){
        return view('backend.service.service_add');
    }
    public function ServiceAll(){
        $service = Service::all();
        return view('backend.service.service_all', compact('service'));
    } //end 


    public function ServiceStore(Request $request){
        Service::insert([
            'name' => $request->name,
            'sale_price' => $request->sale_price,
            'item_number' => $request->item_number,
            'tax_code' => $request->tax_code,
            'description' => $request->description,
            'image' => $request->image,

            'created_by' =>Auth::user()->id,
            'created_at' =>Carbon::now(),
        ]);
        return redirect()->route('service.all');
    }// end method

    public function ServiceEdit($id){

        $service = Service::findOrFail($id); 
        return view('backend.service.service_edit',compact('service'));
   
       } //end method 

       public function ServiceUpdate(Request $request){
        $service_id = $request->id;

        Service::findOrFail($service_id)->update([
            'name' => $request->name,
            'sale_price' => $request->sale_price,
            'item_number' => $request->item_number,
            'tax_code' => $request->tax_code,
            'description' => $request->description,
            'image' => $request->image,

          
            'created_by' =>Auth::user()->id,
            'created_at' =>Carbon::now(),
        ]);
        return redirect()->route('service.all');

    } //end 


}
