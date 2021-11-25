@extends('front-end.layout.master')
@section('title')
About Us
@endsection
@section('content')

@include('front-end.includes.page-header', ['pageName'=>'About Us'])
<!-- About Start -->
<x-yoga-welcome/>
<!-- About End -->


<!-- Team Start -->
<x-yoga-trainer/>
<!-- Team End -->
@endsection