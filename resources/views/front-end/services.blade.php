@extends('front-end.layout.master')
@section('title')
Service
@endsection
@section('content')
@include('front-end.includes.page-header', ['pageName'=>'Sevice'])
<!-- Service Start -->
<x-service-health/>
<!-- Service End -->
@endsection