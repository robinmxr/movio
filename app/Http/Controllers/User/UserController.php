<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
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
}
