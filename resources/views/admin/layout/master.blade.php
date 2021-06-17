<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ env('APP_NAME')}} || @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    @include('admin.layout.styles')
</head>

<body class="hold-transition skin-blue sidebar-mini">

        @include('admin.layout.header')

        @include('admin.layout.sidebar')

        
            
            @yield('content')
            
        

        @include('admin.layout.footer')

    @include('admin.layout.scripts')
</body>

</html>