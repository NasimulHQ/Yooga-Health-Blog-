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
            <a href="{{ url('add-anyquery')}}" class="btn btn-primary">Create</a>
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
            <h6 class="alert alert-success">{{ session('status')}}</h6>
        @endif
        <!-- /.box -->
        <div class="box">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>SL#</th>
                        <th>Icon</th>
                        <th>Location</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($anyquery as $query)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $query->q_icon }}</td>
                            <td>{{ $query->location }}</td>
                            <td>{{ $query->phone }}</td>
                            <td>{{ $query->email }}</td>
                            <td>
                                <div style="display: flex">
                                    <a href="{{ url('edit-anyquery/'.$query->id)}}" class="btn btn-primary">Edit</a>
                                    <form action="{{ url('delete-anyquery/'.$query->id)}}" style="margin-left: 5px; " method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection