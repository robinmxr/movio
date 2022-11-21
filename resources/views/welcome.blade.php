@extends('layouts.master')

@section('content')


        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/poster1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>The Dark Knight</h5>
                        <p>Watch Now.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/poster1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Batman Movie</h5>
                        <p>Watch Now</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/poster1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Out In The World</h5>
                        <p>Watch Now.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>



    <!-- End Hero Section -->

    <main id="main">
        

        <!-- ======= About Us Section ======= -->

        <section id="recent-posts" class="recent-posts sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Now Showing</h2>
                    <p>Watch the movies in Our Halls</p>
                </div>

                <div class="row gy-4">

                    <div class="col-xl-4 col-md-6">
                        <article>

                            <div class="post-img">
                                <img src="{{ asset('img/poster1.jpg') }}" alt="" class="img-fluid">
                            </div>

                            <p class="post-category">Thriller</p>

                            <h2 class="title">
                                <a href="#">Batman Begins</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <div class="post-meta">
                                    <p class="post-author">Christian Bale,Morgan Freeman</p>

                                </div>
                            </div>

                        </article>
                    </div><!-- End post list item -->

                    <div class="col-xl-4 col-md-6">
                        <article>

                            <div class="post-img">
                                <img src="{{ asset('img/poster1.jpg') }}" alt="" class="img-fluid">
                            </div>

                            <p class="post-category">Crime</p>

                            <h2 class="title">
                                <a href="#">The Dark Knight</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <div class="post-meta">
                                    <p class="post-author">Allisa Mayer,Christian Bale</p>

                                </div>
                            </div>

                        </article>
                    </div><!-- End post list item -->

                    <div class="col-xl-4 col-md-6">
                        <article>

                            <div class="post-img">
                                <img src="{{ asset('img/poster1.jpg') }}" alt="" class="img-fluid">
                            </div>

                            <p class="post-category">Entertainment</p>

                            <h2 class="title">
                                <a href="#">Some Movie</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <div class="post-meta">
                                    <p class="post-author">Mark Dower</p>

                                </div>
                            </div>

                        </article>
                    </div><!-- End post list item -->

                </div><!-- End recent posts list -->

            </div>
        </section>

        <section id="pricing" class="pricing sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Pricing</h2>
                    <p>Choose according to your need</p>
                </div>

                <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">

                    <div class="col-lg-6">
                        <div class="pricing-item">
                            <h3>Basic</h3>
                            <div class="icon">
                                <i class="bi bi-box"></i>
                            </div>
                            <h4>From <sup>$</sup>5 </h4>
                            <ul>
                                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                            </ul>
                            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-6">
                        <div class="pricing-item">
                            <h3>Exclusive </h3>
                            <div class="icon">
                                <i class="bi bi-airplane"></i>
                            </div>

                            <h4>From <sup>$</sup>10</h4>
                            <ul>
                                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                                <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                                <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
                            </ul>
                            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
                        </div>
                    </div><!-- End Pricing Item -->


                </div>

            </div>
        </section>

    </main>


@endsection
