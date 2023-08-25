@extends('instagram.layout')
@section('content')
<div class="w-full">
    <div class="w-[900px] ml-auto mr-auto">
        <div class="card-header flex items-center justify-center justify-between ml-10 mt-8 mr-auto w-9/12">
            <div class="profilepicture">
                <img class="h-[150px] w-[150px] rounded-full" src="{{ asset('img/post.jpg') }}"> 
            </div>
            <div class="cardinfo">
                <div class="flex ">
                    <h1 class="text-xl text-gray-700">{{ Auth::user()->username }}</h1>
                    <button class="transition duration-150 bg-gray-200 pt-2 pb-2 pr-4 pl-4 hover:bg-gray-300 text-sm ml-5 font-semibold rounded-md">Edit profile</button>
                    <button class="transition duration-150 bg-gray-200 pt-2 pb-2 pr-4 pl-4 hover:bg-gray-300 text-sm ml-2 font-semibold rounded-md">View Archive</button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather ml-2 feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>       
                </div>
                <div class="interactions flex text-md space-x-5 mt-3">
                    <p><b>20</b> posts</p>
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
            <button class="font-semibold text-gray-600 flex items-center pt-2 pb-2 border-t-2 border-black">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-border-all" viewBox="0 0 16 16"> <path d="M0 0h16v16H0V0zm1 1v6.5h6.5V1H1zm7.5 0v6.5H15V1H8.5zM15 8.5H8.5V15H15V8.5zM7.5 15V8.5H1V15h6.5z"/></svg>
                <p class="ml-1">POSTS</p>
            </button>
            <div class="font-semibold text-gray-600 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-border-all" viewBox="0 0 16 16"> <path d="M0 0h16v16H0V0zm1 1v6.5h6.5V1H1zm7.5 0v6.5H15V1H8.5zM15 8.5H8.5V15H15V8.5zM7.5 15V8.5H1V15h6.5z"/></svg>
                <p class="ml-1">POSTS</p>
            </div>
            <div class="font-semibold text-gray-600 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-border-all" viewBox="0 0 16 16"> <path d="M0 0h16v16H0V0zm1 1v6.5h6.5V1H1zm7.5 0v6.5H15V1H8.5zM15 8.5H8.5V15H15V8.5zM7.5 15V8.5H1V15h6.5z"/></svg>
                <p class="ml-1">POSTS</p>
            </div>
            <div class="font-semibold text-gray-600 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-border-all" viewBox="0 0 16 16"> <path d="M0 0h16v16H0V0zm1 1v6.5h6.5V1H1zm7.5 0v6.5H15V1H8.5zM15 8.5H8.5V15H15V8.5zM7.5 15V8.5H1V15h6.5z"/></svg>
                <p class="ml-1">POSTS</p>
            </div>  
        </div>
    </div>
</div>
@endsection