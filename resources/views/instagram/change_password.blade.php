@extends('instagram.layout')
@section('content')
<div class="w-full min-w-[100px]">
    <div class="w-[900px] ml-auto mr-auto grid grid-cols-7 border-solid border-[1px] border-gray-300 mt-7 space-y-6">
        <aside class="grid col-span-2 border-solid border-r-[1px] border-gray-300">
            <a href="{{ url('edit_profile') }}"class="border-solid border-l-[2px] pt-1 pb-1 border-black border-opacity-0 hover:bg-slate-50 hover:border-opacity-30">
                <p class="text-start text-sm text-neutral-900 ml-10 pt-2 pb-2">Edit profile</p>
            </button>
            <a href="{{ url('change_password') }}" class="border-yellow-500 border-l-[2px] border-black pt-1 pb-1">
                <p class="text-start text-sm text-neutral-900 ml-10 pt-2 pb-2 font-semibold">Change password</p>
            </a>
            <button class="border-solid border-l-[2px] pt-1 pb-1 border-black border-opacity-0 hover:bg-slate-50 hover:border-opacity-30">
                <p class="text-start text-sm text-neutral-900 ml-10 pt-2 pb-2 ">Apps and websites</p>
            </button>
            <button class="border-solid border-l-[2px] pt-1 pb-1 border-black border-opacity-0 hover:bg-slate-50 hover:border-opacity-30">
                <p class="text-start text-sm text-neutral-900 ml-10 pt-2 pb-2 ">Email notifications</p>
            </button>
            <button class="border-solid border-l-[2px] pt-1 pb-1 border-black border-opacity-0 hover:bg-slate-50 hover:border-opacity-30">
                <p class="text-start text-sm text-neutral-900 ml-10 pt-2 pb-2 ">Push notifications</p>
            </button>
            <button class="border-solid border-l-[2px] pt-1 pb-1 border-black border-opacity-0 hover:bg-slate-50 hover:border-opacity-30">
                <p class="text-start text-sm text-neutral-900 ml-10 pt-2 pb-2 ">Manage contacts</p>
            </button>
            <button class="border-solid border-l-[2px] pt-1 pb-1 border-black border-opacity-0 hover:bg-slate-50 hover:border-opacity-30">
                <p class="text-start text-sm text-neutral-900 ml-10 pt-2 pb-2 ">Privacy and security</p>
            </button>
            <button class="border-solid border-l-[2px] pt-1 pb-1 border-black border-opacity-0 hover:bg-slate-50 hover:border-opacity-30">
                <p class="text-start text-sm text-neutral-900 ml-10 pt-2 pb-2 ">Ads</p>
            </button>
            <button class="border-solid border-l-[2px] pt-1 pb-1 border-black border-opacity-0 hover:bg-slate-50 hover:border-opacity-30">
                <p class="text-start text-sm text-neutral-900 ml-10 pt-2 pb-2 ">Supervision</p>
            </button>
            <button class="border-solid border-l-[2px] pt-1 pb-1 border-black border-opacity-0 hover:bg-slate-50 hover:border-opacity-30">
                <p class="text-start text-sm text-neutral-900 ml-10 pt-2 pb-2 ">Login activity</p>
            </button>
            <button class="border-solid border-l-[2px] pt-1 pb-1 border-black border-opacity-0 hover:bg-slate-50 hover:border-opacity-30">
                <p class="text-start text-sm text-neutral-900 ml-10 pt-2 pb-2 ">Emails from instagram</p>
            </button>
            <button class="border-solid border-l-[2px] pt-1 pb-1 border-black border-opacity-0 hover:bg-slate-50 hover:border-opacity-30">
                <p class="text-start text-sm text-neutral-900 ml-10 pt-2 pb-2 ">Help</p>
            </button>
            <button class="border-solid border-l-[2px] pt-1 pb-1 border-black border-opacity-0 hover:bg-slate-50 hover:border-opacity-30">
                <p class="text-start text-sm text-yellow-500 font-semibold ml-10 pt-2 pb-2 ">Switch to professional <br>account</p>
            </button>
            
        </aside>
        <div class="grid col-span-5 w-full">
            <div class="w-11/12 ml-auto mr-auto grid grid-cols-4 mt-3 h-3/5">
                    <div class="col-span-1 flex justify-end">
                        @if(Auth::user()->avatar)
                            <img id="default" class="h-[50px] w-[50px] rounded-full object-cover" src="{{ Auth::user()->avatar }}">
                        @else
                            <button id="default" class="h-[50px] w-[50px] mt-3 rounded-full bg-yellow-600 text-white text-[15px] font-semibold  inline-flex items-center justify-center">{{ $author }}</button>
                        @endif   
                    </div>
                    <div class="col-span-3 ml-10 flex ml-10 mt-3">
                        <p>username</p>
                    </div>
                    <div class="col-span-1 text-md font-semibold flex justify-end">
                        <p>Old password</p>
                    </div>
                    <div class="col-span-3 flex ml-10">
                        <input type="text" class="text-sm h-10 border-gray-300 w-10/12 focus:ring-0 focus:ring-offset-0 rounded-md bg-slate-50">
                    </div>
                    <div class="col-span-1 text-md font-semibold flex justify-end">
                        <p>New password</p>
                    </div>
                    <div class="col-span-3 flex ml-10">
                        <input type="text" class="text-sm h-10 border-gray-300 w-10/12 focus:ring-0 focus:ring-offset-0 rounded-md bg-slate-50">
                    </div>
                    <div class="col-span-1 text-md font-semibold flex justify-end">
                        <p class="">Confirm new <br>password</p>
                    </div>
                    <div class="col-span-3 flex ml-10">
                        <input type="text" class="text-sm h-10 border-gray-300 w-10/12 focus:ring-0 focus:ring-offset-0 rounded-md bg-slate-50">
                    </div>
                    <div class="col-span-1 text-md font-semibold flex justify-end">
                    </div>
                    <div class="col-span-3 flex ml-10">
                        <button class="hover:bg-yellow-700 bg-yellow-600 text-sm pl-5 pr-5 pt-0 pb-0 font-semibold text-white rounded-md">Change password</button>
                    </div>
                    <div class="col-span-1 text-md font-semibold flex justify-end">
                    </div>
                    <div class="col-span-3 flex ml-10 mt-2">
                        <button class="text-sm font-semibold text-yellow-500">Forgot password?</button>
                    </div>           
            </div>
        </div>
    </div>
    <div class="w-[900px] ml-auto mr-auto">
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