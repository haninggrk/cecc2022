<x-guest-layout>
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Corner Cosmetic & Logo Pack --}}



    {{-- <img class="absolute top-0 left-0 -mt-12 -ml-44" src="{{asset('img/LeftCorner.svg')}}"> --}}
    <div class="bg-l-blue pt-10 w-full  -mt-20" style="">

        <div>
            <img class="mx-auto transition-all duration-150 ease-out " style="width: 20vw"
                src="{{ asset('img/LogoPack.svg') }}">
        </div>
        <div class="relative">
            <img class="absolute -mt-12" src="{{ asset('img/ChemicalClutter.svg') }}">
            <div class="">

                <div class="relative">
                    <img class="absolute top-96 mt-80 z-10" style="" src="{{ asset('img/FishClutter.svg') }}">
                    <img style="" class="w-full" src="{{ asset('img/BoatWaveAboutVisiMisi.svg') }}?id=223">
                    {{-- <img class="absolute -mt-12 z-10 top-14 mx-auto left-2 right-0" style="width:62%vw; top:3rem" src="{{asset('img/Line.svg')}}"> --}}

                </div>
            </div>
            <div class="bg-d-blue -mt-24  relative ">
                <div class=" xl:px-48 md:px-48  lg:px-48">
                    <img class="mx-auto mt-20" style=" min-width:300px" src="{{ asset('img/Timeline.svg') }}">
                    <img class="mx-auto mt-24" style=" min-width:300px" src="{{ asset('img/Penghargaan.svg') }}">
                    <img class="mx-auto mt-20" style=" width:0; min-width:300px"
                        src="{{ asset('img/teaserText.svg') }}">
                    <!-- This is an example component -->
                    <div class="max-w-2xl mx-auto">

                        <div id="default-carousel" class="relative " data-carousel="static">
                            <!-- Carousel wrapper -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <span
                                    class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First
                                    Slide</span>
                                <img src="{{ asset('img/s1.png') }}"
                                    class=" border-2 border-white block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                    alt="...">
                            </div>
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ asset('img/s2.png') }}"
                                    class=" border-2 border-white block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                    alt="...">
                            </div>
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ asset('img/s3.png') }}"
                                    class="border-2 border-white block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                    alt="...">
                            </div>
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ asset('img/s4.png') }}"
                                    class="border-2 border-white block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                    alt="...">
                            </div>
                            <div class="overflow-hidden  relative rounded-lg sm:h-64 xl:h-80 2xl:h-96"
                                style="height:30rem">
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ asset('img/s5.png') }}"
                                        class="border-2 border-white block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                        alt="...">
                                </div>
                                <!-- Item 1 -->

                                <!-- Item 2 -->

                                <!-- Item 3 -->


                            </div>
                            <!-- Slider indicators -->
                            <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                    aria-label="Slide 1" data-carousel-slide-to="0"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                    aria-label="Slide 2" data-carousel-slide-to="1"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                    aria-label="Slide 3" data-carousel-slide-to="2"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                    aria-label="Slide 4" data-carousel-slide-to="3"></button>

                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                    aria-label="Slide 5" data-carousel-slide-to="4"></button>

                            </div>
                            <!-- Slider controls -->
                            <button type="button"
                                class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                                data-carousel-prev>
                                <span
                                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                    <span class="hidden">Previous</span>
                                </span>
                            </button>
                            <button type="button"
                                class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                                data-carousel-next>
                                <span
                                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                    <span class="hidden">Next</span>
                                </span>
                            </button>
                        </div>

                        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
                    </div>
                </div>

                <div class="mx-auto h-full overflow-y-hidden absolute top-0">

                </div>
                <div class="grid grid-cols-2 mt-24">
                    <div class=" col-span-1 px-20">
                        <img class="mx-auto mt-20" style="" src="{{ asset('img/supportedby.svg') }}">
                        <img class="mt-10" src="{{ asset('img/SupportLogo.png') }}">

                    </div>
                    <div class=" col-span-1 px-20">
                        <img class="mx-auto mt-20" style="max" src="{{ asset('img/mediapartner.svg') }}">
                        <img class="mt-10" src="{{ asset('img/MediaLogo.svg') }}">
                    </div>
                </div>
                <img class="mx-auto mt-20" style="" src="{{ asset('img/DasarLaut.svg') }}">
            </div>
        </div>
    </div>
</x-guest-layout>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
