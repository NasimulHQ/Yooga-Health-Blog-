@extends('admin.layout.master')
@section('title')
Latest Yoga Articles
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Latest Yoga Articles
            <a href="{{ url('add-article')}}" class="btn btn-primary">Create</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="{{ url('articles') }}">article</a></li>
            {{-- {{ route('welcomes.index')}} --}}
            <li class="active">Latest Yoga Articles</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        @if (session('status'))
            <h6 class="alert alert-danger">{{session('status')}}</h6>
        @endif
        <!-- Default box -->
        <div class="box">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>SL#</th>
                        <th>Article Name</th>
                        <th>Article Details</th>
                        <th>Article Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($article as $yoga)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $yoga->ar_name }}</td>
                            <td>{{ $yoga->ar_details }}</td>
                            <td>
                                <img src="{{ asset('uploads/articles/'.$yoga->ar_image)}}" height="100px" width="100px" alt="image">
                            </td>
                            <td>
                                <a href="{{ url('edit-article/'.$yoga->id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ url('delete-article/'.$yoga->id) }}" class="btn btn-danger">Delete</a>
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