@extends('layouts.master')

@section('content')

<div class="page-wrapper bg-default p-t-100 p-b-100 font-robo">
    <div class="wrapper wrapper--w960">
        <div class="container ">
            <div class="card">
                <div class="d-flex justify-content-between m-3">
                    <div class="d-flex flex-column">
                        <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Name: Into The Wild</h2>
                                    {{-- <h2>{{ $movie->name }}</h2> --}}
                                </div>
                                <div class="card-body">
                                    <h5 class="mt-2">Genre : <span class="fst-italic">gen</span></h5>
                                    <h5 class="mt-2">Cast : <span class="fst-italic">cast</span></h5>
                                    <h5 class="mt-2">Year : <span class="fst-italic">2000</span></h5>
                                    <h5 class="mt-2">Description: <span class="fst-italic">uasetuesa uaoe auoe aoue aoe ao aoue aoue aou aou aou a</span></h5>
                                </div>
                                {{-- <h5 class="mt-2">Genre : <span class="fst-italic">{{ $movie->genre }}</span></h5>
                                <h5 class="mt-2">Cast : <span class="fst-italic">{{ $movie->casts }}</span></h5>
                                <h5 class="mt-2">Year : <span class="fst-italic">{{ $movie->year }}</span></h5>
                                <h5 class="mt-2">Description: <span class="fst-italic">uasetuesa uaoe auoe aoue aoe ao aoue aoue aou aou aou a</span></h5> --}}
                            </div>
                        </div>
                    <div class="col-xl-6 text-center poster ">
                            <img class="poster-image" src="{{ asset('img/about.jpg') }}" />
                        {{-- <img class="poster" src="{{ asset('img/movie/'.$movie->poster) }}" /> --}}
                    </div>
                </div>
            </div>
                </div>
                <div class="text-center m-3 embed-responsive embed-responsive-16by9">
                    <iframe width="853" height="480" src="https://www.youtube.com/embed/XZG1FzyB8DI" title="Into the Wild (2007) Trailer #1 | Movieclips Classic Trailers" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
        </div>
    </div>
</div>
</div>
@endsection
