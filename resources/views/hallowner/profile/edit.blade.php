@extends('layouts.master')

@section('content')
    <section class="breadcrumbs">
    </section><!-- End Breadcrumbs -->


    <div class="container rounded bg-white mb-5 p-3">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"></div>

                <div class="alert alert-secondary">
                    <h4 class="text p-2">Name: {{ $user->name }}</h4>
                    <h4 class="text p-2">Email: {{ $user->email }}</h4>
                </div>
            </div>
            <div class="col-md-8  border-right">
                <div class="container mt-5">
                    <form action="{{ route('hallowner.profile.update') }}" method="post">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        @csrf
                        <div class="row mb-4">

                            <div class="form-outline">
                                <input name="name" type="text" id="form6Example1" class="form-control" />
                                <label class="form-label" for="form6Example1">First name</label>
                            </div>



                            {{--                <!-- Text input -->--}}
                            {{--                <div class="form-outline mb-4">--}}
                            {{--                  <input type="text" id="form6Example3" class="form-control" />--}}
                            {{--                  <label class="form-label" for="form6Example3">Company name</label>--}}
                            {{--                </div>--}}

                            {{--                <!-- Text input -->--}}
                            {{--                <div class="form-outline mb-4">--}}
                            {{--                  <input type="text" id="form6Example4" class="form-control" />--}}
                            {{--                  <label class="form-label" for="form6Example4">Address</label>--}}
                            {{--                </div>--}}

                            {{--                <!-- Email input -->--}}
                            {{--                <div class="form-outline mb-4">--}}
                            {{--                  <input type="email" id="form6Example5" class="form-control" />--}}
                            {{--                  <label class="form-label" for="form6Example5">Email</label>--}}
                            {{--                </div>--}}

                            {{--                <!-- Number input -->--}}
                            {{--                <div class="form-outline mb-4">--}}
                            {{--                  <input type="number" id="form6Example6" class="form-control" />--}}
                            {{--                  <label class="form-label" for="form6Example6">Phone</label>--}}
                            {{--                </div>--}}

                            {{--                <!-- Message input -->--}}
                            {{--                <div class="form-outline mb-4">--}}
                            {{--                  <textarea class="form-control" id="form6Example7" rows="4"></textarea>--}}
                            {{--                  <label class="form-label" for="form6Example7">Additional information</label>--}}
                                           </div>
                            <button type="submit" class="btn btn-lg btn-user profile-button">Edit Profile</button>
                    </form>
                </div>
            </div>

        </div>
    </div>


@endsection


