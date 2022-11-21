<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\ShowTime;
use Illuminate\Http\Request;

class ShowTimeController extends Controller
{
    public function createshowTime()
    {
        return view('admin.showtime.create');
    }

    public function storeshowTime(Request $request)
    {
        $show = new ShowTime;
        $show->slot = $request->slot;
        $show->time = $request->time;
        $show->save();
        return redirect()->route('admin.index');
    }

    public function showTime()
    {
        $time = ShowTime::all();
        return view('admin.showtime.show',compact('time'));
    }
}
