@extends('admin.layout.master')
@section('title')
Yoga For Health
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Yoga For Health
            <a href="{{ url('yogahealths') }}" class="btn btn-info">Back</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="{{ url('yogahealths') }}">Yoga For Health</a></li>
            {{-- {{ route('welcomes.index')}} --}}
            <li class="active">Yoga For Health</li>
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
                <form action="{{ url('update-yogahealth/'.$yogahealth->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">YogaHealth Name:</label>
                        <input type="text" class="form-control" name="y_name" placeholder="Enter The YogaHealth Name"
                            value="{{ $yogahealth->y_name }}">
                        @error('y_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">YogaHealth Icon:</label>
                        <input type="text" value="{{ $yogahealth->icon }}" class="form-control" name="icon"
                            placeholder="Enter The YogaHealth Icon">
                        @error('icon')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
            </div>
            <div class="form-group">
                <label for="">YogaHealth Details:</label>
                <input type="text" class="form-control" name="y_details" placeholder="Enter Ther YogaHealth Details"
                    value="{{ $yogahealth->y_details }}">
                @error('y_details')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Update Yoga</button>
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