

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
            <a href="#about" class="btn-get-started">Book Ticket</a>
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
  <div class="container">
    <div class="headline mt-2 mb-2 text-center">
        <div  class="mt-4"><h2>Available Shows</h2></div>
    </div>
    <div class="row">
        @foreach ($movie->booking as $booking)
        <div class="col-lg-3">
            <div class="card bg-dark text-white">
                <div class="card-header">
                    {{ $booking->hall->name}} - {{ $booking->theatre->name }}
                </div>
                <div class="card-body">
                    <h2>{{ $booking->showtime->slot }}</h2>

                </div>
                <div class="card-footer">
                <button class="btn btn-movie">Buy Ticket</button>
                </div>
            </div>
        </div>

        @endforeach
    </div>
  </div>



  {{-- <div class="popular_courses">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 mt-3 text-center">
                <div class="main_title">
                    <h2 class="mb-3">Our Popular Courses</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel active_course owl-loaded owl-drag">
                    <div class="owl-stage-outer">

                        <div class="owl-stage" style="transform: translate3d(-1520px, 0px, 0px); transition: all 1.5s ease 0s; width: 3420px;">
                            @foreach ($movie->booking as $booking)

                        <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                                <div class="single_course">
                                    <div class="course_head">
                                      <img class="img-fluid" src="{{ asset('img/ticket.png') }}" alt="" />
                                    </div>
                                    <div class="course_content">
                                        <span class="tag mb-4 d-inline-block">{{ $booking->hall->name }}</span>
                                        <h4 class="mb-3">
                                            {{ $booking->movie->name }}
                                        </h4>
                                        <p>
                                          One make creepeth man bearing their one firmament won't fowl meat over sea
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function active_course() {
    if ($(".active_course").length) {
      $(".active_course").owlCarousel({
        loop: true,
        margin: 20,
        items: 3,
        nav: true,
        autoplay: 2500,
        smartSpeed: 1500,
        dots: false,
        responsiveClass: true,
        thumbs: true,
        thumbsPrerendered: true,
        navText: ["<img src='https://colorlib.com/preview/theme/edustage/img/prev.png'>", "<img src='https://colorlib.com/preview/theme/edustage/img/next.png'>"],
        responsive: {
          0: {
            items: 1,
            margin: 0
          },
          991: {
            items: 2,
            margin: 30
          },
          1200: {
            items: 3,
            margin: 30
          }
        }
      });
    }
  }
  active_course();
</script>
 --}}

@endsection
