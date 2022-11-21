@extends('layouts.master')
@section('content')

        <div class="page-wrapper bg-default p-t-100 p-b-100 font-robo">
            <div class="wrapper wrapper--w960">
                <div class="card card-2 mt-10">

                    <div class="card-body">
        <h3 class="pt-4 pb-2">Select Dates</h3>
        <form method="post" action="{{ route('hallowner.booking.save',$booking->id) }}">
            @csrf
            <div class="row form-group">
                <label for="date" class="col-sm-1 col-form-label">Date</label>
                <div class="col-sm-4">
                    <div class="input-group date" id="datepicker">
                        <input type="text" class="form-control" name="date">
                        <span class="input-group-append">

                        </span>
                    </div>
                </div>
            </div>
            <button class="btn btn-lg btn-movie" type="submit">Confirm</button>
        </form>

                    </div>
                </div>
            </div>
        </div>



    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker(
                {
                    multidate:true
                }
            );
        });
    </script>

@endsection
