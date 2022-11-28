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
                                            {{-- <h2>{{ $theatre->name }}</h2> --}}
                                            <h2>Theatre Details</h2>
                                        </div>
                                        <div class="p-2">
                                            {{-- <h5 class="mt-2">Address <span class="fst-italic">{{ $theatre->address }}</span></h5> --}}
                                            <h4 class="mt-3 text">Name  : <small> {{ $theatre->name }} </small></h4>
                                            <h4 class="mt-2 etxt">Capacity  : <span class="fst-italic">{{ $theatre->capacity }}</span></h4>
                                            {{-- <h5 class="mt-2">Description: <span class="fst-italic">{{ $theatre->description }}</span></h5> --}}
                                        </div>
                                    </div>
                                </div>


                                
                                <div class="col-xl-12 mt-3">
                                    <h3>Regular Ticket : {{ $theatre->reg_price }}</h3>
                                    <h3>Premium Ticket : {{ $theatre->prem_price }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
