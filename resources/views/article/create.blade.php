@extends('admin.layout.master')
@section('title')
Latest Yoga Articles
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Latest Yoga Articles
            <a href="{{ url('articles')}}" class="btn btn-primary">Back</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="{{ url('articles') }}">article</a></li>
            {{-- {{ route('welcomes.index')}} --}}
            <li class="active">Latest Yoga Articles</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        @if (session('status'))
            <h6 class="alert alert-success">{{session('status')}}</h6>
        @endif
        <!-- Default box -->
        <div class="box">
            <div class="box-body">
                <form action="{{ url('add-article')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Article Name:</label>
                        <input type="text" class="form-control" name="ar_name" placeholder="Enter the Article name">
                    </div>
                    <div class="form-group">
                        <label for="">Article Details:</label>
                        <input type="text" class="form-control" name="ar_details" placeholder="Enter the Article details">
                    </div>
                    <div class="form-group">
                        <label for="">Article Image:</label>
                        <input type="file" class="form-control" name="ar_image">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Save Article</button>
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