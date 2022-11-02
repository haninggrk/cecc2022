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
        <h3 class="text-center italic mb-5" style="color:#1E5CAA">“Inovation in Chemical Engineering Facing New Normal Life”</h3>
        <div class="px-16">
            <div class="bg-d-blue mt-2 rounded-xl p-10 flex" style="justify-content: center">
                <div class="bg-white p-5 rounded-xl text-center ">
                    <div class="text-right inline-block mb-5 text-green-white py-2 px-10 text-2xl font-bold  text-white rounded-xl text-right"
                        style="background:#1E5CAA">Nomor</div>
                    @foreach ($listSoal as $s)
                        <div class=" text-2xl font-bold text-center">{{ $s->nomor }}</div>
                    @endforeach
                </div>
                
                <div class="bg-white rounded-xl p-5 px-10 ml-5 text-center">
                    <div class="text-right mb-5 inline-block text-green-white py-2 px-10 text-2xl font-bold  text-white rounded-xl text-right"
                        style="background:#1E5CAA">Status</div>
                    @foreach ($listSoal as $s)
                        <div class=" text-2xl font-medium text-center">
                            @if (Auth::user()->answerPenyisihans->where('soal', $s->id)->first() != null)
                                @if (Auth::user()->answerPenyisihans->where('soal', $s->id)->first()->jawaban != null)
                                    @if (Auth::user()->answerPenyisihans->where('soal', $s->id)->first()->ragu == 1)
                                        <span class="text-yellow-500">
                                            Ragu-ragu
                                        </span>
                                    @else
                                        <span class="text-green-500">
                                            Sudah terjawab
                                        </span>
                                    @endif
                                @else
                                    <span class="text-red-500">
                                        Belum Dijawab
                                    </span>
                                @endif
                            @else
                                <span class="text-red-500">
                                    Belum Dijawab
                                </span>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
            </form>
            <div style="justify-content: space-between" class="flex mt-5 justify-beetween">
                <div>
                    <a href="{{route('startPenyisihan','1')}}"><button style="background-color: #1E5CAA
                        " class="text-center text-3xl font-bold p-5 text-white rounded-md hover:bg-blue-800 ">Kembali</button></a>
                </div>
                <div>
                    <a href="{{route('penyisihanconfirm')}}"><button style="background-color: #1E5CAA
                        " class="text-center text-3xl font-bold p-5 text-white rounded-md bg-blue-700 hover:bg-blue-800 ">Kumpulkan</button></a>

                </div>

            </div>
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
