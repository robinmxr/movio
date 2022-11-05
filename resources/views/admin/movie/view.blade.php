@extends('layouts.master')

@section('content')

<div class="page-wrapper bg-default p-t-100 p-b-100 font-robo">
    <div class="wrapper wrapper--w960">
        <div class="container">
            <div class="card">
                <div class="d-flex justify-content-between m-3">
                    <div class="d-flex flex-column">
                        <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Name</h2>
                                </div>
                                <h5 class="mt-2">Genre : <span class="fst-italic">horror</span></h5>
                                <h5 class="mt-2">Cast : <span class="fst-italic">horror, oaue, uoa , oa</span></h5>
                                <h5 class="mt-2">Year : <span class="fst-italic"></span></h5>
                                <h5 class="mt-2">Description: <span class="fst-italic">uasetuesa uaoe auoe aoue aoe ao aoue aoue aou aou aou a</span></h5>
                            </div>  
                        </div> 
                    <div class="col-xl-6">
                        <img class="poster" src="{{ asset('img/blog/blog-1.jpg') }}" />
                    </div>
                </div>
            </div>
                </div>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLsyvDWwjkTqtOmqAiTzzfHspTAztB-udL" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
@endsection