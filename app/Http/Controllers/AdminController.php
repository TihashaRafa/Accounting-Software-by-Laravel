<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\RedirectResponse;



class AdminController extends Controller
{
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');

    } // end method


    public function Profile(){
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile_view', compact('adminData'));

    } //end method 
    public function EditProfile(){

        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('admin.admin_profile_edit',compact('editData'));
    } // end method

    public function StoreProfile(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->username = $request->username;

        if($request->file('profile_image')){
            $file = $request->file('profile_image');
            $filename = date('YmdHi').$file->getClientOriginalName(); //237654367.jpg
            $file->move(public_path('upload/admin_images'), $filename); //data store path
            $data['Image']=  $filename; //database name , file name
       }
       
       $data->save();
       return redirect()->route('admin.profile');

    } // end method


    
}
