<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> @yield('title', env('APP_NAME')) </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    @include('components.styles')
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar start -->
    @include('includes.partials.navbar')
    <!-- Navbar End -->


    <!-- Modal Search Start -->
    @include('includes.modals.search')
    <!-- Modal Search End -->


    @yield('content')


    @include('includes.partials.footer')


    <!-- JavaScript Libraries -->
    @include('components.scripts')
</body>

</html>
