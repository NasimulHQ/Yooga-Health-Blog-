@extends('front-end.layout.master')
@section('title')
About Us
@endsection
@section('content')

@include('front-end.includes.page-header', ['pageName'=>'About Us'])
<!-- About Start -->
<x-yoga-welcome />
<!-- About End -->


<!-- Team Start -->
<div class="team">
    <div class="container">
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>Yoga Trainer</p>
            <h2>Expert Yoga Trainer</h2>
        </div>
        <div class="row">
            @foreach ($trainer as $person)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{url('uploads/trainers/'.$person->tr_image)}}" alt="Image">
                        <div class="team-social">
                            @if($person->twitter)
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            @endif
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-text">
                        <h2>{{$person->tr_name}}</h2>
                        <p>{{$person->tr_title}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="/front-end/img/team-2.jpg" alt="Image">
                        <div class="team-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-text">
                        <h2>Lilly Fry</h2>
                        <p>Yoga Teacher</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="/front-end/img/team-3.jpg" alt="Image">
                        <div class="team-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-text">
                        <h2>Elise Moran</h2>
                        <p>Yoga Teacher</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="/front-end/img/team-4.jpg" alt="Image">
                        <div class="team-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-text">
                        <h2>Kate Glover</h2>
                        <p>Yoga Teacher</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- Team End -->
@endsection