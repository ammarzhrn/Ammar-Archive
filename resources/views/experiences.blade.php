<x-app-layout>

    <div style="background-image: url('/images/bg_experiences.webp'); background-position: center; background-size: cover; background-repeat: no-repeat; background-attachment: fixed; overflow: hidden" 
        class="w-full h-screen relative transition-opacity duration-500 ease-in-out opacity-100">

        <div class="w-full top-0 py-20 flex justify-center group">
            <a class="w-[300px] text-start text-white font-extralight text-lg px-1 bg-black bg-opacity-0 hover:bg-white hover:text-black transition flex justify-between items-center" href="{{route('aboutme')}}">
                <span>back</span>
                <svg height="16" viewBox="0 0 13 12" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.752513 3.00251C0.615829 3.1392 0.615829 3.3608 0.752513 3.49749L2.9799 5.72487C3.11658 5.86156 3.33819 5.86156 3.47487 5.72487C3.61156 5.58819 3.61156 5.36658 3.47487 5.2299L1.49497 3.25L3.47487 1.2701C3.61156 1.13342 3.61156 0.91181 3.47487 0.775126C3.33819 0.638443 3.11658 0.638443 2.9799 0.775126L0.752513 3.00251ZM5.5 11.1H8.25V10.4H5.5V11.1ZM8.25 2.9H1V3.6H8.25V2.9ZM12.35 7C12.35 4.73563 10.5144 2.9 8.25 2.9V3.6C10.1278 3.6 11.65 5.12223 11.65 7H12.35ZM8.25 11.1C10.5144 11.1 12.35 9.26437 12.35 7H11.65C11.65 8.87777 10.1278 10.4 8.25 10.4V11.1Z" fill="white"/>
                </svg>
            </a>
        </div>
    
        <div class="absolute top-40 inset-x-[10%] max-lg:inset-x-[5%] grid grid-cols-1 gap-5">
            <h1 class="w-full text-start text-white font-thin text-5xl mb-2 max-md:backdrop-invert">Experiences</h1>
            {{-- Education --}}
            <div class="w-full grid grid-cols-1 gap-2">
                <h1 class="text-start text-white font-thin text-3xl">Education</h1>
                <div class="w-full grid grid-cols-1 gap-5">
                    {{-- Item Experience --}}
                    <div class="group w-full border overflow-hidden">
                        <!-- Header -->
                        <div class="w-full px-[1%] py-2 flex justify-between items-center bg-white">
                            <h1 class="text-start text-zinc-600 font-thin text-2xl">SMK IDN Boarding School</h1>
                            <h1 class="text-end text-zinc-500 font-thin text-lg">Software Engineering Major</h1>
                        </div>
                        <div class="w-full px-[1%] flex justify-between items-center bg-zinc-200">
                            <h1 class="text-start text-zinc-600 font-thin text-lg">2023 - Present</h1>
                        </div>
            
                        <!-- Hidden content (images) -->
                        <div class="max-h-0 group-hover:max-h-[200px] transition-all duration-300 ease-in-out overflow-hidden">
                            <div class="grid grid-cols-2 border border-white bg-white">
                                <img src="/images/school1.webp" class="w-full h-[200px] object-cover" alt="">
                                <img src="/images/school2.webp" class="w-full h-[200px] object-cover" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Work --}}
            <div class="w-full grid grid-cols-1 gap-2">
                <h1 class="text-start text-white font-thin text-3xl">Work</h1>
                <div class="w-full grid grid-cols-1 gap-5">
                    <!-- Item Experience -->
                    <div class="group w-full border overflow-hidden">
                        <!-- Header -->
                        <div class="w-full px-[1%] py-2 flex justify-between items-center bg-white">
                            <h1 class="text-start text-zinc-600 font-thin text-2xl">PT Media Telekomunikasi Mandiri</h1>
                            <h1 class="text-end text-zinc-500 font-thin text-lg">Intern Full-Stack Engineer</h1>
                        </div>
                        <div class="w-full px-[1%] flex justify-between items-center bg-zinc-200">
                            <h1 class="text-start text-zinc-600 font-thin text-lg">May 2025 - Present</h1>
                        </div>
            
                        <!-- Hidden content (images) -->
                        <div class="max-h-0 group-hover:max-h-[200px] transition-all duration-300 ease-in-out overflow-hidden">
                            <div class="grid grid-cols-2 border border-white bg-white">
                                <img src="/images/work1.webp" class="w-full h-[200px] object-cover" alt="">
                                <img src="/images/work2.webp" class="w-full h-[200px] object-cover" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Competition --}}
            <div class="w-full grid grid-cols-1 gap-2">
                <h1 class="text-start text-white font-thin text-3xl">Competition</h1>
                <div class="w-full grid grid-cols-1 gap-5">
                    {{-- Item Experience --}}
                    <div class="group w-full border overflow-hidden">
                        <!-- Header -->
                        <div class="w-full px-[1%] py-2 flex justify-between items-center bg-white">
                            <h1 class="text-start text-zinc-600 font-thin text-2xl">1st Winner of Full-Stack Competition</h1>
                            <h1 class="text-end text-zinc-500 font-thin text-lg">Coding League 2024 by SMKDEV & GITS Indonesia</h1>
                        </div>
                        <div class="w-full px-[1%] flex justify-between items-center bg-zinc-200">
                            <h1 class="text-start text-zinc-600 font-thin text-lg">September 2024</h1>
                        </div>
            
                        <!-- Hidden content (images) -->
                        <div class="max-h-0 group-hover:max-h-[200px] transition-all duration-300 ease-in-out overflow-hidden">
                            <div class="grid grid-cols-2 border border-white bg-white">
                                <img src="/images/work1.webp" class="w-full h-[200px] object-cover" alt="">
                                <img src="/images/work2.webp" class="w-full h-[200px] object-cover" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        
    </div>

</x-app-layout>
    