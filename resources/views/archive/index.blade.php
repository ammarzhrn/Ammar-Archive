<x-app-layout>

    <div style="background-image: url('/images/background_archive.webp'); background-position: center; background-size: cover; background-repeat: no-repeat; background-attachment: fixed; overflow: hidden" 
        class="w-full h-screen relative transition-opacity duration-500 ease-in-out opacity-100">

        <div class="absolute w-full top-0 py-20 flex justify-center group">
            <a class="w-[300px] text-start text-white font-extralight text-lg px-1 bg-black bg-opacity-10 hover:bg-white hover:text-black transition flex justify-between items-center backdrop-invert" href="{{route('home')}}">
                <span>back</span>
                <svg height="16" viewBox="0 0 13 12" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.752513 3.00251C0.615829 3.1392 0.615829 3.3608 0.752513 3.49749L2.9799 5.72487C3.11658 5.86156 3.33819 5.86156 3.47487 5.72487C3.61156 5.58819 3.61156 5.36658 3.47487 5.2299L1.49497 3.25L3.47487 1.2701C3.61156 1.13342 3.61156 0.91181 3.47487 0.775126C3.33819 0.638443 3.11658 0.638443 2.9799 0.775126L0.752513 3.00251ZM5.5 11.1H8.25V10.4H5.5V11.1ZM8.25 2.9H1V3.6H8.25V2.9ZM12.35 7C12.35 4.73563 10.5144 2.9 8.25 2.9V3.6C10.1278 3.6 11.65 5.12223 11.65 7H12.35ZM8.25 11.1C10.5144 11.1 12.35 9.26437 12.35 7H11.65C11.65 8.87777 10.1278 10.4 8.25 10.4V11.1Z" fill="white"/>
                    </svg>
            </a>
        </div>
    
        <div class="absolute left-[10%] top-44 grid grid-cols-1 gap-7 max-lg:left-[5%]">
            <h1 class="w-full text-start text-white font-thin text-5xl mb-2 max-md:backdrop-invert">Archive</h1>
            <div class="w-[350px] grid grid-cols-1 gap-5">
                <a class="group w-full text-start flex justify-between items-end gap-10 text-white font-extralight text-lg px-1 hover:border-b transition max-md:backdrop-invert" href="{{route('archive.web')}}">
                    <span>1st</span>
                    <span class="text-2xl font-thin group-hover:tracking-tight transition-all">Website</span>
                </a>
                <a class="group w-full text-start flex justify-between items-end gap-10 text-white font-extralight text-lg px-1 hover:border-b transition max-md:backdrop-invert" href="{{route('archive.photo')}}">
                    <span>2nd</span>
                    <span class="text-2xl font-thin group-hover:tracking-tight transition-all">Photography</span>
                </a>
            </div>
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
    