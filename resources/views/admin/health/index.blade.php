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
            <a href="{{ route('yogahealth.create') }}">Create</a>
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
                <table class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>SL#</th>
                            <th>TITLE</th>
                            <th>DESCRIPTION</th>
                            <th>IMAGE</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($yogahealth as $health )
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$health->title}}</td>
                                <td>{{$health->description}}</td>
                                <td>{{$health->image}}</td>
                                <td>
                                    <div style="display:flex">
                                        <a class="btn btn-primary" href="{{ route('yogahealth.show', $health->id) }}">Show</a>
                                        <a class="btn btn-info" style="margin-left:5px" href="{{ route('yogahealth.edit', $health->id) }}">Edit</a>
                                        <form action="{{ route('yogahealth.destroy', $health->id) }}" method='post'>
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" style="margin-left:5px" type="submit">Delete</button>
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