@extends('admin.layout.master')
@section('title')
Yooga Practice for good health
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Yooga Practice for good health
            <a href="{{ url('goodhealths')}}" class="btn btn-info">Back</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="{{ url('goodhealths') }}">Good Health</a></li>
            {{-- {{ route('welcomes.index')}} --}}
            {{-- <li class="active">Yooga Practice for good health</li> --}}
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        @if (session('status'))
        <h6 class="alert alert-success">{{ session('status') }}</h6>
        @endif
        <!-- Default box -->
        <div class="box">
            <div class="box-body">
                <form action="{{ url('update-goodhealth/'.$goodhealth->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">GoodHealth Title:</label>
                        <input type="text" class="form-control" name="gh_title" placeholder="Enter the Title" value="{{$goodhealth->gh_title}}">
                        @error('gh_title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">GoodHealth Details:</label>
                        <input type="text" class="form-control" name="gh_details" placeholder="Enter the details" value="{{$goodhealth->gh_details}}">
                        @error('gh_details')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">GoodHealth Image:</label>
                        <input type="file" class="form-control" name="gh_image">
                        <img src="{{ asset('uploads/goodhealths/'.$goodhealth->gh_image)}}" height="100px" width="100px" alt="image">
                        @error('gh_image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">update GoodHealth</button>
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