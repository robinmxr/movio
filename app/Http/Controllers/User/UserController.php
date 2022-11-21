<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Hall;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }

    public function viewProfile()
    {
        $user = Auth::user();
        return view('user.profile.view',compact('user'));
    }

    public function editProfile()
    {
        $user = Auth::user();
        return view('user.profile.edit',compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->save();
        return redirect()->route('user.profile.view');

    }

    public function showMovie()
    {
        $movies = Movie::all();
        return view('user.movie.show',compact('movies'));
    }

    public function viewMovie($id)
    {
        $movie = Movie::find($id);
        return view('user.movie.view',compact('movie'));
    }

    public function showHall()
    {
        $halls = Hall::lazy();
        return view('user.hall.show',compact('halls'));
    }

    public function viewHall($id)
    {
        $hall = Hall::find($id);
        return view('user.hall.view',compact('hall'));
    }


}
