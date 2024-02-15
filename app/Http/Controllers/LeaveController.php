<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\leaveStoreRequest;
use App\Models\UserLeave;

class LeaveController extends Controller
{


   public function index()
   {
    return view('Pages.ManageLeave.create');
   }




    public function  create(leaveStoreRequest $request)
    {
        dd($request->all());
        $request->validated();
        $data=[
            'title'=>$request->title,
            'type'=>$request->type,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'remarks'=>$request->remarks,
            'status'=>'pending',
        ];
        dd($data);

        $result=UserLeave::create($data);
        


      
    }



}
