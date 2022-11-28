@extends('layouts.master')

@section('content')

<div class="page-wrapper bg-default p-t-100 p-b-100 font-robo">
    <div class="wrapper wrapper--w960">
        <div class="card card-2">
            <div class="card-heading">
            </div>
            <div class="card-body">
                <h2 class="title">Book a Show</h2>
                <form method="post" action="{{ route('hallowner.booking.store') }}">
                    @csrf
                        <div class="form-group mt-3">
                            <label for="">Movie - {{ $movie->name }}</label>
                        <input type="text" name="movie_id" class="form-selct form-select-lg" value="{{ $movie->id}}">
                        </div>
                      <div class="form-group mt-3">
                        <label for="">Select Hall</label>
                        <select class="form-select form-select-lg mb-3" id="hall" name="hall_id">
                            <option selected disabled>Select Hall</option>
                            @foreach ($halls as $hall)
                            <option value="{{ $hall->id }}">{{ $hall->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Select Slot</label>
                        <select class="form-select form-select-lg mb-3" id="showtime" name="showtime_id">
                            <option selected disabled>Select Slot</option>
                            @foreach ($times as $t)
                            <option value="{{ $t->id }}">{{ $t->slot }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Select Theatre</label>
                        <select class="form-select form-select-lg mb-3" id="theatre" name="theatre_id"></select>
                    </div>
                    <script type="text/javascript">

                        $(document).ready(function () {
                            $('#hall').on('change', function () {
                                var hallId = this.value;
                                $('#theatre').html('');
                                $.ajax({
                                    url: '{{ route('hallowner.theatres') }}?hall_id='+hallId,
                                    type: 'get',
                                    success: function (res) {
                                        $('#theatre').html('<option selected disabled>Select Theatre</option>');
                                        $.each(res, function (key, value) {
                                            $('#theatre').append('<option value="' + value
                                                .id + '">' + value.name + '</option>');
                                        });

                                    }
                                });
                            });

                        });

                        </script>





                    <div class="p-t-30">
                        <button type="submit" class="btn btn-lg btn-movie">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
