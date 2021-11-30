@extends('front-end.layout.master')
@section('title')
Contact Us
@endsection
@section('content')
@include('front-end.includes.page-header', ['pageName'=>'Contact'])


<!-- Contact Start -->
<div class="contact">
    <div class="container">
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>Get In Touch</p>
            <h2>For Any Query</h2>
        </div>
        @foreach ($anyquery as $query)
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-4 contact-item wow zoomIn" data-wow-delay="0.2s">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="contact-text">
                                <h2>Location</h2>
                                <p>{{ $query->location }}</p>
                            </div>
                        </div>
                        <div class="col-md-4 contact-item wow zoomIn" data-wow-delay="0.4s">
                            <i class="fa fa-phone-alt"></i>
                            <div class="contact-text">
                                <h2>Phone</h2>
                                <p>{{ $query->phone }}</p>
                            </div>
                        </div>
                        <div class="col-md-4 contact-item wow zoomIn" data-wow-delay="0.6s">
                            <i class="far fa-envelope"></i>  
                            <div class="contact-text">
                                <h2>Email</h2>
                                <p>{{ $query->email }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status')}}</h6>
            @endif
            <div class="contact-form">
                <div id="success"></div>
                <form method="post" action="{{ url('send-message')}}" enctype="multipart/form-data" name="sentMessage" id="contactForm" novalidate="novalidate">
                    @csrf
                    <div class="control-group">
                        <input type="text" class="form-control" name="name" placeholder="Your Name" required="required"
                            data-validation-required-message="Please enter your name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="email" class="form-control" name="email" placeholder="Your Email" required="required"
                            data-validation-required-message="Please enter your email" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" name="subject" placeholder="Subject" required="required"
                            data-validation-required-message="Please enter a subject" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control" name="message" placeholder="Message" required="required"
                            data-validation-required-message="Please enter your message"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <button class="btn" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection