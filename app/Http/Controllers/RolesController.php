<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
class RolesController extends Controller
{
    // Show Create Roles Pages //

    public function showcreate()
    {
        $roles=Role::get();
         return view('Pages.AdminManagment.Roles',compact('roles'));

    }



    // Store Roles // 
    public function storeRoles(Request $request)
    {
        $input=$request->all();
    // dd($input);
        if($input)
        {
            Role::create($input);
            return redirect()->back()->with('message','Roles Created Succesfully');
        }
        else
        {
            return redirect()->back()->with('message','Some Error Ocur Please Try Again');
        }
        
    }

}
