@extends('layouts.master')

@section('content')

<div class="page-wrapper bg-default p-t-100 p-b-100 font-robo">
    <div class="wrapper wrapper--w960">
        <div class="container rounded bg-white mb-5">
            <div class="row">
                <div class="col-md-6 border-right">
                    <div class="p-3 py-5">

                        <img class="img-fluid poster-image" src="{{ asset('img/movie/'.$movie->poster) }}" alt="">
                </div>
            </div>
                <div class="col-md-5  border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h3 class="text-right">Movie Details</h3>
                        </div>
                        <div class="row mt-2">
                            <div class="alert alert-secondary">
                                <h4 class="text p-2">Name: <small>{{ $movie->name }} </small></h4>
                                <h4 class="text p-2">Genre: <small>{{ $movie->genre }} </small></h4>
                                <h4 class="text p-2">Casts: <small>{{ $movie->casts }} </small></h4>
                                <h4 class="text p-2">Description: <small>{{ $movie->description }} </small></h4>
                            </div>
                            <div class="mt-2 mb-2">
                           <a href="{{ route('hallowner.booking.create',$movie->id) }}"> <button class="btn btn-lg btn-movie">Book Show</button> </a>
                            </div>
                            {{--                        <div class="alert alert-secondary"><h4 class="text">Gender: <small>{{ $movie->gender }} </small></h4></div>--}}
                            {{--                        <div class="alert alert-secondary"><h4 class="text">Birth Day: <small>{{ $movie->birthdate }} </small></h4></div>--}}
                            {{--                        <div class="alert alert-secondary"><h4 class="text">Area: <small>{{ $movie->area }} </small></h4></div>--}}
                            {{--                        <div class="alert alert-secondary"><h4 class="text">Address: {{ $movie->address }} </h4></div>--}}

                        </div>
                    </div>
                </div>
                <div class="my-3 text-center">

                    <iframe width="853" height="480" src="{{ $movie->trailer }}" title="Targaryen Family Dinner(Slow Part)-House Of The Dragon OST" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </div>
            </div>
        </div>
</div>
</div>
@endsection
