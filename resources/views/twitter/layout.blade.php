<!DOCTYPE html>
<head>
<title>Instagram</title>
@vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
<div class="flex min-h-screen">
  
    <!-- Start Side Bar -->
    @include('twitter/sideBar')
    <!-- End Side Bar -->

    <!-- Start of Main content -->
    @yield('content')
    <!-- End of Main content -->
</body>
</html>