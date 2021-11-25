@extends('front-end.layout.master')
@section('title')
blogs
@endsection
@section('content')
@include('front-end.includes.page-header', ['pageName'=>'Blog'])
    
    
    <!-- Blog Start -->
    <x-blog-article/>
    <!-- Blog End -->
@endsection