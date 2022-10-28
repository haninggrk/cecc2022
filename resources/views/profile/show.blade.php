<x-guest-layout>

    <div class="-mt-20 bg-l-blue p-20 pt-20 text-center">
        <img class="mx-auto transition-all duration-150 ease-out " style="width: 20vw" src="{{asset('img/LogoPack.svg')}}">

        <div class="bg-d-blue inline-block mx-auto rounded-lg mt-20 relative overflow-y-hidden">
          
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 text-left" style="background-image: url('{{asset('img/fishclutter.svg')}}')">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
            <div class=" z-10">
                @livewire('profile.update-profile-information-form')
            </div>
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10">
                    @livewire('profile.update-password-form')
                </div>

            @endif



            <div class="mt-10">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

          
        </div>
        
        </div>
    </div>
</x-app-layout>
