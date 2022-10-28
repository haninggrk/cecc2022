

<x-guest-layout>
  <script src="https://cdn.tailwindcss.com"></script>

{{-- Corner Cosmetic & Logo Pack --}}



{{-- <img class="absolute top-0 left-0 -mt-12 -ml-44" src="{{asset('img/LeftCorner.svg')}}"> --}}
<div class="bg-l-blue pt-10 w-full  -mt-20" style="">

<div>
<img class="mx-auto transition-all duration-150 ease-out " style="width: 20vw" src="{{asset('img/LogoPack.svg')}}">
</div>
<div class="relative">
<img class="absolute -mt-12" src="{{asset('img/ChemicalClutter.svg')}}">
<div class="">

<div class="relative"> 
<img style="" class="w-full -z-10"  src="{{asset('img/Boat.svg')}}?id=222">
{{-- <img class="absolute -mt-12 z-10 top-14 mx-auto left-2 right-0" style="width:62%vw; top:3rem" src="{{asset('img/Line.svg')}}"> --}}

</div>
</div>
<div class="grid bg-d-blue grid-cols-5 items-center text-center font-extrabold text-xs lg:text-xl xl:text-xl  md:text-xs  z-30" style=" color:#9FCFE1">
  <div class="col-span-1 border-r-2 border-black">
    <a href="{{route('guidance')}}" class=" hover:text-white @if(request()->get('h') == "ap" or request()->get('h') == "")text-white @endif align-middle " href=""><h3 class="sm:text-xs lg:text-xl xl:text-xl  md:text-xl">Alur Pendaftaran</h3></a>
  </div>
  <div class="col-span-1 border-r-2 h-full flex items-center  justify-center border-black">
    <a href="{{route('guidance')}}?h=s" class="hover:text-white @if(request()->get('h') == "s" )text-white @endif "  href=""><h3 class="sm:text-xs lg:text-xl xl:text-xl  md:text-xl">Silabus</h3></a>
  </div>
  <div class="col-span-1 border-r-2 items-center  justify-center flex h-full border-black">
    <a href="{{route('guidance')}}?h=p" class="hover:text-white @if(request()->get('h') == "p" )text-white @endif" href=""><h3 class="sm:text-xs lg:text-xl xl:text-xl  md:text-xl">Penyisihan</h3></a>
  </div>
  <div class="col-span-1 border-r-2 items-center  justify-center flex border-black h-full">
     <a href="{{route('guidance')}}?h=sf" <span  class="hover:text-white @if(request()->get('h') == "sf" )text-white @endif" href="{{route('guidance')}}?h=sf"><h3 class="sm:text-xs lg:text-xl xl:text-xl  md:text-xl">Semi Final</h3></span></a>
  </div>
  <div class="col-span-1 h-full items-center  justify-center flex">
     <a href="{{route('guidance')}}?h=f" <span class="hover:text-white @if(request()->get('h') == "f" )text-white @endif" href="{{route('guidance')}}?h=f"><h3 class="sm:text-xs lg:text-xl xl:text-xl  md:text-xl">Final</h3></span></a>
  </div>
  
</div>
<div class="bg-d-blue  -mt-1 relative ">
<div class="md:px-56 sm:px-5 xl:px-56 lg:px-56 z-20 overflow-y-hidden" >
  <!--<img class="absolute top-0" style="" src="{{asset('img/FishClutter.svg')}}">-->

  @if(request()->get('h') == "ap" or request()->get('h') == "")
  <img class="sm:mt-3 md:mt-24 xl:mt-24 lg:mt-24 z-20" style="" src="{{asset('img/alurpendaftaran.svg')}}">
  @elseif(request()->get('h') == "s")
  <img class="sm:mt-3 md:mt-24 xl:mt-24 lg:mt-24" style="" src="{{asset('img/silabus.svg')}}">
  @elseif(request()->get('h') == "p")
  <img class="sm:mt-3 md:mt-24 xl:mt-24 lg:mt-24" style="" src="{{asset('img/penyisihan.svg')}}">
@elseif(request()->get('h') == "sf")
  <img class="sm:mt-3 md:mt-24 xl:mt-24 lg:mt-24" style="" src="{{asset('img/semifinal.svg')}}">
  @elseif(request()->get('h') == "f")
  <img class="sm:mt-3 md:mt-24 xl:mt-24 lg:mt-24" style="" src="{{asset('img/final.svg')}}">
  @endif


    
   
  
    

 
</div>

    <div class="grid grid-cols-2 mt-24">
      <div class=" col-span-1 px-20">
        <img class="mx-auto mt-20" style=""  src="{{asset('img/supportedby.svg')}}">
        <img class="mt-10" src="{{asset('img/SupportLogo.png')}}">

      </div>
      <div class=" col-span-1 px-20">
        <img class="mx-auto mt-20" style="max"  src="{{asset('img/mediapartner.svg')}}">
        <img class="mt-10" src="{{asset('img/MediaLogo.svg')}}">
      </div>
    </div>

<img class="mx-auto mt-20" style="" src="{{asset('img/DasarLaut.svg')}}">
   
</div>
</div>
</div>

</x-guest-layout>
