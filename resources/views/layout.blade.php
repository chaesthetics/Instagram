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
    @yield('content')
</body>
</html>