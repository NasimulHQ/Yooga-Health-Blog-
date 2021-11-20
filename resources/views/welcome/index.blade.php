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
            Welcome to Yooga
            <a href="{{ url('add-welcome')}}" class="btn btn-primary">Create</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ url('welcomes')}}">Welcome</a></li>
           {{-- {{ route('welcomes.index')}} --}}
            <li class="active">Welcome to yoga</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Welcome Title</th>
                            <th>Welcome Details</th>
                            <th>Welcome Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($welcome as $item)
                           <tr>
                               <td>{{ $item->id}}</td>
                               <td>{{ $item->wl_title}}</td>
                               <td>{{ $item->wl_detais}}</td>
                               <td>
                                   <img src="{{ asset('uploads/welcomes/'.$item->wl_image)}}" height="70px" width="70px" alt="image">
                               </td>
                               <td>
                                   <a href="{{ url('edit-welcome/'.$item->id) }}" class="btn btn-primary">Edit</a>
                               </td>
                               <td>
                                   {{-- delete way num 01 --}}
                                   {{-- (web.php route::get) --}}
                                   {{-- <a href="{{ url('delete-welcome/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}

                                   {{-- delete way num 02 --}}
                                   <form action="{{ url('delete-welcome/'.$item->id)}}" method="POST">
                                       @csrf
                                       @method('DELETE')
                                       <button type="submit" class="btn btn-danger">Delete</button>
                                   </form>
                               </td>
                           </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

