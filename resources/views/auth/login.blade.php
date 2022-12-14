<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

<x-guest-layout>

    <div class="bg-l-blue h-full pt-48  -mt-20">
        <div class="content text-center">
        <div class="logo">
        <img class="mx-auto" src="{{asset('img/cecclogo.svg')}}">
        </div>
        <h1 class="text-center font-extrabold text-5xl mt-2">CHEMICAL ENGINEERING</h1>
        <h1 class="text-center font-extrabold text-5xl mb-2">CHALLENGE & COMPETITION 2022</h1>
        <h3 class="text-center italic" style="color:#1E5CAA">“Inovation in Chemical Engineering Facing New Normal Life”</h3>
        <div class="form inline-block">
            @if(session('error'))
            <p class="text-red-500">{{session('error')}}</p>
            @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
        <div class="text-center mt-3">
            <input type="text" name="email" id="large-input" placeholder="Email Address" style="width:25vw; min-width:300px" class="p-4 text-gray-900 bg-white rounded-t-md border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 ">
        </div>
        <div class="text-center " x-data="{ show: true }">
            <div class="relative">
                <input placeholder="Password" name="password" style="width:25vw;min-width:300px" :type="show ? 'password' : 'text'" class="p-4 text-gray-900 bg-white rounded-b-md border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500">
           
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">

                  <svg class="h-6 text-gray-700" fill="none" @click="show = !show"
                    :class="{'hidden': !show, 'block':show }" xmlns="http://www.w3.org/2000/svg"
                    viewbox="0 0 576 512">
                    <path fill="currentColor"
                      d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                    </path>
                  </svg>

                  <svg class="h-6 text-gray-700" fill="none" @click="show = !show"
                    :class="{'block': !show, 'hidden':show }" xmlns="http://www.w3.org/2000/svg"
                    viewbox="0 0 640 512">
                    <path fill="currentColor"
                      d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                    </path>
                  </svg>

                </div>
              </div>
            {{-- <input type="password" name="password" id="large-input" placeholder="Password" style="width:25vw;min-width:300px" class="p-4 text-gray-900 bg-white rounded-b-md border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600"> --}}
        </div>
        <div class="text-left mt-2">
            <div class="grid grid-cols-2">
                <div class=" col-span-1">
            <label for="remember_me " class="items-center">
                <x-jet-checkbox id="remember_me" name="remember" />
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>        
                </div>
                <div class="col-span-1 text-right">
                    <a style="color:#1E5CAA" class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                </div>
                
            </div>
        </div>
        <x-jet-button class="mt-2 w-full text-center" style="display: block; background-color:#1E5CAA;">
            {{ __('Sign in') }}
        </x-jet-button>
        </div>
    </form>
    </div>
    <img class="mx-auto w-full" style="" src="{{asset('img/DasarLaut.svg')}}">

    </div>
 
        {{-- <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form> --}}

</x-guest-layout>
