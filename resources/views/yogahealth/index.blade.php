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
            <a href="{{ url('add-yogahealth') }}" class="btn btn-primary">Create</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
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
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>SL#</th>
                        <th>YogaHealth Name</th>
                        <th>YogaHealth Details</th>
                        <th>YogaHealth Icon</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($yogahealth as $body)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$body->y_name}}</td>
                        <td>{{$body->y_details}}</td>
                        <td>{{$body->icon}}</td>
                        <td>
                            <a href="{{ url('edit-yogahealth/'.$body->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ url('delete-yogahealth/'.$body->id) }}" class="btn btn-danger">Delete</a>
                            {{-- {{ url('delete-trainer/'.$person->id) }} --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection