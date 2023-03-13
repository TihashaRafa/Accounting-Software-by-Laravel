<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Auth;
use Illuminate\Support\Carbon;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function companyAll(){

        $company = Company::all();
        return view('backend.company.company_all', compact('company'));
    } // end method

    public function companyAdd(){
        return view('backend.company.company_add');
    } //end 

        
public function CompanyStore(Request $request){

    $unique_file_name = 'avatar.jpg';
    if( $request ->hasFile('logo')){
        $logo = $request -> file('logo');
        $unique_file_name =md5(time().rand()) .'.'. $logo ->getClientOriginalExtension();
        $logo ->move(public_path('upload/Company_logo'), $unique_file_name );
    }
    Company::insert([
        'company_name' => $request->company_name,
        'code' => $request->code,
        'business_number' => $request->business_number,
        'url' => $request->url,
        'email' => $request->email,
        'phone' => $request->phone,
        'address' => $request->address,
        'city' => $request->city,
        'state' => $request->state,
        'zip' => $request->zip,
        'country' => $request->country,
        'logo' =>  $unique_file_name, 
       
        'created_by' =>Auth::user()->id,
        'created_at' =>Carbon::now(),

    ]);

        return redirect()->route('company.all');
    }// end method



public function CompanyEdit($id){

     $company = Company::findOrFail($id); 
     return view('backend.company.company_edit',compact('company'));

    } //end method 


    public function CompanyUpdate(Request $request){
        $comapny_id = $request->id;

        Company::findOrFail($comapny_id)->update([
            'company_name' => $request->company_name,
            'code' => $request->code,
            'business_number' => $request->business_number,
            'url' => $request->url,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'country' => $request->country,
          
            'created_by' =>Auth::user()->id,
            'created_at' =>Carbon::now(),
        ]);

        return redirect()->route('company.all');
     
    }// end method

    // delete all
    public function CompanyDelete($id){
        Company::findOrFail($id)->delete(); //show data in the field 
        return redirect()->back();

    } //end method

    // show all data 
    public function CompanyShow($id){
        $company = Company::find($id);
        return view('backend.company.Company_show', ['company' => $company]);
    }
}
