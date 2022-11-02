
<x-guest-layout>
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Corner Cosmetic & Logo Pack --}}



    {{-- <img class="absolute top-0 left-0 -mt-12 -ml-44" src="{{asset('img/LeftCorner.svg')}}"> --}}
    <div class="bg-l-blue pt-10 pb-5 w-full  -mt-20" style="">

        <div>
            <img class="mx-auto transition-all duration-150 ease-out " style="width: 20vw"
                src="{{ asset('img/LogoPack.svg') }}">
        </div>
        <h1 class="text-center font-extrabold text-5xl mt-5">CHEMICAL ENGINEERING</h1>
        <h1 class="text-center font-extrabold text-5xl mb-2">CHALLENGE & COMPETITION 2022</h1>
        <h3 class="text-center italic" style="color:#1E5CAA">“Inovation in Chemical Engineering Facing New Normal Life”</h3>
        <div class="px-16">
            <div id="timer" class="text-right text-2xl font-bold"></div>
            <div class="bg-d-blue mt-2 rounded-md   md:p-10 sm:p-1 gap-10 grid grid-cols-7">
                <div class="col-span-7 lg:col-span-5 p-5 rounded-md bg-white ">
                    <div class="flex">
                        <div class="  " style="vertical-align:top">
                            <div class="bg-n-blue text-white text-2xl px-3 py-1 font-bold rounded-md inline-block"
                                style="background:#1E5CAA; ">{{ $soal->nomor }}.</div>
                        </div>
                        <div class="text-2xl mt-2 ml-2 ">
                            <div class="soal">
                                <img class="w-full" style="max-width:600px" src="{{asset('img/'.$soal->image)}}">
                                {{ $soal->soal }}
                            </div>
                            <form id="myForm" action="{{ route('answerPenyisihan') }}" method="POST">
                                @csrf
                                <input type="hidden" name="soalid" value="{{ $soal->id }}">
                                <input type="hidden" name="kesoal" id="kesoal" value="">
                                <div class="jawaban mt-5">
                                    <div class="flex items-center mb-2">
                                        <input
                                            @if (Auth::user()->answerPenyisihans->where('soal', $soal->id)->first() != null) @if (Auth::user()->answerPenyisihans->where('soal', $soal->id)->first()->jawaban == 'a') checked @endif
                                            @endif id="default-radio-1"
                                        type="radio" value="a" name="jawaban"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-1"
                                            class="ml-2 md:text-2xl font-medium text-gray-900 dark:text-gray-300">A.
                                        
                                            @if(str_contains($soal->a, '.png')  or str_contains($soal->a, '.jpg') or str_contains($soal->a, '.jpeg') or str_contains($soal->a, '.PNG') or str_contains($soal->a, '.JPG') or str_contains($soal->a, '.JPEG') )
                                            <img src="{{asset('img/'.$soal->a)}}" class="inline-block" alt="">
                                            @else
                                            <span>
                                            {{
                                                $soal->a
                                                }}
                                                @endif
                                            </label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input
                                            @if (Auth::user()->answerPenyisihans->where('soal', $soal->id)->first() != null) @if (Auth::user()->answerPenyisihans->where('soal', $soal->id)->first()->jawaban == 'b') checked @endif
                                            @endif id="default-radio-2"
                                        type="radio" value="b" name="jawaban"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-2"
                                            class="ml-2 text-2xl font-medium text-gray-900 dark:text-gray-300">B.

                                            @if(str_contains($soal->b, '.png')  or str_contains($soal->b, '.jpg') or str_contains($soal->b, '.jpeg') or str_contains($soal->b, '.PNG') or str_contains($soal->b, '.JPG') or str_contains($soal->b, '.JPEG') )
                                            <img src="{{asset('img/'.$soal->b)}}" class="inline-block" alt="">
                                            @else
                                            {{
                                                $soal->b
                                                }}
                                                @endif
                                            </label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input
                                            @if (Auth::user()->answerPenyisihans->where('soal', $soal->id)->first() != null) @if (Auth::user()->answerPenyisihans->where('soal', $soal->id)->first()->jawaban == 'c') checked @endif
                                            @endif id="default-radio-3"
                                        type="radio" value="c" name="jawaban"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-3"
                                        class="ml-2 text-2xl font-medium text-gray-900 dark:text-gray-300">C.

                                        @if(str_contains($soal->c, '.png')  or str_contains($soal->c, '.jpg') or str_contains($soal->c, '.jpeg') or str_contains($soal->c, '.PNG') or str_contains($soal->c, '.JPG') or str_contains($soal->c, '.JPEG') )
                                        <img src="{{asset('img/'.$soal->c)}}" class="inline-block" alt="">
                                        @else
                                        {{
                                            $soal->c
                                            }}
                                            @endif
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-2">
                                        <input
                                            @if (Auth::user()->answerPenyisihans->where('soal', $soal->id)->first() != null) @if (Auth::user()->answerPenyisihans->where('soal', $soal->id)->first()->jawaban == 'd') checked @endif
                                            @endif id="default-radio-4"
                                        type="radio" value="d" name="jawaban"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-4"
                                            class="ml-2 text-2xl font-medium text-gray-900 dark:text-gray-300">D.

                                            @if(str_contains($soal->d, '.png')  or str_contains($soal->d, '.jpg') or str_contains($soal->d, '.jpeg') or str_contains($soal->d, '.PNG') or str_contains($soal->d, '.JPG') or str_contains($soal->d, '.JPEG') )
                                            <img src="{{asset('img/'.$soal->d)}}" class="inline-block" alt="">
                                            @else
                                            {{
                                                $soal->d
                                                }}
                                                @endif
                                            </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input
                                            @if (Auth::user()->answerPenyisihans->where('soal', $soal->id)->first() != null) @if (Auth::user()->answerPenyisihans->where('soal', $soal->id)->first()->jawaban == 'e') checked @endif
                                            @endif id="default-radio-5"
                                        type="radio" value="e" name="jawaban"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-5"
                                        class="ml-2 text-2xl font-medium text-gray-900 dark:text-gray-300">E.

                                        @if(str_contains($soal->e, '.png')  or str_contains($soal->e, '.jpg') or str_contains($soal->e, '.jpeg') or str_contains($soal->e, '.PNG') or str_contains($soal->e, '.JPG') or str_contains($soal->e, '.JPEG') )
                                        <img src="{{asset('img/'.$soal->e)}}" class="inline-block" alt="">
                                        @else
                                        {{
                                            $soal->e
                                            }}
                                            @endif
                                        </label>
                                    </div>

                                </div>
                        </div>

                    </div>
                    <div class="">

                    </div>
                </div>
                <div class="col-span-7 lg:col-span-2 ">
                    <div class="rounded-md bg-l-blue p-5">
                        <div class="text-2xl">Nomor soal</div>
                        <div style="cursor:pointer;" class="grid-cols-6 grid gap-3 mt-5">
                            @foreach ($listSoal as $s)
                                
                            <a onclick="changeValue({{$s->nomor}})">
                            <div
                                    class="col col-span-1 
                                    
                            @if (Auth::user()->answerPenyisihans->where('soal', $s->id)->first() == null or Auth::user()->answerPenyisihans->where('soal', $s->id)->first()->jawaban == null and $s->nomor != $soal->nomo) 
                            bg-white 
                            hover:bg-gray-200
                            @endif
                            @if (Auth::user()->answerPenyisihans->where('soal', $s->id)->first() != null) 
                            @if (Auth::user()->answerPenyisihans->where('soal', $s->id)->first()->jawaban  != null)
                            @if(Auth::user()->answerPenyisihans->where('soal', $s->id)->first()->ragu != 1)
                            bg-green-400 
                            hover:bg-green-500
                            @else
                            bg-yellow-200
                            hover:bg-yellow-300
                            @endif
                            @endif @endif
                            @if($s->nomor == $soal->nomor)
                            bg-gray-200
                            hover:bg-gray-200
                            @endif
                            text-center text-2xl py-1 rounded-md
                    
                            ">
                                    {{ $s->nomor }}</div>
                            </a>
                            @endforeach


                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-3 col-span-7 lg:col-span-5 text-white font-bold text-2xl">
                    
                        <a style="cursor:pointer" onclick="changeValue({{ $soal->nomor - 1 }})">
                            <div>
                                @if ($soal->nomor > 1)
                                < Soal sebelumnya
                                @endif
                            </div>
                        </a>
                  
                    <div class="text-center text-2xl">
                        <div class="flex items-center " style="justify-content: center">
                            <input id="default-checkbox" @if(Auth::user()->answerPenyisihans->where('soal', $soal->id)->first() != null) @if (Auth::user()->answerPenyisihans->where('soal', $soal->id)->first()->ragu == 1) checked @endif @endif name="ragu" type="checkbox" value="1"
                                class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" style="cursor:pointer;"  class=" text-2xl ml-2 text-white font-medium  ">Ragu
                                Ragu</label>
                        </div>
                    </div>
                    
                        <a onclick="changeValue({{ $soal->nomor + 1 }})">
                            <div style="cursor:pointer;" class="text-right">@if ($soal->nomor < 50)> Soal selanjutnya   @endif</div>
                        </a>
                 
                </div>
                <div class="col-span-7 lg:col-span-2 text-right">
                    <a href="{{route('penyisihansubmit')}}">
                    <div style="cursor:pointer;" class="text-right inline-block text-green-white p-2 text-2xl font-bold  text-white rounded-md text-right hover:bg-blue-800 bg-blue-700" style="">Selesai</div>
                    </a>
                </div>
            </div>
            </form>

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
    function msToTime(duration) {
  var milliseconds = Math.floor((duration % 1000) / 100),
    seconds = Math.floor((duration / 1000) % 60),
    minutes = Math.floor((duration / (1000 * 60)) % 60),
    hours = Math.floor((duration / (1000 * 60 * 60)) % 24);

  hours = (hours < 10) ? "0" + hours : hours;
  minutes = (minutes < 10) ? "0" + minutes : minutes;
  seconds = (seconds < 10) ? "0" + seconds : seconds;

  return hours + ":" + minutes + ":" + seconds;
}


    function changeValue(o) {
        document.getElementById('kesoal').value = o;
        document.getElementById("myForm").submit();
    }

    var startDateTime = '{{Auth::user()->start_penyisihan}}';
    var endDateTime = '{{Auth::user()->end_penyisihan}}';

    var startTime = Date.parse(startDateTime);
    var endTime = Date.parse(endDateTime);
    var now = Date.parse('{{$timenow}}');
    var remainingTime = (endTime-now);
    

    var intervalId = window.setInterval(function(){
       document.getElementById("timer").innerHTML= msToTime(remainingTime)
       remainingTime = remainingTime-1000
       if(remainingTime <= 0){
        window.location.reload();
       }
    }, 1000);

</script>


