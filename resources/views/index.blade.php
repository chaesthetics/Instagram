@extends('layout')
@section('content')
<div class="grid grid-cols-3 w-full">
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
   </div>
   <div class="bg-pink-600">
    <h1>hekk</h1>
   </div>
</div>
@endsection