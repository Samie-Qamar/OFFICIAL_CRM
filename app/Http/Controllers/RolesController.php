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

    public function storeRoles(Request $request)
    {
        $input=$request->all();
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


    // Edit Roles // 

    public function editroles($id)
    {
        $getRoleById=Role::where('id',$id)->first();
        return view('Pages.AdminManagment.editRoles',compact('getRoleById'));

    }


    // updateRoles  // 
    public function updateRoles(Request $request)
    {
        $checkRoles=Role::where('id',$request->id)->first();
        if($checkRoles)
        {
            return redirect()->back()->with('message','Record Updated Succesfully');
        }
        else
        {
            return redirect()->back()->with('message','Record not Updated');
        }

    }

}
