@extends('layouts.master')

@section('content')
    <section class="breadcrumbs">
    </section><!-- End Breadcrumbs -->


    <div class="container rounded bg-white mb-5">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{ $user->name }}</span><span class="text-black-50">{{ $user->email }}</span><span> </span></div>
                {{--                <div class="alert alert-secondary"><h4 class="text">Phone: {{ $user->phone }}</h4></div>--}}
                <div class="alert alert-secondary"><h4 class="text">Email: {{ $user->email }}</h4></div>
            </div>
            <div class="col-md-8  border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h3 class="text-right">Profile</h3>
                    </div>
                    <div class="row mt-2">
                        <div class="alert alert-secondary"><h4 class="text">Name: <small>{{ $user->name }} </small></h4></div>
                        {{--                        <div class="alert alert-secondary"><h4 class="text">Gender: <small>{{ $user->gender }} </small></h4></div>--}}
                        {{--                        <div class="alert alert-secondary"><h4 class="text">Birth Day: <small>{{ $user->birthdate }} </small></h4></div>--}}
                        {{--                        <div class="alert alert-secondary"><h4 class="text">Area: <small>{{ $user->area }} </small></h4></div>--}}
                        {{--                        <div class="alert alert-secondary"><h4 class="text">Address: {{ $user->address }} </h4></div>--}}

                    </div>
                </div>
            </div>
            <div class="my-3 text-center">

                <a href="{{ route('user.profile.edit') }}"> <button class="btn btn-lg btn-user profile-button">Edit Profile</button></a>

            </div>
        </div>
    </div>

@endsection
