@extends('admin.layout.master')
@section('title')
Expert Yoga Trainer
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Expert Yoga Trainer
            <a href="{{ url('add-trainer') }}" class="btn btn-primary">Create</a>
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
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>SL#</th>
                        <th>Trainer Name</th>
                        <th>Trainer Title</th>
                        <th>Trainer Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trainer as $person )
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$person->tr_name}}</td>
                            <td>{{$person->tr_title}}</td>
                            <td>
                                <img src="{{ asset('uploads/trainers/'.$person->tr_image)}}" alt="image" height="70px" width="70px">
                            </td>
                            <td>
                                <a href="{{ url('edit-trainer/'.$person->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ url('delete-trainer/'.$person->id) }}" class="btn btn-danger">Delete</a>
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