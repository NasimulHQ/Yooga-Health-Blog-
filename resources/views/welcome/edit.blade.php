@extends('admin.layout.master')
@section('title')
Welcome to yooga
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Welcome to Yooga edit 
            <a href="{{ url('welcomes')}}" class="btn btn-warning">Back</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ url('welcomes')}}">Welcome</a></li>
            <li class="active">Welcome to yoga</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        @if( session('status'))
        <h6 class="alert alert-success">{{ session('status')}}</h6>
        @endif
        <!-- Default box -->
        <div class="box">
            <div class="box-body">
                <form action="{{ url('update-welcome/'.$welcome->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group mb-3">
                        <label for="">Welcome title</label>
                        <input type="text" class="form-control" value="{{ $welcome->wl_title }}" name="wl_title">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Welcome Details</label>
                        <input type="text" class="form-control" value="{{ $welcome->wl_detais }}" name="wl_detais">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Welcome Image</label>
                        <input type="file" class="form-control" name="wl_image">
                        <img src="{{ asset('uploads/welcomes/'.$welcome->wl_image)}}" height="70px" width="70px" alt="image">
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-success">Update Welcome</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection