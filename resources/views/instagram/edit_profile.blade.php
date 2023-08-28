@extends('instagram.layout')
@section('content')
<div class="w-full min-w-[100px]">
    <div class="w-[900px] ml-auto mr-auto grid grid-cols-7 border-solid border-[1px] border-gray-300 mt-7">
        <aside class="grid col-span-2 border-solid border-r-[1px] border-gray-300">
            <a href="{{ url('edit_profile') }}" class="border-solid border-l-[2px] border-black pt-1 pb-1">
                <p class="text-start text-sm text-neutral-900 ml-10 pt-2 pb-2 font-semibold">Edit profile</p>
            </a>
            <a href="{{ url('change_password') }}" class="border-solid border-l-[2px] pt-1 pb-1 border-black border-opacity-0 hover:bg-slate-50 hover:border-opacity-30">
                <p class="text-start text-sm text-neutral-900 ml-10 pt-2 pb-2 ">Change password</p>
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
        <div class="col-span-5 w-full">
            <div class="grid grid-cols-4 mt-8 space-y-4">

                <div class="col-span-1 labels flex justify-end items-center">
                @if(Auth::user()->image)
                {
                <!--<img class="h-[30px] w-[30px] rounded-full" src="{{ asset('img/bg.jpg') }}"> -->
                }
                @else
                <button class="h-[40px] w-[40px] mt-3 rounded-full bg-yellow-600 text-white text-[15px] font-semibold  inline-flex items-center justify-center">{{ $author }}</button>
                @endif   
                </div>
                <div class="col-span-3 ml-10 justify-start">
                    <p class="leading-none">{{ Auth::user()->username }}</p>
                    <button class="text-sm leading-none hover:text-black font-semibold text-yellow-500">Change profile photo</button>
                </div>
                
                <div class="col-span-1 labels flex justify-end items-center">
                    <label class="text-black-600 font-semibold">Username</label>
                </div>
                <div class="col-span-3 ml-10 items-center justify-start">
                    <input class="text-sm h-8 w-[320px] border-gray-300 focus:ring-0 focus:ring-offset-0" type="text">
                </div>

                <div class="col-span-1 labels flex justify-end items-center">
                </div>
                <div class="col-span-3 ml-10 items-center justify-start">
                    <p class="w-[320px] text-xs text-gray-500">Help people discover your account by using the name you're known by: either your full name, nickname, or business name.
                    </p>
                    <p class="w-[320px] text-xs text-gray-500 mt-3">You can only change your name twice within 14 days.
                    </p>
                </div>

                <div class="col-span-1 labels flex justify-end items-center">
                    <label class="text-black-600 font-semibold">Fullname</label>
                </div>
                <div class="col-span-3 ml-10 items-center justify-start">
                    <input class="text-sm h-8 w-[320px] border-gray-300 focus:ring-0 focus:ring-offset-0" type="text">
                </div>

                <div class="col-span-1 labels flex justify-end items-center ml-10">
                </div>
                <div class="col-span-3 ml-10 items-center justify-start">
                    <p class="w-[320px] text-xs text-gray-500">In most cases, you'll be able to change your username back to aurieljames11 for another 14 days. <a href="#" class="text-yellow-400">Learn more</a>
                    </p>
                </div>

                <div class="col-span-1 labels flex justify-end items-center">
                    <label class="text-black-600 font-semibold">Bio</label>
                </div>
                <div class="col-span-3 ml-10 items-center justify-start">
                    <textarea class="text-sm w-[320px] border-gray-300 focus:ring-0 focus:ring-offset-0" placeholder="Wag masyadong mahaba, hayop ka." type="text"></textarea>
                </div>

                <div class="col-span-1 labels flex justify-end items-center">
                    <label class="text-black-600 font-semibold">Email</label>
                </div>
                <div class="col-span-3 ml-10 items-center justify-start">
                    <input class="text-sm h-8 w-[320px] border-gray-300 focus:ring-0 focus:ring-offset-0" type="email">
                </div>

                <div class="col-span-1 labels flex justify-end items-center">
                    <label class="text-black-600 font-semibold"></label>
                </div>
                <div class="col-span-3 ml-10 items-center justify-start">
                    <p class="w-[320px] text-sm text-gray-600 font-semibold">Personal information
                    </p>
                    <p class="w-[320px] text-xs text-gray-500">Provide your personal information, even if the account is used for a business, a pet or something else. This won't be a part of your public profile.
                    </p>
                </div>

                <div class="col-span-1 labels flex justify-end items-center">
                    <label class="text-black-600 font-semibold"></label>
                </div>
                <div class="col-span-3 ml-10 items-center flex justify-between">
                    <button class="bg-yellow-600 rounded-md text-white pt-1 pb-1 pr-2 pl-2">Submit<button>
                    <span class="font-semibold text-sm text-yellow-600 mr-20">Temporarily deactivate account</span>
                </div>

                
                <!-- <div class="col-span-1 labels flex justify-end items-center">
                    <label>Username</label>
                </div>
                <div class="col-span-3 ml-10 bg-red-600 flex items-center">
                    <input type="text">
                </div> -->
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