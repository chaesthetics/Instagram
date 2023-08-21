
<html>
<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Signup</title>
</head>
<body>
    <div class="grid grid-cols-1 sm:grid-cols-2 h-screen w-full items-center">
        <div class="hidden sm:block relative">
          <img class="w-full h-full object-cover brightness-50" src="{{ asset('img/bg.png')}}">  
          <h1 class="absolute text-4xl text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">Capture the moment.</h1>
        </div>
        <div class="flex flex-col justify-center">  
            <div class="card max-w-[500px] w-full h-full max-auto mr-auto ml-auto">     
                <span class="text-sm font-semibold">Start for free</span>
                    <h2 class="text-xl font-semibold text-yellow-600">
                        Create an account
                    </h2>        
                <form action="{{ url('signUpPost') }}" method="post">
                {!! csrf_field() !!}
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Username</label>
                    <input type="text" id="username" name="username" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500 dark:shadow-sm-light" 
                        placeholder="aurieljames11"
                    required>
                </div>
                <div class="mb-6 mt-10">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Fullname</label>
                    <input type="text" id="fullname" name="fullname" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500 dark:shadow-sm-light" placeholder="Auriel James Fernandez" required>
                </div>
                <div class="mb-6">
                    <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Password</label>
                    <input type="password" id="password" name="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500 dark:shadow-sm-light" required>
                </div>
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                    <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-yellow-600 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                    </div>
                    <label for="terms" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="#" class="text-yellow-600 hover:underline dark:text-yellow-500">terms and conditions</a></label>
                </div>
                <button type="submit" value="save" class="text-white  w-full bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">Register new account</button>
                </form>
                <div class="flex justify-center">
                    <p class="text-sm">Already have an account ? <a href="{{ url('/signin')}}" class="text-yellow-400">Sign in</a></p>
                </div>
            </div> 
        </div>
    </div>
</body>
</html>

