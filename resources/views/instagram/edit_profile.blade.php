@extends('instagram.layout')
@section('content')
<div class="w-full min-w-[100px]">
    <div class="w-[900px] ml-auto mr-auto grid grid-cols-7 border-solid border-[1px] border-gray-300 mt-7">
        <aside class="grid col-span-2 border-solid border-r-[1px] border-gray-300">
            <button class="border-solid border-l-[2px] border-black pt-1 pb-1">
                <p class="text-start text-sm text-neutral-900 ml-10 pt-2 pb-2 font-semibold">Edit profile</p>
            </button>
            <button class="border-solid border-l-[2px] pt-1 pb-1 border-black border-opacity-0 hover:bg-slate-50 hover:border-opacity-30">
                <p class="text-start text-sm text-neutral-900 ml-10 pt-2 pb-2 ">Change password</p>
            </button>
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
            <p>hello</p>
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