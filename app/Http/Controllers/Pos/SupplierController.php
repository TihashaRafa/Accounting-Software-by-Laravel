<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use Auth;
use Illuminate\Support\Carbon;

class SupplierController extends Controller
{
    public function SupplierAll(){
        $suppliers = Supplier::all();
        // $suppliers = Supplier::latest()->get();

        return view('backend.supplier.supplier_all', compact('suppliers'));
    } // end method

    public function SupplierAdd(){
        return view('backend.supplier.supplier_add');
    }

    public function SupplierStore(Request $request){
        Supplier::insert([
            'name' => $request->name,
            'mobile_no' => $request->mobile_no,
            'email' => $request->email,
            'address' => $request->address,
            'created_by' =>Auth::user()->id,
            'created_at' =>Carbon::now(),
        ]);
        return redirect()->route('supplier.all');
    }// end method


    public function SupplierEdit($id){

        $supplier = Supplier::findOrFail($id); //show data in the field 
        return view('backend.supplier.supplier_edit',compact('supplier'));

    } //end method 

    public function SupplierUpdate(Request $request){
        $supplier_id = $request->id;

        Supplier::findOrFail($supplier_id)->update([
            'name' => $request->name,
            'mobile_no' => $request->mobile_no,
            'email' => $request->email,
            'address' => $request->address,
            'updated_by' =>Auth::user()->id,
            'updated_at' =>Carbon::now(),
        ]);
        return redirect()->route('supplier.all');
    }// end method


    public function SupplieDelete($id){
        Supplier::findOrFail($id)->delete(); //show data in the field 
        return redirect()->back();
      
    }
}
   