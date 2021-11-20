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
            Expert Yoga Trainer
            <a href="{{ url('trainers') }}" class="btn btn-info">Back</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ url('trainers') }}">Trainer</a></li>
            {{-- {{ route('welcomes.index')}} --}}
            <li class="active">Expert Yoga Trainer</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        @if (session('status'))
            <h6 class="alert alert-success">{{ session('status')}}</h6>
        @endif
        <!-- Default box -->
        <div class="box">
            <div class="box-body">
                <form action="{{ url('add-trainer') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Trainer Name</label>
                        <input type="text" class="form-control" name="tr_name">
                    </div>
                    <div class="form-group">
                        <label for="">Trainer Title</label>
                        <input type="text" class="form-control" name="tr_title">
                    </div>
                    <div class="form-group">
                        <label for="">Trainer Image</label>
                        <input type="file" class="form-control" name="tr_image">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Save Trainer</button>
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