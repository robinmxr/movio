@extends('layouts.master')

@section('content')

<div class="page-wrapper bg-default p-t-100 p-b-100 font-robo">
    <div class="wrapper wrapper--w960">
        <div class="card card-2">
            <div class="card-heading"></div>
            <div class="card-body">
                <h2 class="title">Add Movie</h2>
                <form method="POST" action="{{ route('admin.movie.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control form-control-sm mt-1" placeholder="">
                      </div>
                      <div class="form-group mt-2">
                        <label for="">Genre</label>
                        <input type="text" name="genre" class="form-control form-control-sm mt-1" placeholder="">
                      </div>
                      <div class="form-group mt-2">
                        <label for="">Casts</label>
                        <input type="text" name="casts" class="form-control form-control-sm mt-1" placeholder="">
                      </div>
                      <div class="form-group mt-2">
                        <label for="">Year</label>
                        <input type="text" name="year" class="form-control form-control-sm mt-1" placeholder="">
                      </div>
                      <div class="form-group mt-2">
                        <label for="">Runtime</label>
                        <input type="text" name="runtime" class="form-control form-control-sm mt-1" placeholder="">
                      </div>
                      <div class="form-group mt-2">
                        <label for="">Trailer Link (YouTube)</label>
                        <input type="text" name="trailer" class="form-control form-control-sm mt-1" placeholder="">
                      </div>
                    <div class="form-group mt-2">
                        <label for="">Description</label>
                        <input type="text" name="description" class="form-control form-control-sm mt-1" placeholder="">
                    </div>

                      <div class="form-group mt-2">
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control form-control-sm mt-1" placeholder="">
                      </div>
                    <div class="p-t-30">
                        <button type="submit" class="btn btn-lg btn-movie">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
