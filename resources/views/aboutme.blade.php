<x-app-layout>

    <div style="overflow: hidden" class="w-full h-screen grid grid-cols-1 relative bg-black">

        <div class="absolute w-full top-0 py-10 flex justify-end group z-50">
            <a class="w-[30vw] text-start text-white font-extralight text-lg px-5 bg-black bg-opacity-70 backdrop-blur-sm hover:bg-white hover:text-black transition flex justify-between items-center" href="{{route('home')}}">
                <span>back</span>
                <svg height="16" viewBox="0 0 13 12" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.752513 3.00251C0.615829 3.1392 0.615829 3.3608 0.752513 3.49749L2.9799 5.72487C3.11658 5.86156 3.33819 5.86156 3.47487 5.72487C3.61156 5.58819 3.61156 5.36658 3.47487 5.2299L1.49497 3.25L3.47487 1.2701C3.61156 1.13342 3.61156 0.91181 3.47487 0.775126C3.33819 0.638443 3.11658 0.638443 2.9799 0.775126L0.752513 3.00251ZM5.5 11.1H8.25V10.4H5.5V11.1ZM8.25 2.9H1V3.6H8.25V2.9ZM12.35 7C12.35 4.73563 10.5144 2.9 8.25 2.9V3.6C10.1278 3.6 11.65 5.12223 11.65 7H12.35ZM8.25 11.1C10.5144 11.1 12.35 9.26437 12.35 7H11.65C11.65 8.87777 10.1278 10.4 8.25 10.4V11.1Z" fill="white"/>
                </svg>
            </a>
        </div>

        <div class="w-full h-[40vh] flex justify-start items-center">
            <div class="w-[70vw] h-full relative">
                <div class="w-[50%] absolute top-[1.5rem] left-[1.25rem]">
                    <h1 class="text-white text-[1.29rem] leading-tight text-start">Hello! I’m Ammar — a 17-year-old Software Engineering student with 3 years of experience in web development. I enjoy crafting clean, minimalist, responsive, and user-friendly websites. Beyond coding, I explore photography and video editing to keep my creativity alive.</h1>
                </div>
                <div class="w-[67.6vw] absolute bottom-[1.5rem] left-[1.25rem] flex items-end justify-between">
                    <div class="w-[30%] grid grid-cols-1 gap-2">
                        <div class="grid grid-cols-1 text-[1.22rem]">
                            <h1 class="text-white font-semibold text-end">SMK IDN Boarding School</h1>
                            <div class="flex justify-end items-center gap-2 text-[1.1rem]">
                                <h1 class="text-white text-end font-normal">
                                    2023 - Present
                                </h1>
                                <h1 class="text-white">|</h1>
                                <h1 class="text-white text-end font-thin">
                                    Software Engineering
                                </h1>
                            </div>
                        </div>
                        <h1 class="text-white font-semibold text-[1.4rem] text-end">Education</h1>
                    </div>
                    <div class="w-[30%] grid grid-cols-1 gap-2">
                        <div class="grid grid-cols-1 text-[1.22rem]">
                            <h1 class="text-white font-semibold text-end">PT Media Telekomunikasi Mandiri</h1>
                            <div class="flex justify-end items-center gap-2 text-[1.1rem]">
                                <h1 class="text-white text-end font-normal">
                                    2025 - Present
                                </h1>
                                <h1 class="text-white">|</h1>
                                <h1 class="text-white text-end font-thin">
                                    Intern Full-Stack Engineer
                                </h1>
                            </div>
                        </div>
                        <h1 class="text-white font-semibold text-[1.4rem] text-end">Job</h1>
                    </div>
                    <div class="w-[34%] grid grid-cols-1 gap-2">
                        <div class="grid grid-cols-1 text-[1.21rem]">
                            <h1 class="text-white font-semibold text-end">1st Winner of Full-Stack Competition</h1>
                            <div class="flex justify-end items-center gap-2 text-[1.1rem]">
                                <h1 class="text-white text-end font-normal">
                                    Sept 2024
                                </h1>
                                <h1 class="text-white">|</h1>
                                <h1 class="text-white text-end font-thin">
                                    Coding League 2024 by SMKDEV
                                </h1>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 text-[1.21rem]">
                            <h1 class="text-white font-semibold text-end">2nd Winner of Business Plan Competition</h1>
                            <div class="flex justify-end items-center gap-2 text-[1.1rem]">
                                <h1 class="text-white text-end font-normal">
                                    Sept 2024
                                </h1>
                                <h1 class="text-white">|</h1>
                                <h1 class="text-white text-end font-thin">
                                    Wafi Fest 2024 by Al Wafi IBS
                                </h1>
                            </div>
                        </div>
                        <h1 class="text-white font-semibold text-[1.4rem] text-end">Achievement</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-[70vw] h-[60vh]">
            <img src="https://images.unsplash.com/photo-1739935537397-dcd1074bbaef?q=80&w=3473&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Thumbnail" class="w-full h-full object-cover">
        </div>

        <div class="absolute bottom-[2.5vh] right-[1.5vw] left-[1.5vw] h-10 flex justify-between items-end z-[55]">
            <h1 class="text-start text-white font-bold text-sm">
                AMMAR ZAHRAN SYAFIQ ©️ 2025  <br>ALL RIGHTS RESERVED 
            </h1>
            <h1 class="text-end text-white font-bold text-sm">
                MADE BY MYSELF
            </h1>
        </div>

        <img src="/images/landing-image.webp" alt="" class="absolute right-0 h-[100%] w-[30vw] object-cover z-10 border-l-4 border-black">
        {{-- <img src="/images/aboutme-quotes.png" alt="" class="absolute top-[7%] right-[8.5vw] z-10 w-[350px] object-cover object-bottom rotate-0 hover:-rotate-6 transition-all duration-200 ease-in-out"> --}}
    </div>
    
    
    </x-app-layout>