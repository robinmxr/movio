<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Movie;

class MovieController extends Controller
{
    public function createMovie()
    {
        return view('admin.movie.store');
    }

    public function showMovie()
    {
        return view('admin.movie.show');
    }

    public function viewMovie($id)
    {
        return view('admin.movie.view');
    }
}
