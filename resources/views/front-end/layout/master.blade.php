<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }} || @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    {{-- <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description"> --}}

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    @include('front-end.layout.styles')
</head>

<body>

    @include('front-end.layout.header')
     @yield('content')
     @include('front-end.layout.footer')
     @include('front-end.layout.scripts')
</body>

</html>