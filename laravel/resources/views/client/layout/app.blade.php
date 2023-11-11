
<!doctype html>
<html lang="en">

<head>
    @include('client.layout.head')
</head>

<body>
    <!-- Start Header/Navigation -->
    @include('client.layout.nav')
    <!-- End Header/Navigation -->

    <!-- Start Hero Section -->
    @yield('content')
    <!-- End Blog Section -->
    <!-- Start Footer Section -->
    @include('client.layout.footer')
    <!-- End Footer Section -->

    @include('client.layout.script')
</body>

</html>
