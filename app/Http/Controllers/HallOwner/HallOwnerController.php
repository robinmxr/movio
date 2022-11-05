<?php

namespace App\Http\Controllers\HallOwner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HallOwnerController extends Controller
{
    public function index()
    {
        return view('hallowner.dashboard');
    }
}
