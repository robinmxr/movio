@extends('layouts.master')

@section('content')

    <div class="page-wrapper bg-default p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Add Theatre</h2>
                    <form method="POST" action="{{ route('hallowner.theatre.store',$hall_id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control form-control-sm mt-1" placeholder="">
                        </div>
                        <div class="form-group mt-2">
                            <label for="">Capacity</label>
                            <input type="number" name="capacity" class="form-control form-control-sm mt-1" placeholder="">
                        </div>


                        <div class="form-group mt-2">
                            <label for="">Regular Price</label>
                            <input type="number" name="reg_price" class="form-control form-control-sm mt-1" placeholder="">
                        </div>
                        <div class="form-group mt-2">
                            <label for="">Premium Price</label>
                            <input type="number" name="prem_price" class="form-control form-control-sm mt-1" placeholder="">
                        </div>

                        <div class="form-group mt-2">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control form-control-sm mt-1" placeholder="">
                        </div>
                        <div class="p-t-30">
                            <button type="submit" class="btn btn-lg btn-movie">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
