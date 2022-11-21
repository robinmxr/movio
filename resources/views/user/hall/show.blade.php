@extends('layouts.master')

@section('content')
{{--Todo --}}
    <div class="page-wrapper bg-default p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="row">
                @foreach($halls as $hall)

                    <div class="col-md-4 col-sm-6">
                        <div class="card mb-30"><a class="card-img-tiles" href="#" data-abc="true">
                                <div class="inner">
                                    <div class="main-img2"><img src="{{ asset('img/hall/'.$hall->image) }}" alt="Category"></div>

                                </div></a>
                            <div class="card-body text-center">
                                <h2 class="card-title">{{ $hall->name }}</h2>
                                <div class="mt-3">
                                    <a href="{{ route('user.hall.view',$hall->id) }}" ><button class="btn btn-lg btn-movie">View Details</button></a>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach


            </div>

        </div>
    </div>




@endsection
