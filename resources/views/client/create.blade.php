@extends('admin.layout.master')
@section('title')
Our Clients Say
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Our Clients Say
            <a href="{{ url('clients')}}" class="btn btn-info">Back</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="{{ url('clients') }}">Client</a></li>
            {{-- {{ route('welcomes.index')}} --}}
            <li class="active">Our Clients Say</li>
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
                <form action="{{ url('add-client') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Client Name:</label>
                        <input type="text" class="form-control" name="cl_name" placeholder="Enter Client Name">
                    </div>
                    <div class="form-group">
                        <label for="">Client Title:</label>
                        <input type="text" class="form-control" name="cl_title" placeholder="Enter Client Title">
                    </div>
                    <div class="form-group">
                        <label for="">Client Details:</label>
                        <input type="text" class="form-control" name="cl_details" placeholder="Enter Client Details">
                    </div>
                    <div class="form-group">
                        <label for="">Client Image:</label>
                        <input type="file" class="form-control" name="cl_image">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Save Client</button>
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