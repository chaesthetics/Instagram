@section('sideBar')
<aside class="sticky w-60 overflow-y-auto bg-yellow-200">
    <div class="text-gray-100 text-xl">
        <div class="p-2.5 mt-4 flex items-center text-center">
            <h1 class="font-semiboldtext-2xl ml-3 text-yellow-950 italic">Instagram</h1>
        </div>
    </div>
    <div class="p-2.5 mt-10 flex items-center rounded-md px-4 duration-300 cursor-pointer
    hover:bg-yellow-500 hover:text-white text-yellow-950">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16"> <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/> </svg>
    <span class="text-[15px] ml-4 font-semibold">Home</span>
    </div>

    <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer
    hover:bg-yellow-500 hover:text-white text-white bg-gray-700">
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"> <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/> </svg>
    <input type="text" placeholder="Search" class="text-[15px] ml-4 text-white w-full bg-transparent focus:outline-none" >
    </div>

    <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer
    hover:bg-yellow-500 hover:text-white text-yellow-950">
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-compass" viewBox="0 0 16 16"> <path d="M8 16.016a7.5 7.5 0 0 0 1.962-14.74A1 1 0 0 0 9 0H7a1 1 0 0 0-.962 1.276A7.5 7.5 0 0 0 8 16.016zm6.5-7.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/> <path d="m6.94 7.44 4.95-2.83-2.83 4.95-4.949 2.83 2.828-4.95z"/> </svg>
    <span class="text-[15px] ml-4 font-semibold">Explore</span>
    </div>

    <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer
    hover:bg-yellow-500 hover:text-white text-yellow-950">
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16"> <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z"/> </svg>
    <span class="text-[15px] ml-4 font-semibold">Reels</span>
    </div>

    <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer
    hover:bg-yellow-500 hover:text-white text-yellow-950">
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-messenger" viewBox="0 0 16 16"> <path d="M0 7.76C0 3.301 3.493 0 8 0s8 3.301 8 7.76-3.493 7.76-8 7.76c-.81 0-1.586-.107-2.316-.307a.639.639 0 0 0-.427.03l-1.588.702a.64.64 0 0 1-.898-.566l-.044-1.423a.639.639 0 0 0-.215-.456C.956 12.108 0 10.092 0 7.76zm5.546-1.459-2.35 3.728c-.225.358.214.761.551.506l2.525-1.916a.48.48 0 0 1 .578-.002l1.869 1.402a1.2 1.2 0 0 0 1.735-.32l2.35-3.728c.226-.358-.214-.761-.551-.506L9.728 7.381a.48.48 0 0 1-.578.002L7.281 5.98a1.2 1.2 0 0 0-1.735.32z"/> </svg>
    <span class="text-[15px] ml-4 font-semibold">Messages</span>
    </div>

    <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer
    hover:bg-yellow-500 hover:text-white text-yellow-950">
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16"> <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/> </svg>
    <span class="text-[15px] ml-4 font-semibold">Notifications</span>
    </div>

    <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer
    hover:bg-yellow-500 hover:text-white text-yellow-950">
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16"> <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/> <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/> </svg>
    <span class="text-[15px] ml-4 font-semibold">Create</span>
    </div>

    <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer
    hover:bg-yellow-500 hover:text-white text-yellow-950">
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16"> <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/> <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/> </svg>
    <span class="text-[15px] ml-4 font-semibold">Profile</span>
    </div>

    <div class="absolute inset-x-0 bottom-8">
    <div class="p-2.5 mt-2 flex w-full items-center rounded-md px-4 duration-300 cursor-pointer
    hover:bg-yellow-500 hover:text-white text-yellow-950">
    <svg height="25px" id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="25px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2 s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2 S29.104,22,28,22z"/></svg>
    <span class="text-[15px] ml-4 font-semibold">Menu</span>
    </div>
    </div>
  </aside>
@show