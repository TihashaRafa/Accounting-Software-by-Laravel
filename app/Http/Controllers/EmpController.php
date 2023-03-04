<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emp;
use Auth;
use Illuminate\Support\Carbon;


class EmpController extends Controller
{
    public function EmpAdd(){
        return view('backend.emp.emp_add');
    }
    public function EmpAll(){
        $emp = Emp::all();
        return view('backend.emp.emp_all', compact('emp'));
    } //end 

    
    public function EmpStore(Request $request){
        
        $unique_file_name = 'avatar.jpg';
        if( $request ->hasFile('image')){
            $image = $request -> file('image');
            $unique_file_name =md5(time().rand()) .'.'. $image ->getClientOriginalExtension();
            $image ->move(public_path('upload/emp_image'), $unique_file_name );
        }
    
        Emp::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'department' => $request->department,
            'job_title' => $request->job_title,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'country' => $request->country,
            'date' => $request->date,
            'pay' => $request->pay,
            'amount' => $request->amount,
            'summary' => $request->summary,
            'facebook' => $request->facebook,
            'linkedin' => $request->linkedin,
            'twitter' => $request->twitter,
            'image' => $unique_file_name,
 
     
            'created_by' =>Auth::user()->id,
            'created_at' =>Carbon::now(),
        ]);
        return redirect()->route('emp.all');
    }// end method



    public function EmpEdit($id){

        $emp = Emp::findOrFail($id); 
        return view('backend.emp.emp_edit',compact('emp'));
   
       } //end method 

       public function EmpUpdate(Request $request){
        $emp_id = $request->id;

        Emp::findOrFail($emp_id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'department' => $request->department,
            'job_title' => $request->job_title,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'country' => $request->country,
            'date' => $request->date,
            'pay' => $request->pay,
            'amount' => $request->amount,
            'summary' => $request->summary,
            'facebook' => $request->facebook,
            'linkedin' => $request->linkedin,
            'twitter' => $request->twitter,

          
            'created_by' =>Auth::user()->id,
            'created_at' =>Carbon::now(),
        ]);
        return redirect()->route('emp.all');

    } //end 
}
