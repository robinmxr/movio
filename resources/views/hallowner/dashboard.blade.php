@extends('layouts.master')
@section('content')
    <main id="main">

        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row g-5">

                    <div class="col-lg-8">

                        <article class="blog-details">



                            <h2 class="title">Welcome to the Hall Owner Dashboard</h2>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="mailto:{{ auth()->user()->email }}">{{ auth()->user()->email }}</a></li>

                                </ul>
                            </div><!-- End meta top -->

                            <div class="content">
                                <h1>Name : {{ auth()->user()->name }} </h1>




                            </div><!-- End post content -->

                            <div class="meta-bottom">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a href="#">Hall Owner</a></li>
                                </ul>


                            </div><!-- End meta bottom -->

                        </article><!-- End blog post -->
                        <!-- End post author -->



                    </div>

                    <div class="col-lg-4">

                        <div class="sidebar">

                            {{--                        <div class="sidebar-item search-form">--}}
                            {{--                            <h3 class="sidebar-title">Search</h3>--}}
                            {{--                            <form action="" class="mt-3">--}}
                            {{--                                <input type="text">--}}
                            {{--                                <button type="submit"><i class="bi bi-search"></i></button>--}}
                            {{--                            </form>--}}
                            {{--                        </div><!-- End sidebar search formn-->--}}

                            <div class="sidebar-item categories">
                                <h3 class="sidebar-title">Menu</h3>
                                <ul class="mt-3">
                                    <li><a href="#">Profile</a></li>
                                    <li><a href="#">My Hall </a></li>
                                    <li><a href="#">My Tickets</a></li>
                                    <li><a href="#">Revenue </a></li>

                                </ul>
                            </div><!-- End sidebar categories-->


                        </div><!-- End Blog Sidebar -->

                    </div>
                </div>

            </div>
        </section><!-- End Blog Details Section -->

    </main>
@endsection

