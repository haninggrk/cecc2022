<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
<link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        fontFamily: {
          sans: ['Inter', 'sans-serif'],
        },
      }
    }
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
        <title>{{ config('app.name', 'Laravel') }}</title>
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
          h1,h2,h3,h4,h5{
            font-family: 'Inter';
          }
        </style>
    </head>
    <body>
        <div x-data="{ sidebarOpen: false }" class="flex ">
            <aside  class="sticky top-0 h-screen flex-shrink-0 w-64 flex flex-col transition-all duration-300" :class="{ '-ml-64': !sidebarOpen }">
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex-1 flex flex-col min-h-0 bg-gray-800">
  <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
    <div class="flex items-center flex-shrink-0 px-4">
      <img class="h-10" src="{{asset('img/cecclogo.svg')}}"" alt="Workflow">
      <h3 class="ml-2 font-semibold text-white">CECC UKWMS</h3>
    </div>
    <nav class="mt-5 flex-1 px-2 bg-gray-800 space-y-1" aria-label="Sidebar">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <a href="{{route('home')}}" class="@if(Route::current()->getName()=="home")bg-gray-900 text-white @else text-gray-300 bg-gray-800 @endif  group flex items-center px-2 py-2 text-sm font-medium rounded-md">
        <!--
          Heroicon name: outline/home

          Current: "text-gray-300", Default: "text-gray-400 group-hover:text-gray-300"
        -->
        <svg class="text-gray-400 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
        </svg>
        <span class="flex-1"> Home </span>
      </a>
      

      <a href="{{route('guidance')}}" class="@if(Route::current()->getName()=="guidance")bg-gray-900 text-white @else bg-gray-800 @endif text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
        <!-- Heroicon name: outline/users -->
        <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
        </svg>
        <span class="flex-1"> Guidance </span>

        <!-- Current: "bg-gray-800", Default: "bg-gray-900 group-hover:bg-gray-800" -->
      </a>

      <a href="https://forms.gle/Nd87QG7w3uZCHLXF9" class="@if(Route::current()->getName()=="register")bg-gray-900 text-white@else bg-gray-800 @endif text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
        <!-- Heroicon name: outline/folder -->
        <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
</svg>

        
        <span class="flex-1">Register Now</span>

      </a>
      @guest
      <a href="{{route('login')}}" class="@if(Route::current()->getName()=="login")bg-gray-900 text-white@else bg-gray-800 @endif text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
        <!-- Heroicon name: outline/calendar -->
        <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linej.oin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
</svg>

       
        <span class="flex-1"> Login </span>
      </a>
      @endguest
      @auth
      <a href="{{route('tryout')}}" class="mb-5 @if(Route::current()->getName()=="tryout")bg-gray-900 text-white @else text-gray-300 bg-gray-800 @endif  group hover:bg-gray-700 flex items-center px-2 py-2 text-sm font-medium rounded-md">
        <!--
          Heroicon name: outline/home

          Current: "text-gray-300", Default: "text-gray-400 group-hover:text-gray-300"
        -->
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-400 mr-3 flex-shrink-0 h-6 w-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" />
        </svg>
        
        
        <span class="flex-1"> Tryout </span>
      </a>
      @endauth
      @if(Str::contains(Auth::user()->email,'admin000'))
      <a href="{{route('admin')}}" class="mb-5 @if(Route::current()->getName()=="tryout")bg-gray-900 text-white @else text-gray-300 bg-gray-800 @endif  group hover:bg-gray-700 flex items-center px-2 py-2 text-sm font-medium rounded-md">
        <!--
          Heroicon name: outline/home

          Current: "text-gray-300", Default: "text-gray-400 group-hover:text-gray-300"
        -->
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-400 mr-3 flex-shrink-0 h-6 w-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
        </svg>
        
        
        
        <span class="flex-1"> Panel Admin </span>
      </a>
      @endif
