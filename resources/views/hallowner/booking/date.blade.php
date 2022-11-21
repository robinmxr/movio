@extends('layouts.master')

@section('content')

<div class="page-wrapper bg-default p-t-100 p-b-100 font-robo">
    <div class="wrapper wrapper--w960">
        <div class="card card-2">
<form method="post" action="{{ route('hallowner.booking.save',$booking->id) }}"> @csrf
            <div class="card-body">
            <h2 class="title">Choose The Dates</h2>

            <input type="date" class="form-control date" name="date[]">
            <input type="date" class="form-control date" name="date[]">
            <input type="date" class="form-control date" name="date[]">
            <input type="date" class="form-control date" name="date[]">
            <input type="date" class="form-control date" name="date[]">
            <input type="date" class="form-control date" name="date[]">
            <input type="date" class="form-control date" name="date[]">
            <input type="date" class="form-control date" name="date[]">
            <input type="date" class="form-control date" name="date[]">
            </div>
<div class="mb-3">
    <button type="submit" class="btn btn-lg btn-movie">Confirm</button>
</div>

</form>





            </div>
        </div>
    </div>


@endsection

