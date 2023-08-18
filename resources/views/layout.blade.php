<!DOCTYPE html>
<head>
<title>Instagram</title>
@vite('resources/css/app.css')
</head>
<body>
<div class="flex min-h-screen">
  
    <!-- Start Side Bar -->
    @include('sideBar')
    <!-- End Side Bar -->

    <!-- Start of Main content -->
    @yield('content')
    <!-- End of Main content -->

    <!-- Start of Right Side Bar -->
    
    <!-- End of Right Side Bar -->

</body>
</html>