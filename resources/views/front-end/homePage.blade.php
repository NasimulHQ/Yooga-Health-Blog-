@extends('front-end.layout.master')
@section('title')
Home Page
@endsection
@section('content')
<!-- Hero Start -->
<div class="hero">
    <div class="container-fluid">
        @foreach ($goodhealth as $practice)
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6">
                <div class="hero-text">
                    <h1>{{$practice->gh_title}}</h1>
                    <p>
                        {{$practice->gh_details}}
                    </p>
                    <div class="hero-btn">
                        <a class="btn" href="">Join Now</a>
                        <a class="btn" href="">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 d-none d-md-block">
                <div class="hero-image">
                    <img src="{{ url('uploads/goodhealths/' .$practice->gh_image)}}" alt="Hero Image">
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- Hero End -->


<!-- About Start -->
<x-yoga-welcome />
<!-- About End -->


<!-- Service Start -->
<x-service-health/>
<!-- Service End -->


{{--
<!-- Class Start -->
<div class="class">
    <div class="container">
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>Our Classes</p>
            <h2>Yoga Class Shedule</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <ul id="class-filter">
                    <li data-filter="*" class="filter-active">All Classes</li>
                    <li data-filter=".filter-1">Pilates Yoga</li>
                    <li data-filter=".filter-2">Hatha Yoga</li>
                    <li data-filter=".filter-3">Vinyasa yoga</li>
                </ul>
            </div>
        </div>
        <div class="row class-container">
            <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                <div class="class-wrap">
                    <div class="class-img">
                        <img src="/front-end/img/class-1.jpg" alt="Image">
                    </div>
                    <div class="class-text">
                        <div class="class-teacher">
                            <img src="/front-end/img/teacher-1.png" alt="Image">
                            <h3>Elise Moran</h3>
                            <a href="">+</a>
                        </div>
                        <h2>Pilates Yoga</h2>
                        <div class="class-meta">
                            <p><i class="far fa-calendar-alt"></i>Sun, Tue, Thu</p>
                            <p><i class="far fa-clock"></i>9:00 - 10:00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-2 wow fadeInUp" data-wow-delay="0.2s">
                <div class="class-wrap">
                    <div class="class-img">
                        <img src="/front-end/img/class-2.jpg" alt="Image">
                    </div>
                    <div class="class-text">
                        <div class="class-teacher">
                            <img src="/front-end/img/teacher-2.png" alt="Image">
                            <h3>Kate Glover</h3>
                            <a href="">+</a>
                        </div>
                        <h2>Iyengar Yoga</h2>
                        <div class="class-meta">
                            <p><i class="far fa-calendar-alt"></i>Sun, Tue, Thu</p>
                            <p><i class="far fa-clock"></i>9:00 - 10:00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="class-wrap">
                    <div class="class-img">
                        <img src="/front-end/img/class-3.jpg" alt="Image">
                    </div>
                    <div class="class-text">
                        <div class="class-teacher">
                            <img src="/front-end/img/teacher-3.png" alt="Image">
                            <h3>Elina Ekman</h3>
                            <a href="">+</a>
                        </div>
                        <h2>Ashtanga yoga</h2>
                        <div class="class-meta">
                            <p><i class="far fa-calendar-alt"></i>Sun, Tue, Thu</p>
                            <p><i class="far fa-clock"></i>9:00 - 10:00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-1 wow fadeInUp" data-wow-delay="0.6s">
                <div class="class-wrap">
                    <div class="class-img">
                        <img src="/front-end/img/class-4.jpg" alt="Image">
                    </div>
                    <div class="class-text">
                        <div class="class-teacher">
                            <img src="/front-end/img/teacher-4.png" alt="Image">
                            <h3>Lilly Fry</h3>
                            <a href="">+</a>
                        </div>
                        <h2>Hatha Yoga</h2>
                        <div class="class-meta">
                            <p><i class="far fa-calendar-alt"></i>Sun, Tue, Thu</p>
                            <p><i class="far fa-clock"></i>9:00 - 10:00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-2 wow fadeInUp" data-wow-delay="0.8s">
                <div class="class-wrap">
                    <div class="class-img">
                        <img src="/front-end/img/class-5.jpg" alt="Image">
                    </div>
                    <div class="class-text">
                        <div class="class-teacher">
                            <img src="/front-end/img/teacher-5.png" alt="Image">
                            <h3>Olivia Yates</h3>
                            <a href="">+</a>
                        </div>
                        <h2>Kundalini Yoga</h2>
                        <div class="class-meta">
                            <p><i class="far fa-calendar-alt"></i>Sun, Tue, Thu</p>
                            <p><i class="far fa-clock"></i>9:00 - 10:00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-3 wow fadeInUp" data-wow-delay="1s">
                <div class="class-wrap">
                    <div class="class-img">
                        <img src="/front-end/img/class-6.jpg" alt="Image">
                    </div>
                    <div class="class-text">
                        <div class="class-teacher">
                            <img src="/front-end/img/teacher-6.png" alt="Image">
                            <h3>Millie Harper</h3>
                            <a href="">+</a>
                        </div>
                        <h2>Vinyasa yoga</h2>
                        <div class="class-meta">
                            <p><i class="far fa-calendar-alt"></i>Sun, Tue, Thu</p>
                            <p><i class="far fa-clock"></i>9:00 - 10:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Class End --> --}}


