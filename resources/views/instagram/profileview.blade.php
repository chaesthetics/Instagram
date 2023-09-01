@extends('instagram.layout')
@section('content')
<div class="w-full min-w-[100px]">
    <div class="w-[900px] ml-auto mr-auto">
        <div class="card-header flex items-center justify-center justify-between ml-10 mt-8 mr-auto w-9/12">
            <div class="profilepicture">
                @if($userinfo->avatar)
                <img class="h-[150px] w-[150px] rounded-full object-cover" src="{{ $userinfo->avatar }}">
                @else
                 <button class="h-[150px] w-[150px] rounded-full bg-yellow-600 text-white text-5xl font-semibold  inline-flex items-center justify-center">{{ $author }}</button>
                @endif   
            </div>
            <div class="cardinfo">
                <div class="flex ">
                    <h1 class="text-xl text-gray-700">{{ $userinfo->username }}</h1>
                    <a href="#"class="transition duration-150 bg-gray-200 pt-2 pb-2 pr-4 pl-4 hover:bg-gray-300 text-sm ml-5 font-semibold rounded-md">Following</a>
                    <button class="transition duration-150 bg-gray-200 pt-2 pb-2 pr-4 pl-4 hover:bg-gray-300 text-sm ml-2 font-semibold rounded-md">Message</button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather ml-2 feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>       
                </div>
                <div class="interactions flex text-md space-x-5 mt-3">
                    <p><b>{{ $posts->count(); }}</b> posts</p>
                    <p><b>0</b> followers</p>
                    <p><b>0</b> following</p>
                </div>
                <div class="flex mt-3 text-sm font-semibold leading-none">
                    <p>{{ $userinfo->fullname }}</p>
                </div>
                <div class="flex mt-3 text-sm leading-none mt-1">
                    <p>{{ $userinfo->bio }}</p>
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
            <button class="relative group outline-none" data-modal-target="staticModal{{$item->id}}" data-modal-toggle="staticModal{{$item->id}}" >
                <div class=""><img class="group-hover:brightness-50 duration-300 object-cover h-[300px] w-[400px]" src="{{ $item->image }}"></div>
                <div class="absolute flex w-2/4 justify-between items-center top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white flex opacity-0 group-hover:opacity-100 duration-300 space-x-1">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill text-white" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/> </svg>
                        <p class="ml-1">141,150</p>
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-fill" viewBox="0 0 16 16"> <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z"/> </svg>
                        <p class="ml-1">0</p>
                    </div>
                </div>
            </button>
            <!-- Main modal -->
<div id="staticModal{{$item->id}}" data-modal-backdrop="dynamic" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-hidden no-scrollbar overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative flex w-10/12 max-w-10/12 h-auto justify-center max-h-[1000px]">
        <img src="{{ $item->image }}" class="max-h-[650px] h-auto w-auto max-w-[700px]" class="object-cover">
        <div class="bg-white w-[470px] divide-y">
            <div class="flex items-center justify-between pt-3 pl-5 pr-5 pb-3">
                <div class="header-info flex items-center">
                    @if($item->user->avatar)
                    <img class="h-9 w-9 rounded-full object-cover" src="{{ $item->user->avatar }}">
                    @else
                    <button class="h-9 w-9 rounded-full bg-yellow-800 text-white text-[10px] font-semibold  inline-flex items-center justify-center">{{ $author }}</button>
                    @endif   
                    <button class="font-bold text-sm text-gray-700 ml-3" data-popover-target="popover-user{{ $item->user->username }}"><a href="{{ URL('profile')}}">{{ $item->user->username }}</a>
                    </button> 
                <span class="ml-1 text-sm text-gray-500 "></span>
                </div>
                <div class="header-button text-grey-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16"><path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/> </svg>
                </div>
                </div>
                <div>
                <div class="header-info flex items-center pt-3 pl-5 pr-5 ">
                    @if($item->user->avatar)
                    <img class="h-9 w-9 rounded-full object-cover" src="{{ $item->user->avatar }}">
                    @else
                    <button class="h-9 w-9 rounded-full bg-yellow-800 text-white text-[10px] font-semibold  inline-flex items-center justify-center">{{ $author }}</button>
                    @endif   
                    <div class="">
                        <button class="text-black text-sm text-gray-700 ml-3" data-popover-target="popover-user{{ $item->user->username }}"><a class="font-bold text-gray-700" href="{{ URL('profile')}}">{{ $item->user->username }} </a>{{ $item->text }}</button> <br>
                        <span class="ml-3 mt-[-2px] text-xs text-gray-500 ">{{ $item->created_at->diffForHumans() }}</span>
                    </div>
                </div>
                <div class="h-[400px] flex items-center justify-center text-2xl"><p>No comments yet.</p>
                </div>
                </div>
                <div class="pl-3 pr-3 ">
                    <div class="card-footer flex justify-between items-center mt-3">
                        <div class="interaction flex text-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"> <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/> </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-chat ml-5" viewBox="0 0 16 16"> <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/> </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-send ml-5" viewBox="0 0 16 16"> <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/> </svg>
                        </div>
                        <div class="bookmark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16"> <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/> </svg>
                        </div>
                    </div>
                <div class="likes flex justity-end items-center mt-2">
                    <span class="text-sm text-gray-700 font-semibold pb-4">141,150 likes</span>
                </div>
                </div>
                <div class="comment h-auto flex justify-between items-center ">
                <form class="w-full flex items-center pl-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-emoji-smile mt-2 opacity-50" viewBox="0 0 16 16"> <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/> <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/> </svg>
                    <textarea id="comment" rows="4" class="ml-4 mt-2 w-full h-8 px-0 text-sm text-gray-900 overflow-hidden bg-white border-none outline-none dark:bg-gray-800 focus:ring-0  dark:placeholder-gray-400 resize-none" placeholder="Add a comment..."></textarea>
                </form>
                </div>
                </div>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-2 inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal{{$item->id}}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div> 
        </div>
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