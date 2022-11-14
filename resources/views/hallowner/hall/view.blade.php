@extends('layouts.master')

@section('content')

<div class="page-wrapper bg-default p-t-100 p-b-100 font-robo">
    <div class="wrapper wrapper--w960">
        <div class="container">
            <div class="card p-2">
                <div class="d-flex justify-content-between m-3">
                    <div class="d-flex flex-column">
                        <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    {{-- <h2>{{ $hall->name }}</h2> --}}
                                    <h2>Name</h2>
                                </div>
                                <div class="p-2">
                                {{-- <h5 class="mt-2">Address <span class="fst-italic">{{ $hall->address }}</span></h5> --}}
                                <h4 class="mt-3 text">Address: <small> 221b Baker Street </small></h4>
                                <h4 class="mt-2 etxt">Description: <span class="fst-italice"></span></h4>
                                {{-- <h5 class="mt-2">Description: <span class="fst-italic">{{ $hall->description }}</span></h5> --}}
                                </div>
                            </div>
                        </div>
                    <div class="col-xl-12 mt-3 ">
                        {{-- <img class="poster" src="{{ asset('img/hall/'.$hall->image) }}" /> --}}
                        <img class="poster" src="{{ asset('img/about.jpg') }}" />
                    </div>
                </div>
            </div>
                </div>

        </div>
    </div>
</div>
</div>
@endsection
