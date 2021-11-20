@extends('admin.layout.master')
@section('title')
Health listing
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Yoga Health
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('yogahealth.index') }}">Yoga Health</a></li>
            <li class="active">Yoga health list</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-body">
                <table class="">
                    <tbody>
                        <tr>
                            <td>Title</td>
                            <td>{{ $health->title}}</td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>{{ $health->description}}</td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td>{{ $health->image}}</td>
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