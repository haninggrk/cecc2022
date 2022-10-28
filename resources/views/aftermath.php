<x-guest-layout>
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Corner Cosmetic & Logo Pack --}}



    {{-- <img class="absolute top-0 left-0 -mt-12 -ml-44" src="{{asset('img/LeftCorner.svg')}}"> --}}
    <div class="bg-l-blue pt-10 pb-5 w-full  -mt-20" style="">

        <div>
            <img class="mx-auto transition-all duration-150 ease-out " style="width: 20vw"
                src="{{ asset('img/LogoPack.svg') }}">
        </div>
        <h1 class="text-center font-extrabold text-5xl mt-10">CHEMICAL ENGINEERING</h1>
        <h1 class="text-center font-extrabold text-5xl mb-2">CHALLENGE & COMPETITION 2022</h1>
        <h3 class="text-center italic" style="color:#1E5CAA">“Inovation in Chemical Engineering Facing New Normal Life”</h3>

        <div class="mt-12 text-center">
        <a href="{{route('startTryout','1')}}"><button class="text-center text-4xl font-bold p-5 text-white rounded-md bg-blue-700 hover:bg-blue-800 ">Klik Untuk Mulai</button></a>
        </div>
    </div>
    </div>
    <div class="bg-l-blue">
        <img class="mx-auto" style="" src="{{ asset('img/DasarLaut.svg') }}">
    </div>
    </div>
</x-guest-layout>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

<script>
    function changeValue(o) {
        document.getElementById('kesoal').value = o;
        document.getElementById("myForm").submit();
    }
</script>
