<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\leaveStoreRequest;
use App\Models\UserLeave;

class LeaveController extends Controller
{
    public function index()
    {
        $data= UserLeave::get();
        return view('Pages.ManageLeave.index',compact('data'));
    }





   public function CreateLeavePage()
   {
    return view('Pages.ManageLeave.create');
   }




    public function  create(leaveStoreRequest $request)
    {
       // dd($request->all());
        $request->validated();
        $data=[
            'title'=>$request->title,
            'type'=>$request->type,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'remarks'=>$request->remarks,
            'status'=>'pending',
        ];
        $result=UserLeave::create($data);
        if($result)
        {
            return redirect()->route('manage.all.leave')->with('message','Leaves Added Succesfuly');
        }
        else
        {
            return redirect()->back()->with('message','Some Eror please Try agian!');
        }
        


      
    }



}
