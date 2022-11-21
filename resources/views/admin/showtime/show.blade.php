@extends('layouts.master')

@section('content')

<div class="page-wrapper bg-default p-t-100 p-b-100 font-robo">
    <div class="wrapper wrapper--w960">


    <div class="row">
        @foreach($time as $t)

<div class="col-md-4 col-sm-6">
<div class="card mb-30"><a class="card-img-tiles" href="#" data-abc="true">
<div class="inner">
{{-- <div class="main-img"><img src="{{ asset('img/movie/1667744345.jpg') }}" alt="Category"></div> --}}
</div></a>
<div class="card-body text-center">
<h2 class="card-title">{{ $t->slot }}</h2>
<div class="card-footer">

       <p>Time <h4>{{ $t->time }}</h4></p>
</div>
{{--        <p>Year <h4>{{ $movie->year }}</h4></p>--}}
{{--</div>--}}

</div>
</div>
</div>
        @endforeach

    <a href="{{ route('admin.showtime.create') }}"><button class="btn btn-lg btn-movie">Add Time Slot</button></a>

</div>
</div>
</div>


@endsection
