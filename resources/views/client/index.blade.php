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
            <a href="{{ url('add-client')}}" class="btn btn-primary">Create</a>
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
        <!-- Default box -->
        <div class="box">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Client Name</th>
                        <th>Client Title</th>
                        <th>Client Details</th>
                        <th>Client Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($client as $say)
                        <tr>
                            <td>{{ $say->id }}</td>
                            <td>{{ $say->cl_name }}</td>
                            <td>{{ $say->cl_title }}</td>
                            <td>{{ $say->cl_details }}</td>
                            <td>
                                <img src="{{ asset('uploads/clients/'.$say->cl_image) }}" height="70px" width="70px" alt="image">
                            </td>
                            <td>
                                <a href="{{ url('edit-client/'.$say->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ url('delete-client/'.$say->id)}}" class="btn btn-danger">Delete</a>
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