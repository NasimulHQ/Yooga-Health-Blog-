@extends('admin.layout.master')
@section('title')
Yooga Practice for good health
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Yooga Practice for good health
            <a href="{{ url('add-goodhealth')}}" class="btn btn-primary">Create</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="{{ url('goodhealths') }}">Good Health</a></li>
            {{-- {{ route('welcomes.index')}} --}}
            {{-- <li class="active">Yooga Practice for good health</li> --}}
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
           <table class="table table-striped table-bordered">
               <thead>
                   <tr>
                       <th>SL#</th>
                       <th>GoodHealth Title</th>
                       <th>GoodHealth Details</th>
                       <th>GoodHealth Image</th>
                       <th>Action</th>
                   </tr>
               </thead>
               <tbody>
                   @foreach ($goodhealth as $practice)
                       <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $practice->gh_title }}</td>
                        <td>{{ $practice->gh_details }}</td>
                        <td>
                            <img src="{{ asset('uploads/goodhealths/'.$practice->gh_image)}}" height="100px" width="100px" alt="image">
                        </td>
                        <td>
                            <a href="{{ url('edit-goodhealth/'.$practice->id)}}" class="btn btn-info">Edit</a>
                            <a href="{{ url('delete-goodhealth/'.$practice->id) }}" class="btn btn-danger">Delete</a>
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