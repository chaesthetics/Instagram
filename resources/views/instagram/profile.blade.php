<html>
<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>User Profile</title>
</head>
<body>
     <h1>{{ Auth::user()->name }} Yowww</h1>
</body>
</html>