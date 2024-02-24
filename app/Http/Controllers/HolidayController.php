<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserHoliday;
use App\Http\Requests\HolidayStoreRequest;
class HolidayController extends Controller
{

    public function index()
    {
        $data=UserHoliday::get();
        return view('Pages.ManageAnoucement.index',compact('data'));
    }

    public function CreateHolidayPage()
    {
        return view('Pages.ManageAnoucement.create');
    }


    public function store(HolidayStoreRequest $request)
    {
        //dd($request->all());
        $request->validated();
        $input=$request->all();
        $result=UserHoliday::create($input);
        if($result)
        {return redirect()->route('manage.all.holiday')->with('message','Announcement create succesfully');}
        else{return redirect()->back()->with('message','Some Error Occur Please Try Again');}
    }




}
