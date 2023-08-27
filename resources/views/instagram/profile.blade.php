@extends('instagram.layout')
@section('content')
<div class="w-full min-w-[100px]">
    <div class="w-[900px] ml-auto mr-auto">
        <div class="card-header flex items-center justify-center justify-between ml-10 mt-8 mr-auto w-9/12">
            <div class="profilepicture">
                @if(Auth::user()->image)
                {
                <!--<img class="h-[150px] w-[150px] rounded-full" src="{{ asset('img/bg.jpg') }}"> -->
                }
                @else
                 <button class="h-[150px] w-[150px] rounded-full bg-yellow-600 text-white text-5xl font-semibold  inline-flex items-center justify-center">{{ $author }}</button>
                @endif   
            </div>
            <div class="cardinfo">
                <div class="flex ">
                    <h1 class="text-xl text-gray-700">{{ Auth::user()->username }}</h1>
                    <button class="transition duration-150 bg-gray-200 pt-2 pb-2 pr-4 pl-4 hover:bg-gray-300 text-sm ml-5 font-semibold rounded-md">Edit profile</button>
                    <button class="transition duration-150 bg-gray-200 pt-2 pb-2 pr-4 pl-4 hover:bg-gray-300 text-sm ml-2 font-semibold rounded-md">View Archive</button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather ml-2 feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>       
                </div>
                <div class="interactions flex text-md space-x-5 mt-3">
                    <p><b>{{ $posts->count(); }}</b> posts</p>
                    <p><b>1.2M</b> followers</p>
                    <p><b>0</b> following</p>
                </div>
                <div class="flex mt-3 text-md font-semibold">
                    <p>{{ Auth::user()->fullname }}</p>
                </div>
            </div>
        </div>
        <hr class="mt-10 flex">
        <div class="flex justify-center w-50 text-sm space-x-12">
            <button class="font-semibold text-black-600 flex items-center pt-2 pb-2 border-t-3 border-yellow-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-border-all" viewBox="0 0 16 16"> <path d="M0 0h16v16H0V0zm1 1v6.5h6.5V1H1zm7.5 0v6.5H15V1H8.5zM15 8.5H8.5V15H15V8.5zM7.5 15V8.5H1V15h6.5z"/></svg>
                <p class="ml-1">POSTS</p>
            </button>
            <button class="font-semibold text-gray-600 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16"> <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z"/> </svg>
                <p class="ml-1">REELS</p>
            </button>
            <button class="font-semibold text-gray-600 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16"> <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/> </svg>
                <p class="ml-1">SAVED</p>
            </button>
            <button class="font-semibold text-gray-600 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16"> <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/> <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/> </svg>
                <p class="ml-1">TAGGED</p>
            </button>  
        </div>

        <div class="grid grid-cols-3 gap-1">
        @foreach($posts->reverse() as $item)
            <button class="relative group">
                <div class=""><img class="group-hover:brightness-50 duration-300 object-cover h-[300px] w-[400px]" src="{{ $item->image }}"></div>
                <div class="absolute flex w-2/4 justify-between items-center top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white flex opacity-0 group-hover:opacity-100 duration-300 space-x-1">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill text-white" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/> </svg>
                        <p class="ml-1">131,971</p>
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-fill" viewBox="0 0 16 16"> <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z"/> </svg>
                        <p class="ml-1">931</p>
                    </div>
                </div>
            </button>
        @endforeach
        </div>
        <div class="flex mt-5 text-gray-500 text-xs justify-around w-full">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Blog</a>
            <a href="#">Jobs</a>
            <a href="#">Help</a>
            <a href="#">API</a>
            <a href="#">Privacy</a>
            <a href="#">Terms</a>
            <a href="#">Top Accounts</a>
            <a href="#">Home</a>
            <a href="#">Locations</a>
            <a href="#">Instagram Lite</a>
            <a href="#">Threads</a>
            <a href="#">Contact Uploading & Non-Users</a>
            <a href="#">Meta Verified</a>
        </div>
        <div class="text-gray-500 text-xs flex mt-5 justify-center h-20">
            <a href="#">© 2023 FERNANDEZ AURIEL</a>
        </div>
    </div>
</div>
@endsection