@extends('layouts.master')

@section('content')

<section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row aos-init aos-animate" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>{{ $movie->name }}</h2>
          <p>{{ $movie->genre }} </p>
          <h5 class="">{{ $movie->casts }}</h5>
          <p>{{ $movie->description }} </p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="{{ route('hallowner.booking.create',$movie->id) }}" class="btn-get-started">Book Ticket</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="{{ asset('img/movie/'.$movie->poster) }}" class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="my-5 pb-3 text-center">
        <iframe class="trailer" width="853" height="480" src="{{ $movie->trailer }}" title="Targaryen Family Dinner(Slow Part)-House Of The Dragon OST" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>

  </section>


@endsection
