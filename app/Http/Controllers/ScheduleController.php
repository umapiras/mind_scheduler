<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

class ScheduleController extends Controller
{

    public function index(Schedule $schedule)
    {
        return view('schedules.schedule_index')->with(['schedules' => $schedule->get()]);
    }

    public function show(Schedule $schedule)
    {
        return view('schedules.schedule_show')->with(['schedule'=>$schedule]);
    }

    public function create()
    {
        return view('schedules.schedule_create');
    }
 
    public function store(Request $request, Schedule $schedule)
    {

        $input=$request['schedule'];
        $schedule->fill($input)->save();
        return redirect('/schedules/' . $schedule->id);
    }
}
