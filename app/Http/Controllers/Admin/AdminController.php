<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.dashboard');
    }



    public function viewProfile()
    {
        $user = Auth::user();
        return view('admin.profile.view',compact('user'));
    }

    public function editProfile()
    {
        $user = Auth::user();
        return view('admin.profile.edit',compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->save();
        return redirect()->route('admin.profile.view');

    }







}
