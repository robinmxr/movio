@extends('layouts.master')

@section('content')

<div class="page-wrapper bg-default p-t-100 p-b-100 font-robo">
    <div class="wrapper wrapper--w960">
        <div class="card card-2">
            <div class="card-heading"></div>
            <div class="card-body">
                <h2 class="title">Movie Form</h2>
                <form method="POST">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control form-control-sm mt-1" placeholder="">
                      </div>
                      <div class="form-group mt-2">
                        <label for="">Genre</label>
                        <input type="text" class="form-control form-control-sm mt-1" placeholder="">
                      </div>
                      <div class="form-group mt-2">
                        <label for="">Cast</label>
                        <input type="text" class="form-control form-control-sm mt-1" placeholder="">
                      </div>
                      <div class="form-group mt-2">
                        <label for="">Year</label>
                        <input type="text" class="form-control form-control-sm mt-1" placeholder="">
                      </div>
                      <div class="form-group mt-2">
                        <label for="">Trailer Link</label>
                        <input type="text" class="form-control form-control-sm mt-1" placeholder="">
                      </div>
                      <div class="form-group mt-2">
                        <label for="">Description</label>
                        <textarea class="form-control form-control-sm mt-1" placeholder="">
                        </textarea>
                      </div>
                      <div class="form-group mt-2">
                        <label for="">Poster</label>
                        <input type="file" class="form-control form-control-sm mt-1" placeholder="">
                      </div>
                    <div class="p-t-30">
                        <button class="btn btn-lg btn-movie">aone</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
