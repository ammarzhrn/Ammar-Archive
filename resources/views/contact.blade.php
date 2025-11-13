<x-app-layout class="cursor-none">
    <div class="w-full absolute top-0 py-20 flex justify-center group z-50">
        <a class="w-[300px] text-start text-white font-extralight text-lg px-1 bg-black bg-opacity-30 hover:bg-white hover:text-black transition flex justify-between items-center" href="{{route('home')}}">
            <span>back</span>
            <svg height="16" viewBox="0 0 13 12" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.752513 3.00251C0.615829 3.1392 0.615829 3.3608 0.752513 3.49749L2.9799 5.72487C3.11658 5.86156 3.33819 5.86156 3.47487 5.72487C3.61156 5.58819 3.61156 5.36658 3.47487 5.2299L1.49497 3.25L3.47487 1.2701C3.61156 1.13342 3.61156 0.91181 3.47487 0.775126C3.33819 0.638443 3.11658 0.638443 2.9799 0.775126L0.752513 3.00251ZM5.5 11.1H8.25V10.4H5.5V11.1ZM8.25 2.9H1V3.6H8.25V2.9ZM12.35 7C12.35 4.73563 10.5144 2.9 8.25 2.9V3.6C10.1278 3.6 11.65 5.12223 11.65 7H12.35ZM8.25 11.1C10.5144 11.1 12.35 9.26437 12.35 7H11.65C11.65 8.87777 10.1278 10.4 8.25 10.4V11.1Z" fill="white"/>
                </svg>
        </a>
    </div>

    <div class="w-screnn h-screen flex justify-center items-center bg-black">
        <div class="w-[340px] max-h-[75vh] grid grid-cols-1 gap-9">
            <div class="w-full grid grid-cols-1 gap-3">
                <img class="border border-neutral-700" src="/images/pp-contact.jpeg" alt="">
                <h1 class="text-center text-white font-normal text-lg">connect with me :)</h1>
                <a href="" class="text-center text-white font-thin text-lg hover:underline">linkedin</a>
                <a href="" class="text-center text-white font-thin text-lg hover:underline">instagram</a>
                <a href="" class="text-center text-white font-thin text-lg hover:underline">github</a>
                <a href="" class="text-center text-white font-thin text-lg hover:underline">unsplash</a>
            </div>
            <div class="w-full grid grid-cols-1 gap-3">
                <btn class="text-center text-white font-normal text-lg">contact me</btn>
                <form class="w-full space-y-3">
                    <!-- Name -->
                    <input 
                      type="text" 
                      placeholder="name" 
                      class="w-full bg-black text-[1.2rem] text-thin text-white placeholder-neutral-300 border-[0.06rem] border-neutral-600 focus:border-white focus:outline-none px-2 py-1"
                    />
                
                    <!-- Email -->
                    <input 
                      type="email" 
                      placeholder="email" 
                      class="w-full bg-black text-[1.2rem] text-thin text-white placeholder-neutral-300 border-[0.06rem] border-neutral-600 focus:border-white focus:outline-none px-2 py-1"
                    />
                
                    <!-- Message -->
                    <textarea 
                      placeholder="message" 
                      rows="6"
                      class="w-full max-h-[20vh] bg-black text-[1.2rem] text-thin text-white placeholder-neutral-300 border-[0.06rem] border-neutral-600 focus:border-white focus:outline-none px-2 py-1"
                    ></textarea>
                
                    <!-- Submit -->
                    <input 
                      type="submit" 
                      value="[ send ]" 
                      class="w-full bg-black text-[1.2rem] text-thin text-white text-center hover:underline transition "
                    />
                  </form>
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
    