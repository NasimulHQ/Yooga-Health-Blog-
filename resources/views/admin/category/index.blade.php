@extends('admin.layout.master')
@section('title')
Category List 
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           Category List 
           <a href="{{ route('categories.create')}}">Create</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('categories.index')}}">Category</a></li>
            <li class="active">Category list</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
           <div class="box-body">
               <table id="jq-datatable" class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>SL#</th>
                            <th>CATEGORY NAME</th>
                            <th>CATEGORY SLUG</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $categories as $category )
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$category->category_name}}</td>
                                <td>{{$category->category_slug}}</td>
                                <td>
                                    <div style="display: flex">
                                        <a style="margin-right: 5px" class="btn btn-info" href="{{ route('categories.show',$category->id)}}">Show</a>
                                        <a style="margin-right: 5px" class="btn btn-primary" href="{{ route('categories.edit',$category->id)}}">Edit</a>
                                        <form action="{{ route('categories.destroy',$category->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </div>
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

@push('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endpush

@push('js')
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#jq-datatable').DataTable();
        });
    </script>
@endpush
