@extends('admin.layout.master')
@section('title')
Any Query
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Any Query
            <a href="{{ url('anyquerys')}}" class="btn btn-info">Back</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="{{ url('anyquerys') }}">Any Query</a></li>
            {{-- {{ route('welcomes.index')}} --}}

        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
        @endif
        <!-- /.box -->
        <div class="box">
            <div class="box-body">
                <form action="{{ url('add-anyquery')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Icon:</label>
                        <input type="text" class="form-control" placeholder="Enter the Icon" name="q_icon">
                        @error('q_icon')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Location:</label>
                        <input type="text" class="form-control" placeholder="Enter the Location" name="location">
                        @error('location')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Phone:</label>
                        <input type="text" class="form-control" placeholder="Enter the phone Number" name="phone">
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="text" class="form-control" placeholder="Enter the Email" name="email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Save Query</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection