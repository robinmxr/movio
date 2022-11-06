<?php

namespace App\Http\Controllers\HallOwner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HallOwnerController extends Controller
{
    public function index()
    {
        return view('hallowner.dashboard');
    }


    public function viewProfile()
    {
        $user = Auth::user();
        return view('hallowner.profile.view',compact('user'));
    }

    public function editProfile()
    {
        $user = Auth::user();
        return view('hallowner.profile.edit',compact('user'));
    }





}
