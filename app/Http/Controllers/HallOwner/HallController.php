<?php

namespace App\Http\Controllers\HallOwner;

use App\Http\Controllers\Controller;
use App\Models\Hall;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HallController extends Controller
{

    public function createHall()
    {
        return view('hallowner.hall.create');
    }

    public function showHall()
    {
        $halls = Hall::where('owner_id',Auth::user()->id)->get();
        return view('hallowner.hall.show',compact('halls'));
    }

    public function viewHall($id)
    {
        $hall = Hall::find($id);
        return view('hallowner.hall.view',compact('hall'));
    }


    public function storeHall(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'description'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);

       $hall = new Hall;
       $hall->name = $request->name;
       $hall->address = $request->address;
       $hall->description = $request->description;
       $hall->owner_id = Auth::user()->id;

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('img/hall'), $imageName);

        $hall->image = $imageName;
        $hall->save();

        return redirect()->route('hallowner.hall.show');
    }
}
