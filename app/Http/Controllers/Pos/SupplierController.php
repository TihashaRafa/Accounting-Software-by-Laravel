<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\Owner;
use App\Models\Company;
use Auth;
use Illuminate\Support\Carbon;

class SupplierController extends Controller
{
    public function SupplierAll(){

        $suppliers = Supplier::select('suppliers.*','companies.*','owners.*')
               ->with(['suppliers', 'company', 'owner'])
               ->join('companies', 'companies.id', '=', 'suppliers.company_name')
               ->join('owners', 'owners.id', '=', 'suppliers.owner_name')
               ->get();

            $owner = Owner::all();
            $company = Company::all();
        // $suppliers = Supplier::all();
        // $suppliers = Supplier::latest()->get();

        return view('backend.supplier.supplier_all', compact('suppliers','owner','company'));
    } // end method

    public function SupplierAdd(){
        return view('backend.supplier.supplier_add');
    }

    public function SupplierStore(Request $request){
        Supplier::insert([
            'name' => $request->name,
            'code' => $request->code,
            'display_name' => $request->display_name,
            'company_name' => $request->company_name,
            'business_num' => $request->business_num,
            'mobile_no' => $request->mobile_no,
            'type' => $request->type,

            'address' => $request->address,
            'email' => $request->email,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'country' => $request->country,
            'currency' => $request->currency,
            'group' => $request->group,
            'owner_name' => $request->owner_name,
            'username' => $request->username,
            'password' => $request->password,
            'confirm_password' => $request->confirm_password,

        
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
            'code' => $request->code,
            'display_name' => $request->display_name,
            'company_name' => $request->company_name,
            'business_num' => $request->business_num,
            'mobile_no' => $request->mobile_no,
            'type' => $request->type,

            'address' => $request->address,
            'email' => $request->email,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'country' => $request->country,
            'currency' => $request->currency,
            'group' => $request->group,
            'owner_name' => $request->owner_name,
            'username' => $request->username,
            'password' => $request->password,
            'confirm_password' => $request->confirm_password,
            
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
   