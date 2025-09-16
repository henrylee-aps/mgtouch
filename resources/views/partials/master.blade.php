<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Magic Touch - Small Business ERP" />
    <meta name="keywords" content="small business, ERP, integrated solution" />
    <meta name="author" content="Magic Touch" />

    <!-- Site Title -->
    <title>Magic Touch - Small Business ERP</title>

    <!-- Site favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}">

    <!-- include head css -->
    @include('partials.head-css')
    @yield('css')
    @include('partials.header')

<body>
    @yield('content')

    @include('partials.vendor-scripts')
    @include('partials.footer')
    @yield('scripts')

</body>

</html>