<div class="bg-l-blue p-5 mt-5 rounded-md">
  <a href="https://www.youtube.com/c/WMSCUChemicalEngineering">
  <div class="flex items-center">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128" class="h-12 w-12" width="128px" height="128px"><path fill="#ff697b" d="M86.2,104H41.8C32,104,24,96,24,86.2V41.8C24,32,32,24,41.8,24h44.4C96,24,104,32,104,41.8v44.4C104,96,96,104,86.2,104z"/><path fill="#ff697b" d="M86.2,104H41.8C32,104,24,96,24,86.2V41.8C24,32,32,24,41.8,24h44.4C96,24,104,32,104,41.8v44.4C104,96,96,104,86.2,104z"/><path fill="#fff" d="M24,41.8v14.7c14.5-11.1,41.2-24.9,79.5-19C101.5,29.7,94.6,24,86.2,24H41.8C32,24,24,32,24,41.8z"/><path fill="#fff" d="M53.5 49L53.5 79 79.5 64z"/><path fill="none" stroke="#444b54" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="6" d="M86.2,104H41.8C32,104,24,96,24,86.2V41.8C24,32,32,24,41.8,24h44.4C96,24,104,32,104,41.8v44.4C104,96,96,104,86.2,104z"/></svg>
    <span class="ml-2 font-medium text-sm">WMSCU Chemical Engineering</span>
  </div>
  </a>
  <a href="https://www.instagram.com/ceccukwms/">
  <div class="flex items-center mt-4">
    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
    style="width:35.75px;"

    viewBox="0 0 128 128"
    style=" fill:#000000;"><path fill="#ff697b" d="M86.2,109H41.8C32,109,24,101,24,91.2V46.8C24,37,32,29,41.8,29h44.4C96,29,104,37,104,46.8v44.4C104,101,96,109,86.2,109z"></path><path fill="#fff" d="M24,46.8V58h80V46.8C104,37,96,29,86.2,29H41.8C32,29,24,37,24,46.8z"></path><path fill="#444b54" d="M86.2,112H41.8C30.3,112,21,102.7,21,91.2V46.8C21,35.3,30.3,26,41.8,26h44.4c11.5,0,20.8,9.3,20.8,20.8v44.4C107,102.7,97.7,112,86.2,112z M41.8,32C33.6,32,27,38.6,27,46.8v44.4c0,8.1,6.6,14.8,14.8,14.8h44.4c8.1,0,14.8-6.6,14.8-14.8V46.8c0-8.1-6.6-14.8-14.8-14.8H41.8z"></path><path fill="#fff" d="M64 54A15 15 0 1 0 64 84A15 15 0 1 0 64 54Z"></path><path fill="#444b54" d="M64,87c-9.9,0-18-8.1-18-18c0-1.7,1.3-3,3-3s3,1.3,3,3c0,6.6,5.4,12,12,12s12-5.4,12-12s-5.4-12-12-12c-1.7,0-3-1.3-3-3s1.3-3,3-3c9.9,0,18,8.1,18,18S73.9,87,64,87z"></path><path fill="#444b54" d="M53.8 60.9c-.2 0-.4 0-.6-.1s-.4-.1-.6-.2c-.2-.1-.4-.2-.5-.3-.2-.1-.3-.2-.5-.4-.1-.1-.3-.3-.4-.5-.1-.2-.2-.3-.3-.5-.1-.2-.1-.4-.2-.6 0-.2-.1-.4-.1-.6 0-.2 0-.4.1-.6 0-.2.1-.4.2-.6.1-.2.2-.4.3-.5.1-.2.2-.3.4-.5.1-.1.3-.3.5-.4.2-.1.3-.2.5-.3.2-.1.4-.1.6-.2.4-.1.8-.1 1.2 0 .2 0 .4.1.6.2.2.1.4.2.5.3.2.1.3.2.4.4.1.1.3.3.4.5.1.2.2.3.3.5.1.2.1.4.2.6 0 .2.1.4.1.6 0 .2 0 .4-.1.6 0 .2-.1.4-.2.6-.1.2-.2.4-.3.5-.1.2-.2.3-.4.5-.1.1-.3.3-.4.4-.2.1-.3.2-.5.3-.2.1-.4.1-.6.2S54 60.9 53.8 60.9zM86 43A4 4 0 1 0 86 51 4 4 0 1 0 86 43zM19 112.3c-1.6 0-3-1.3-3-3 0-1.7 1.3-3 3-3l90-.5c0 0 0 0 0 0 1.6 0 3 1.3 3 3 0 1.7-1.3 3-3 3L19 112.3C19 112.3 19 112.3 19 112.3zM124 111.8c-.8 0-1.6-.3-2.1-.9-.1-.1-.3-.3-.4-.5-.1-.2-.2-.3-.3-.5-.1-.2-.1-.4-.2-.6 0-.2-.1-.4-.1-.6 0-.2 0-.4.1-.6 0-.2.1-.4.2-.6.1-.2.2-.4.3-.5.1-.2.2-.3.4-.5.1-.1.3-.3.4-.4.2-.1.3-.2.5-.3.2-.1.4-.1.6-.2.4-.1.8-.1 1.2 0 .2 0 .4.1.6.2.2.1.4.2.5.3.2.1.3.2.4.4.6.6.9 1.3.9 2.1 0 .2 0 .4-.1.6 0 .2-.1.4-.2.6-.1.2-.2.4-.3.5-.1.2-.2.3-.4.5C125.6 111.5 124.8 111.8 124 111.8z"></path></svg>
    <span class="ml-2 font-medium text-sm">CECCUKWMS</span>
  </div>
  </a>
  </div>   
    </nav>

  </div>

  @auth
  <div class="flex-shrink-0 flex bg-gray-700 p-4">
    <span class="flex-shrink-0 w-full group block">
      <div class="flex items-center">
        <div>
          <img class="inline-block h-9 w-9 rounded-full" src="{{Auth::user()->profile_photo_url}}" alt="">
        </div>
        <a href="{{route('profile.show')}}">
        <div class="ml-3">
          <p class="text-sm font-medium text-white">{{auth()->user()->name}}</p>
          <p class="text-xs font-medium text-gray-300 group-hover:text-gray-200">View profile</p>
        </div>
      </a>
      <form method="POST" id="form-id" action="{{ route('logout') }}">
        @csrf

        <div style="" style="cursor:pointer" onclick="document.getElementById('form-id').submit()" class="ml-10"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 text-red-500 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
        </svg>
        </div>
      </div>
    </form>
    </span>
  </div>
  @endauth
</div>

            </aside>
  
              <main class="  w-full ">
                
                <div class="font-sans text-gray-900 relative antialiased">
                  <button class="top-0 left-0 sticky z-20" @click="sidebarOpen = !sidebarOpen">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 bg-white text-gray-600 p-2 rounded-md m-3">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    
                    </button>
                    <img class="absolute top-0 right-0  " style="width:20vw" src="{{asset('img/RightCorner.svg')}}">
                    <img class="absolute top-0 left-0  " style="width:20vw" src="{{asset('img/LeftCorner.svg')}}">
                    {{ $slot }}
                </div>
              </main>
          </div>
          @livewireScripts
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    </body>
</html>
