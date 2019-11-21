@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>Gallery of worked MOPSes</h2>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('/img/busy_mops_0.jpg')}}" class="gallery_img">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/img/busy_mops_1.jpg')}}" class="gallery_img">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/img/busy_mops_2.jpg')}}" class="gallery_img">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/img/busy_mops_3.jpg')}}" class="gallery_img">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/img/busy_mops_4.jpg')}}" class="gallery_img">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/img/busy_mops_5.jpg')}}" class="gallery_img">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/img/busy_mops_6.jpg')}}" class="gallery_img">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>









    </div>

@endsection