<!-- Discount Start -->
<div class="discount wow zoomIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="section-header text-center">
            <p>Awesome Discount</p>
            <h2>Get <span>30%</span> Discount for all Classes</h2>
        </div>
        <div class="container discount-text">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur
                facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra
                quis sem. Curabitur non nisl nec nisi scelerisque maximus.
            </p>
            <a class="btn">Join Now</a>
        </div>
    </div>
</div>
<!-- Discount End -->


<!-- Price Start -->
{{-- <div class="price">
    <div class="container">
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>Yoga Package</p>
            <h2>Yoga Pricing Plan</h2>
        </div>
        <div class="row">
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.0s">
                <div class="price-item">
                    <div class="price-header">
                        <div class="price-title">
                            <h2>Basic</h2>
                        </div>
                        <div class="price-prices">
                            <h2><small>$</small>49<span>/ mo</span></h2>
                        </div>
                    </div>
                    <div class="price-body">
                        <div class="price-description">
                            <ul>
                                <li>Personal Trainer</li>
                                <li>Special Class</li>
                                <li>Free Tutorials</li>
                                <li>Group Training</li>
                            </ul>
                        </div>
                    </div>
                    <div class="price-footer">
                        <div class="price-action">
                            <a class="btn" href="">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="price-item featured-item">
                    <div class="price-header">
                        <div class="price-status">
                            <span>Popular</span>
                        </div>
                        <div class="price-title">
                            <h2>Standard</h2>
                        </div>
                        <div class="price-prices">
                            <h2><small>$</small>99<span>/ mo</span></h2>
                        </div>
                    </div>
                    <div class="price-body">
                        <div class="price-description">
                            <ul>
                                <li>Personal Trainer</li>
                                <li>Special Class</li>
                                <li>Free Tutorials</li>
                                <li>Group Training</li>
                            </ul>
                        </div>
                    </div>
                    <div class="price-footer">
                        <div class="price-action">
                            <a class="btn" href="">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="price-item">
                    <div class="price-header">
                        <div class="price-title">
                            <h2>Premium</h2>
                        </div>
                        <div class="price-prices">
                            <h2><small>$</small>149<span>/ mo</span></h2>
                        </div>
                    </div>
                    <div class="price-body">
                        <div class="price-description">
                            <ul>
                                <li>Personal Trainer</li>
                                <li>Special Class</li>
                                <li>Free Tutorials</li>
                                <li>Group Training</li>
                            </ul>
                        </div>
                    </div>
                    <div class="price-footer">
                        <div class="price-action">
                            <a class="btn" href="">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Price End -->


<!-- Testimonial Start -->
<div class="testimonial wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="section-header text-center">
            <p>Testimonial</p>
            <h2>Our Client Say!</h2>
        </div>
        <div class="owl-carousel testimonials-carousel">
            @foreach ($client as $say)
            <div class="testimonial-item">
                <div class="testimonial-img">
                    <img src="{{ url('uploads/clients/'.$say->cl_image)}}" alt="Image">
                </div>
                <div class="testimonial-text">
                    <p>
                        {{$say->cl_details}}
                    </p>
                    <h3>{{$say->cl_name}}</h3>
                    <h4>{{$say->cl_title}}</h4>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Team Start -->
<x-yoga-trainer/>
<!-- Team End -->


<!-- Blog Start -->
<x-blog-article/>
<!-- Blog End -->
@endsection