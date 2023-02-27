<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;
use Auth;
use Illuminate\Support\Carbon;

class AssetController extends Controller
{
    public function AssetAdd(){
        return view('backend.asset.asset_all');
    } //end 


    public function AssetAll(){
        $asset = Asset::all();
        return view('backend.asset.asset_add', compact('asset'));
    } // end

    public function AssetStore(Request $request){
        Asset::insert([
            'name' => $request->name,
            'date_purchase' => $request->date_purchase,
            'date_ultil' => $request->date_ultil,
            'price' => $request->price,
            'serial' => $request->serial,
            'catagory' => $request->catagory,
            'note' => $request->note,

            'created_by' =>Auth::user()->id,
            'created_at' =>Carbon::now(),
        ]);
        return redirect()->route('asset.all');
    }// end method

    public function AssetEdit($id){
        $asset = Asset::findOrFail($id); //show data in the field 
        return view('backend.asset.asset_edit',compact('asset'));
    
    } //end

    public function AssetUpdate(Request $request){
        $asset_id = $request->id;
    
        Asset::findOrFail($asset_id)->update([
            'name' => $request->name,
            'date_purchase' => $request->date_purchase,
            'date_ultil' => $request->date_ultil,
            'price' => $request->price,
            'serial' => $request->serial,
            'catagory' => $request->catagory,
            'note' => $request->note,
          
            'created_by' =>Auth::user()->id,
            'created_at' =>Carbon::now(),
        ]);
        return redirect()->route('asset.all');
    }// end method
    
    public function AssetDelete($id){
        Asset::findOrFail($id)->delete(); //show data in the field 
        return redirect()->back();
      
    } //end method 
}
