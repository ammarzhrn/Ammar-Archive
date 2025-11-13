<x-app-layout>
    <div id="background" 
        style="background-image: url('/images/background.webp'); background-position: center; background-size: cover; background-repeat: no-repeat; background-attachment: fixed; overflow: hidden" 
        class="w-full h-screen relative transition-opacity duration-100 ease-in-out opacity-100">
    
        <div class="absolute top-60 left-1/2 grid grid-cols-1 gap-2">
            <h1 class="w-full text-start text-white font-bold text-2xl mb-2">AMMAR ZAHRAN SYAFIQ</h1>
            <a class="w-full text-start text-white font-extralight text-lg px-1 hover:bg-white hover:text-black transition" href="{{route('aboutme')}}">about me</a>
            <a class="w-full text-start text-white font-extralight text-lg px-1 hover:bg-white hover:text-black transition" href="{{route('archive.index')}}">archive</a>
            <a class="w-full text-start text-white font-extralight text-lg px-1 hover:bg-white hover:text-black transition" href="{{route('contact')}}">info & contact</a>
        </div>
    </div>

    <div class="absolute bottom-[2.5vh] right-[1.5vw] left-[1.5vw] h-10 flex justify-between items-end">
        <h1 class="text-start text-white font-bold text-sm">
            AMMAR ZAHRAN SYAFIQ ©️ 2025  <br>ALL RIGHTS RESERVED 
        </h1>
        <h1 class="text-end text-white font-bold text-sm">
            MADE BY MYSELF
        </h1>
    </div>
</x-app-layout>
    