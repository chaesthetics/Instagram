@extends('layout')
@section('content')
<div class="grid grid-cols-3 w-full divide-y">
   <div class="col-span-2 mr-auto ml-auto mt-10 w-3/5">
        <div class="card-header flex justify-between items-center">
            <div class="header-info flex items-center">
                <img class="h-9 w-9 rounded-full" src="{{ asset('img/post.jpg') }}">  
                <span class="font-bold text-sm text-gray-700 ml-3">chaesthetics</span> 
                <span class="ml-1 text-gray-500 ">•  6h</span>
            </div>
            <div class="header-button text-grey-600">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16"><path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/> </svg>
            </div>
        </div>
        <img class="card-body rounded-t-md rounded-r-md  rounded-b-md  rounded-l-md object-contain w-full mt-5" src="{{ asset('img/post.jpg') }}">
        <div class="card-footer flex justify-between items-center mt-3">
            <div class="interaction flex text-bold">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"> <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/> </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-chat ml-5" viewBox="0 0 16 16"> <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/> </svg>
            </div>
            <div class="bookmark">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16"> <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/> </svg>
            </div>
        </div>
        <div class="likes flex items-center mt-2">
            <img class="h-3.5 w-3.5 rounded-full" src="{{ asset('img/post.jpg') }}">
            <span class="text-sm text-gray-700 ml-2 font-semibold">141,150 likes</span>
        </div>
        <div class="post-text">
            <p class="text-sm"><span class="font-bold text-gray-600">chaesthetics </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </div>
        <div class="comment">
            <form>
            <textarea id="comment" rows="4" class="w-full h-8 px-0 text-sm text-gray-900 bg-white border-none outline-none dark:bg-gray-800 focus:ring-0  dark:placeholder-gray-400" placeholder="Write a comment..." required></textarea>
            </form>
        </div>
    </div>
    <div class="col-span-2 mr-auto ml-auto mt-10 w-3/5">
        <div class="card-header flex justify-between items-center">
            <div class="header-info flex items-center">
                <img class="h-9 w-9 rounded-full" src="{{ asset('img/post.jpg') }}">  
                <span class="font-bold text-sm text-gray-700 ml-3">chaesthetics</span> 
                <span class="ml-1 text-gray-500 ">•  6h</span>
            </div>
            <div class="header-button text-grey-600">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16"><path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/> </svg>
            </div>
        </div>
        <img class="card-body rounded-t-md rounded-r-md  rounded-b-md  rounded-l-md object-contain w-full mt-5" src="{{ asset('img/post.jpg') }}">
        <div class="card-footer flex justify-between items-center mt-3">
            <div class="interaction flex text-bold">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"> <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/> </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-chat ml-5" viewBox="0 0 16 16"> <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/> </svg>
            </div>
            <div class="bookmark">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16"> <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/> </svg>
            </div>
        </div>
        <div class="likes flex items-center mt-2">
            <img class="h-3.5 w-3.5 rounded-full" src="{{ asset('img/post.jpg') }}">
            <span class="text-sm text-gray-700 ml-2 font-semibold">141,150 likes</span>
        </div>
        <div class="post-text">
            <p class="text-sm"><span class="font-bold text-gray-600">chaesthetics </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </div>
        <div class="comment">
            <form>
            <textarea id="comment" rows="4" class="w-full h-8 px-0 text-sm text-gray-900 bg-white border-none outline-none dark:bg-gray-800 focus:ring-0  dark:placeholder-gray-400" placeholder="Write a comment..." required></textarea>
            </form>
        </div>
    </div>
    <div class="col-span-2 mr-auto ml-auto mt-10 w-3/5">
        <div class="card-header flex justify-between items-center">
            <div class="header-info flex items-center">
                <img class="h-9 w-9 rounded-full" src="{{ asset('img/post.jpg') }}">  
                <span class="font-bold text-sm text-gray-700 ml-3">chaesthetics</span> 
                <span class="ml-1 text-gray-500 ">•  6h</span>
            </div>
            <div class="header-button text-grey-600">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16"><path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/> </svg>
            </div>
        </div>
        <img class="card-body rounded-t-md rounded-r-md  rounded-b-md  rounded-l-md object-contain w-full mt-5" src="{{ asset('img/post.jpg') }}">
        <div class="card-footer flex justify-between items-center mt-3">
            <div class="interaction flex text-bold">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"> <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/> </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-chat ml-5" viewBox="0 0 16 16"> <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/> </svg>
            </div>
            <div class="bookmark">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16"> <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/> </svg>
            </div>
        </div>
        <div class="likes flex items-center mt-2">
            <img class="h-3.5 w-3.5 rounded-full" src="{{ asset('img/post.jpg') }}">
            <span class="text-sm text-gray-700 ml-2 font-semibold">141,150 likes</span>
        </div>
        <div class="post-text">
            <p class="text-sm"><span class="font-bold text-gray-600">chaesthetics </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </div>
        <div class="comment">
            <form>
            <textarea id="comment" rows="4" class="w-full h-8 px-0 text-sm text-gray-900 bg-white border-none outline-none dark:bg-gray-800 focus:ring-0  dark:placeholder-gray-400" placeholder="Write a comment..." required></textarea>
            </form>
        </div>
    </div>
    <div class="col-span-2 mr-auto ml-auto mt-10 w-3/5">
        <div class="card-header flex justify-between items-center">
            <div class="header-info flex items-center">
                <img class="h-9 w-9 rounded-full" src="{{ asset('img/post.jpg') }}">  
                <span class="font-bold text-sm text-gray-700 ml-3">chaesthetics</span> 
                <span class="ml-1 text-gray-500 ">•  6h</span>
            </div>
            <div class="header-button text-grey-600">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16"><path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/> </svg>
            </div>
        </div>
        <img class="card-body rounded-t-md rounded-r-md  rounded-b-md  rounded-l-md object-contain w-full mt-5" src="{{ asset('img/post.jpg') }}">
        <div class="card-footer flex justify-between items-center mt-3">
            <div class="interaction flex text-bold">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"> <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/> </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-chat ml-5" viewBox="0 0 16 16"> <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/> </svg>
            </div>
            <div class="bookmark">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16"> <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/> </svg>
            </div>
        </div>
        <div class="likes flex items-center mt-2">
            <img class="h-3.5 w-3.5 rounded-full" src="{{ asset('img/post.jpg') }}">
            <span class="text-sm text-gray-700 ml-2 font-semibold">141,150 likes</span>
        </div>
        <div class="post-text">
            <p class="text-sm"><span class="font-bold text-gray-600">chaesthetics </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </div>
        <div class="comment">
            <form>
            <textarea id="comment" rows="4" class="w-full h-8 px-0 text-sm text-gray-900 bg-white border-none outline-none dark:bg-gray-800 focus:ring-0  dark:placeholder-gray-400" placeholder="Write a comment..." required></textarea>
            </form>
        </div>
    </div>
   <div class="bg-stone-100 sticky bottom-0">
    <h1>hekk</h1>
   </div>
</div>
@endsection