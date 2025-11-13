<x-app-layout>

    <div style="background-image: url('/images/background_aboutme.png'); background-position: center; background-size: cover; background-repeat: no-repeat; background-attachment: fixed; overflow: hidden" class="w-full h-screen relative">

        <div class="w-full top-0 py-20 flex justify-center">
            <a class="w-[300px] text-start text-white font-extralight text-lg px-1 hover:bg-white hover:text-black transition flex justify-between items-center" href="{{route('home')}}">
                <span>back</span>
                <svg height="16" viewBox="0 0 13 12" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.752513 3.00251C0.615829 3.1392 0.615829 3.3608 0.752513 3.49749L2.9799 5.72487C3.11658 5.86156 3.33819 5.86156 3.47487 5.72487C3.61156 5.58819 3.61156 5.36658 3.47487 5.2299L1.49497 3.25L3.47487 1.2701C3.61156 1.13342 3.61156 0.91181 3.47487 0.775126C3.33819 0.638443 3.11658 0.638443 2.9799 0.775126L0.752513 3.00251ZM5.5 11.1H8.25V10.4H5.5V11.1ZM8.25 2.9H1V3.6H8.25V2.9ZM12.35 7C12.35 4.73563 10.5144 2.9 8.25 2.9V3.6C10.1278 3.6 11.65 5.12223 11.65 7H12.35ZM8.25 11.1C10.5144 11.1 12.35 9.26437 12.35 7H11.65C11.65 8.87777 10.1278 10.4 8.25 10.4V11.1Z" fill="white"/>
                    </svg>
            </a>
        </div>

        <div class="absolute top-60 left-[10%] grid grid-cols-1 gap-8 max-lg:left-4">
            <div class="relative w-[550px] h-[310px]">
                <img class="absolute top-0 left-0 w-[270px] origin-top-right rotate-0 hover:rotate-6 transition border z-20"src="/images/photo1.webp" alt="">
                <img class="absolute bottom-1 right-10 w-[270px] border rotate-6 origin-top-left hover:rotate-0 transition" src="/images/photo2.webp" alt="">
            </div>
            <div class="w-[550px] flex justify-start items-start gap-2 flex-col relative max-lg:w-full max-lg:pr-4">
                <div class="w-full flex justify-between items-center">
                    <h1 class="text-white font-bold text-xl">Hi, I’m Ammar Zahran Syafiq</h1>
                    <a class="text-start text-white font-extralight text-lg px-2 border-b-2 hover:bg-white hover:text-black transition" href="{{route('experiences.index')}}">
                        my experiences
                    </a>
                </div>
                <h1 class="text-white font-thin text-xl text-justify">a 17-year-old Software Engineering student with 3 years of experience in web development. I enjoy crafting clean, responsive, and user-friendly websites. Beyond coding, I explore photography, graphic design, and video editing to keep my creativity alive.</h1>
                <img class="absolute -bottom-24 -left-4 w-[260px] z-20 hover:rotate-6 transition max-lg:left-0" src="/images/pantun.png" alt="">
            </div>
        </div>
      
        <a class="group cursor-pointer absolute w-[300px] right-[30%] top-[70%] text-start text-black font-extralight text-base px-1 hover:bg-white hover:text-black transition flex justify-center hover:justify-between items-center max-xl:hidden" href="https://www.instagram.com/thedailyofabe/" target="_blank">
            <span class="hidden group-hover:block">Photographed by</span>
            <img src="https://wikis.tid.es/gvp-public/images/thumb/9/9f/Infobox_info_icon_white.svg.png/600px-Infobox_info_icon_white.svg.png" class="h-5 block group-hover:hidden" alt="">
            <span class="hidden group-hover:block">@thedailyofabe</span>
        </a> 

    </div>
    
    </x-app-layout>