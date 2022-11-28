<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function createMovie()
    {
        return view('admin.movie.create');
    }

    public function showMovie()
    {
        $movies = Movie::all();
        return view('admin.movie.show',compact('movies'));
    }

    public function viewMovie($id)
    {
        $movie = Movie::find($id);
        return view('admin.movie.view',compact('movie'));
    }

    public function editMovie($id)
    {
        $movie = Movie::find($id);
        return view('admin.movie.edit',compact('movie'));
    }


    public function storeMovie(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'genre'=>'required',
            'year'=>'required',
            'casts'=>'required',
            'description'=>'required',
            'trailer'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);

        $movie = new Movie;
        $movie->name = $request->name;
        $movie->genre = $request->genre;
        $movie->year = $request->year;
        $movie->runtime = $request->runtime;
        $movie->casts = $request->casts;
        $movie->description = $request->description;
        $movie->trailer = $request->trailer;

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('img/movie'), $imageName);

        $movie->poster = $imageName;
        $movie->save();

        return redirect()->route('admin.movie.show');
    }

    public function updateMovie(Request $request,$id)
    {
        $movie = Movie::find($id);
        $movie->update($request->all());
        return redirect()->route('admin.movie.view',$id);
    }
}
