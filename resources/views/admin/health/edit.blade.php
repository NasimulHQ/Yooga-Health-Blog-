@extends('admin.layout.master')
@section('title')
Health listing
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Yoga Health
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('yogahealth.index') }}">Yoga Health</a></li>
            <li class="active">Yoga health list</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <form role="form" method="post" enctype="multipart/form-data" action="">
                {{-- {{ route('yogahealth.update', $health->id)}} --}}
                {{-- Error here: Missing required parameter for [Route: yogahealth.update] --}}


                @csrf
                @method('put')
                <div class="box-body">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" value="{{ $health->title }}" class="form-control" id="health-title" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" name="description" id="health-description" value="{{ $health->description }}" style="height: 100px" class="form-control" placeholder="Enter Description">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" id="health-image" class="form-control" placeholder="Image">
                        <img src="/image/"{{ $health->image }} width="300px" >
                    </div>
                    
                </div>
                <!-- /.box-body -->
            
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection