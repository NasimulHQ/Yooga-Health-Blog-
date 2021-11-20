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
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td>Category name</td>
                            <td>{{$category->category_name}}</td>
                        </tr>
                        <tr>
                            <td>Category slug</td>
                            <td>{{$category->category_slug}}</td>
                        </tr>
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

@endpush

@push('js')

@endpush