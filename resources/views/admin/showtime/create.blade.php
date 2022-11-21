@extends('layouts.master')

@section('content')

<div class="page-wrapper bg-default p-t-100 p-b-100 font-robo">
    <div class="wrapper wrapper--w960">
        <div class="card card-2">
            <div class="card-heading">
            </div>
            <div class="card-body">
                <h2 class="title">Add Movie</h2>
                <form method="POST" action="{{ route('admin.showtime.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="">Slot Name</label>
                        <input type="text" name="slot" class="form-control form-control-sm mt-1" placeholder="">
                      </div>
                      <div class="form-group mt-2">
                        <label for="">Time</label>
                        <input type="text" name="time" class="form-control form-control-sm mt-1" placeholder="">
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
