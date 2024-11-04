<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserHoliday;
use App\Http\Requests\HolidayStoreRequest;
use Carbon\Carbon;
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
       $totaldays=Carbon::parse($request->start_date)->diffInDays(Carbon::parse($request->end_date)) + 1;
        $request->validated();
        $input=$request->all();
        $input['days']=$totaldays;
       // dd($input);
        $result=UserHoliday::create($input);
        if($result)
        {return redirect()->route('manage.all.holiday')->with('message','Announcement create succesfully');}
        else{return redirect()->back()->with('message','Some Error Occur Please Try Again');}
    }




}
