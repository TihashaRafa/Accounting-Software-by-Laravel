<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deposite;
use App\Models\Staff;
use App\Models\Account;
use App\Models\Company;
use App\Models\catagory;
use App\Models\PaymentMethod;
use App\Models\Payer;
;
use Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


class DepositeController extends Controller
{
    public function DepositeAll()
    {
        // $deposite = DB::table('deposites')
        //     ->join('accounts', 'accounts.id', '=', 'deposites.account_id')
        //     ->join('staff', 'staff.id', '=', 'deposites.staff_id')
        //     ->get();

        // $staff = DB::table('deposites')
        // ->join('staff', 'staff.id', '=', 'deposites.staff_id')
        // ->get();
        
        $deposite = Deposite::select('deposites.*', 'accounts.*', 'staff.*', 'catagories.*','payment_methods.*','payers.*')
               ->with(['account', 'staff', 'company', 'catagory'])
               ->join('accounts', 'accounts.id', '=', 'deposites.account_id')
               ->join('staff', 'staff.id', '=', 'deposites.staff_id')
               ->join('companies', 'companies.id', '=', 'deposites.company_name')
               ->join('catagories', 'catagories.id', '=', 'deposites.catagory_name')
               ->join('payment_methods', 'payment_methods.id', '=', 'deposites.payment_method_name')
               ->join('payers', 'payers.id', '=', 'deposites.payer_name')
               ->get();

   
        $staff = Staff::all();
        $company = Company::all();
        $account = Account::all();
        $catagory = catagory::all();
        $PaymentMethod = PaymentMethod::all();
        $payer = Payer::all();
        return view('backend.deposite.deposite_all', compact('deposite', 'staff', 'account','company', 'catagory', 'PaymentMethod','payer'));
    } // end method


    public function DpositeStore(Request $request)
    {
        Deposite::insert([
            'account_id' => $request->account_id,
            'code' => $request->code,
            'date' => $request->date,
            'description' => $request->description,
            'attached' => $request->attached,
            'currency' => $request->currency,
            'amount' => $request->amount,
            'catagory_name' => $request->catagory_name,
            'tags' => $request->tags,
            'company_name' => $request->company_name,
            'payer_name' => $request->payer_name,
            'staff_id' => $request->staff_id,
            'payment_method_name' => $request->payment_method_name,
            'status' => $request->status,

            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),

        ]);
        return redirect()->route('deposite.all');
    } //end method

    public function DpositeShow($id)
    {
        $deposite = Deposite::find($id);
        return view('backend.deposite.deposite_all', ['deposite' => $deposite]);
    }
}
