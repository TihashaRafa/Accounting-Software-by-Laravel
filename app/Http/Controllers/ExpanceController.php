<?php

namespace App\Http\Controllers;
use App\Models\Expance;
use App\Models\Staff;
use App\Models\Company;
use App\Models\ExpanceCatagory;
use App\Models\PaymentMethod;
use App\Models\Payer;
use Auth;
use Illuminate\Support\Carbon;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExpanceController extends Controller
{
    public function ExpanceAll(){
    $expance = Expance::select('expances.*', 'accounts.*', 'staff.*', 'expance_catagories.*','payment_methods.*','payers.*')
        ->with(['account', 'staff', 'company', 'catagory'])
        ->join('accounts', 'accounts.id', '=', 'expances.account_id')
        ->join('staff', 'staff.id', '=', 'expances.staff_id')
        ->join('companies', 'companies.id', '=', 'expances.company_name')
        ->join('expance_catagories', 'expance_catagories.id', '=', 'expances.Expance_catagory_name')
        ->join('payment_methods', 'payment_methods.id', '=', 'expances.payment_method_name')
        ->join('payers', 'payers.id', '=', 'expances.payer_name')
        ->get();


 $staff = Staff::all();
 $company = Company::all();
 $account = Account::all();
 $ExpanceCatagory = ExpanceCatagory::all();
 $PaymentMethod = PaymentMethod::all();
 $payer = Payer::all();
 return view('backend.expance.expance_all', compact('expance', 'staff', 'account','company', 'ExpanceCatagory', 'PaymentMethod','payer'));
        
    } // end method

    public function ExpanceStore(Request $request){
        Expance::insert([
            'account_id' => $request->account_id,
            'code' => $request->code,
            'date' => $request->date,
            'description' => $request->description,
            'attached' => $request->attached,
            'currency' => $request->currency,
            'amount' => $request->amount,
            'Expance_catagory_name' => $request->Expance_catagory_name,
            'tags' => $request->tags,
            'company_name' => $request->company_name,
            'payer_name' => $request->payer_name,
            'staff_id' => $request->staff_id,
            'payment_method_name' => $request->payment_method_name,
            'status' => $request->status,
            'ref' => $request->ref,

            'created_by' =>Auth::user()->id,
            'created_at' =>Carbon::now(),
    
        ]);  
  return redirect()->route('expance.all');


} //end method

public function ExpanceShow($id){
    $expance = Expance::find($id);
    return view('backend.expance.expance_all', ['expance' => $expance]);
}

}
