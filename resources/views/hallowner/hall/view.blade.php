@extends('layouts.master')

@section('content')

<div class="page-wrapper bg-default p-t-100 p-b-100 font-robo">
    <div class="wrapper wrapper--w960">
        <div class="container">
            <div class="card">
                <div class="d-flex justify-content-between m-3">
                    <div class="d-flex flex-column">
                        <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h2>{{ $hall->name }}</h2>
                                </div>
                                <h5 class="mt-2">Address <span class="fst-italic">{{ $hall->address }}</span></h5>

                                <h5 class="mt-2">Description: <span class="fst-italic">{{ $hall->description }}</span></h5>
                            </div>
                        </div>
                    <div class="col-xl-6">
                        <img class="poster" src="{{ asset('img/hall/'.$hall->image) }}" />
                    </div>
                </div>
            </div>
                </div>

        </div>
    </div>
</div>
</div>
@endsection
