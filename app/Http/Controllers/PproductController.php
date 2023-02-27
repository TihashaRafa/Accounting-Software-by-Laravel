<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PProduct;
use Auth;
use Illuminate\Support\Carbon;

class PproductController extends Controller
{
    public function ProductAdd(){
        return view('backend.pproduct.pproduct_add');
    }
    public function ProductAll(){
        $products = PProduct::all();
        return view('backend.pproduct.pproduct_all', compact('products'));
    } //end 

    public function pproductStore(Request $request){
        PProduct::insert([
            'name' => $request->name,
            'cost_price' => $request->cost_price,
            'sale_price' => $request->sale_price,
            'item_number' => $request->item_number,
            'tax_code' => $request->tax_code,
            'description' => $request->description,
            'inventory' => $request->inventory,
            'unit' => $request->unit,
            'sku' => $request->sku,
            'width' => $request->width,
            'length' => $request->length,
            'height' => $request->height,
            'weight' => $request->weight,
            'height' => $request->height,
            'color' => $request->color,

            'created_by' =>Auth::user()->id,
            'created_at' =>Carbon::now(),
        ]);
        return redirect()->route('pproduct.all');
    }// end method

    public function PproductEdit($id){

        $products = PProduct::findOrFail($id); 
        return view('backend.pproduct.pproduct_edit',compact('products'));
   
       } //end method 


       public function pproductUpdate(Request $request){
        $products_id = $request->id;

        PProduct::findOrFail($products_id)->update([
            'name' => $request->name,
            'cost_price' => $request->cost_price,
            'sale_price' => $request->sale_price,
            'item_number' => $request->item_number,
            'tax_code' => $request->tax_code,
            'description' => $request->description,
            'inventory' => $request->inventory,
            'unit' => $request->unit,
            'sku' => $request->sku,
            'width' => $request->width,
            'length' => $request->length,
            'height' => $request->height,
            'weight' => $request->weight,
            'height' => $request->height,
            'color' => $request->color,
          
            'created_by' =>Auth::user()->id,
            'created_at' =>Carbon::now(),
        ]);
        return redirect()->route('pproduct.all');

    } //end 

    public function PproductDelete($id){
        PProduct::findOrFail($id)->delete(); //show data in the field 
        return redirect()->back();
      
    } //end method 


}
