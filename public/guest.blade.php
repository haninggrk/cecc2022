<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

        <meta name="csrf-token" content="{{ csrf_token() }}">
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<link rel="shortcut icon" href="{{ asset('img/cecclogo.svg') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
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
        <div x-data="{ sidebarOpen: true }" class="flex ">
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

      <a href="{{route('soon')}}" class="@if(Route::current()->getName()=="soon")bg-gray-900 text-white @else bg-gray-800 @endif text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
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
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
</svg>

       
        <span class="flex-1"> Login </span>
      </a>
      @endguest

   
    </nav>
  </div>
  @auth
  <div class="flex-shrink-0 flex bg-gray-700 p-4">
    <a href="{{route('profile.show')}}" class="flex-shrink-0 w-full group block">
      <div class="flex items-center">
        <div>
          <img class="inline-block h-9 w-9 rounded-full" src="{{Auth::user()->profile_photo_url}}" alt="">
        </div>
        <div class="ml-3">
          <p class="text-sm font-medium text-white">{{auth()->user()->name}}</p>
          <p class="text-xs font-medium text-gray-300 group-hover:text-gray-200">View profile</p>
        </div>
      </div>
    </a>
  </div>
  @endauth
</div>

            </aside>
  
              <main class="  w-full ">
                
                <div class="font-sans text-gray-900 relative antialiased">
                  <button class="top-0 left-0 sticky z-10" @click="sidebarOpen = !sidebarOpen">
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
