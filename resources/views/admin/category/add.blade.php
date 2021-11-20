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
            <form method="POST" action="{{ route('categories.store')}}">
                @csrf 
                <div class="box-body">
                    <div class="form-group">
                        <label>
                            Category Name
                        </label>
                        <input type="text" name="category_name" value="{{old('category_name')}}" id="category-name"
                            class="form-control" placeholder="Enter the Category Name">
                        @error('category_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Category Slug</label>
                        <input type="text" name="category_slug" value="{{ old('category_slug')}}" id="category-slug"
                            class="form-control" placeholder="Enter the category slug">
                        @error('category_slug')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="box-footer">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
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