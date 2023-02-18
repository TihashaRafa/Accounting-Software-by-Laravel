<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    public function GroupAll(){

        $group = Group::all();
        return view('backend.group.group_all', compact('group'));
    } // end method
    public function groupAdd(){
        return view('backend.group.group_add');
    } //end 

}
