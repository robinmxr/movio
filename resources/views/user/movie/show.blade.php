@extends('layouts.master')

@section('content')

<div class="page-wrapper bg-default p-t-100 p-b-100 font-robo">
    <div class="wrapper wrapper--w960">

        <div class="row">

            <div class="col-md-4 col-sm-6">
            <div class="card mb-30"><a class="card-img-tiles" href="#" data-abc="true">
            <div class="inner">
            <div class="main-img"><img src="{{ asset('img/poster1.jpg') }}" alt="Category"></div>

            </div></a>
            <div class="card-body text-center">
            <h2 class="card-title">Cineplex</h2>

            <div class="mt-3">
                <a href="{{ asset('img/poster1.jpg') }}"><button class="btn btn-lg btn-movie">View Details</button></a>
            </div>
            </div>
            </div>
            </div>


            </div>

    <div class="row">
        @foreach($movies as $movie)

<div class="col-md-12 col-sm-12">
<div class="card mb-30"><a class="card-img-tiles" href="#" data-abc="true">
<div class="inner">
<div class="main-img2"><img src="{{ asset('img/movie/'.$movie->image) }}" alt="Category"></div>

</div></a>
<div class="card-body text-center">
<h2 class="card-title">{{ $movie->name }}</h2>
{{-- <div class="card-footer"> --}}
       {{-- <p>Genre <h4>{{ $movie->genre }}</h4></p> --}}
       {{-- <p>Year <h4>{{ $movie->year }}</h4></p> --}}
{{-- </div> --}}
<div class="mt-3">
    <a href="#" ><button class="btn btn-lg btn-movie">View Details</button></a>
</div>
</div>
</div>
</div>

        @endforeach


</div>

</div>
</div>




@endsection
