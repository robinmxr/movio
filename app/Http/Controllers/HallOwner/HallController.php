<?php

namespace App\Http\Controllers\HallOwner;

use App\Http\Controllers\Controller;
use App\Models\Hall;
use Illuminate\Http\Request;

class HallController extends Controller
{

    public function createHall()
    {
        return view('hallowner.hall.create');
    }

    public function showHall()
    {
        return view('hallowner.hall.show');
    }

    public function viewHall($id)
    {

        return view('hallowner.hall.view');
    }


    public function storeHall(Request $request)
    {
//        $request->validate([
//            'name'=>'required',
//            'genre'=>'required',
//            'year'=>'required',
//            'casts'=>'required',
//            'description'=>'required',
//            'trailer'=>'required',
//            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
//        ]);
//
//        $movie = new Movie;
//        $movie->name = $request->name;
//        $movie->genre = $request->genre;
//        $movie->year = $request->year;
//        $movie->runtime = $request->runtime;
//        $movie->casts = $request->casts;
//        $movie->description = $request->description;
//        $movie->trailer = $request->trailer;
//
//        $imageName = time().'.'.$request->image->extension();
//        $request->image->move(public_path('img/movie'), $imageName);
//
//        $movie->poster = $imageName;
//        $movie->save();
//
//        return redirect()->route('admin.movie.show');
    }
}
