<x-app-layout>

    <div style="background-image: url('/images/bg-web.webp'); background-position: top; background-size: cover; background-repeat: no-repeat; background-attachment: fixed; overflow: hidden" class="w-full h-screen relative transition-opacity duration-500 ease-in-out opacity-100">
        {{-- Button --}}
        <div class="w-full absolute top-0 py-20 flex justify-center group z-50">
            <a class="w-[300px] text-start text-white font-extralight text-lg px-1 bg-black bg-opacity-30 hover:bg-white hover:text-black transition flex justify-between items-center" href="{{route('archive.index')}}">
                <span>back</span>
                <svg height="16" viewBox="0 0 13 12" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.752513 3.00251C0.615829 3.1392 0.615829 3.3608 0.752513 3.49749L2.9799 5.72487C3.11658 5.86156 3.33819 5.86156 3.47487 5.72487C3.61156 5.58819 3.61156 5.36658 3.47487 5.2299L1.49497 3.25L3.47487 1.2701C3.61156 1.13342 3.61156 0.91181 3.47487 0.775126C3.33819 0.638443 3.11658 0.638443 2.9799 0.775126L0.752513 3.00251ZM5.5 11.1H8.25V10.4H5.5V11.1ZM8.25 2.9H1V3.6H8.25V2.9ZM12.35 7C12.35 4.73563 10.5144 2.9 8.25 2.9V3.6C10.1278 3.6 11.65 5.12223 11.65 7H12.35ZM8.25 11.1C10.5144 11.1 12.35 9.26437 12.35 7H11.65C11.65 8.87777 10.1278 10.4 8.25 10.4V11.1Z" fill="white"/>
                    </svg>
            </a>
        </div>
    
        <div class="absolute left-[10%] top-44 grid grid-cols-1 gap-7 max-lg:left-[5%] z-50">
            <h1 class="w-full text-start text-white font-thin text-5xl mb-2 max-md:backdrop-invert">Website</h1>
            <div class="w-[400px] grid grid-cols-1 gap-5" id="project-links">
                <a data-id="0" class="project-link group w-full text-start flex justify-between items-end gap-10 text-white font-extralight text-lg px-1 hover:border-b transition max-md:backdrop-invert cursor-pointer">
                    <span>1st</span>
                    <span class="text-2xl font-thin group-hover:tracking-tight transition-all">Menara Hijau Booking Portal</span>
                </a>
                <a data-id="1" class="project-link group w-full text-start flex justify-between items-end gap-10 text-white font-extralight text-lg px-1 hover:border-b transition max-md:backdrop-invert cursor-pointer">
                    <span>2nd</span>
                    <span class="text-2xl font-thin group-hover:tracking-tight transition-all">Pemkab Cirebon CSR Web</span>
                </a>
                <a data-id="2" class="project-link group w-full text-start flex justify-between items-end gap-10 text-white font-extralight text-lg px-1 hover:border-b transition max-md:backdrop-invert cursor-pointer">
                    <span>3rd</span>
                    <span class="text-2xl font-thin group-hover:tracking-tight transition-all">ICE 4.0 CyberSec Event Web</span>
                </a>
                <a data-id="3" class="project-link group w-full text-start flex justify-between items-end gap-10 text-white font-extralight text-lg px-1 hover:border-b transition max-md:backdrop-invert cursor-pointer">
                    <span>4th</span>
                    <span class="text-2xl font-thin group-hover:tracking-tight transition-all">Brainee - IT Quiz Web</span>
                </a>
                <a data-id="4" class="project-link group w-full text-start flex justify-between items-end gap-10 text-white font-extralight text-lg px-1 hover:border-b transition max-md:backdrop-invert cursor-pointer">
                    <span>5th</span>
                    <span class="text-2xl font-thin group-hover:tracking-tight transition-all">KickStart - Fashion Store Web</span>
                </a>
            </div>
        </div>

        {{-- Container kanan --}}
        <div class="absolute top-44 right-[2vw] w-[56.5vw] h-[90vh] border border-neutral-500 flex justify-center items-start" style="background: linear-gradient(to bottom, rgba(57, 57, 57, 0.233), rgba(0, 0, 0, 0.767))">
            <div class="w-full grid grid-cols-1 gap-4 p-[1.5vh]" id="project-detail">
                {{-- Default placeholder sebelum ada project dipilih --}}
                <div id="placeholder" class="w-full h-full flex flex-col items-center justify-center text-white text-2xl font-extralight bg-black bg-opacity-50 backdrop-blur-sm">
                    <p>Please select a website</p>
                </div>
                {{-- Detail project (hidden dulu) --}}
                <div id="project-content" class="hidden w-full grid grid-cols-1 gap-4">
                    <div class="w-full h-[450px] relative">
                        <img id="project-image" src="" alt="" class="w-full h-full object-cover">
                        <a id="project-url" class="absolute top-[2vh] right-0 bg-black pl-9 pr-2 py-1 text-lg text-white hover:bg-transparent hover:border hover:border-dotted hover:border-black hover:text-black transition" href="" target="_blank">Visit Site</a>
                    </div>
                    <div class="w-full grid grid-cols-1 gap-2">
                        <h1 id="project-title" class="text-white font-semibold text-3xl"></h1>
                        <h1 id="project-desc" class="text-white font-normal text-xl text-justify"></h1>
                        <h1 id="project-stack" class="text-white font-medium text-xl text-start"></h1>
                    </div>
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

    </div>

    <script>
        const projects = [
            {
                image: "/images/thumbnail-menarahijau.png",
                title: "Menara Hijau Booking Portal",
                desc: "One-Stop Platform for Effortless Office Space Reservation. A user-friendly website designed to streamline room bookings at Menara Hijau Office Building. Simplifying reservation management for tenants, admins, and facility teams through an intuitive digital solution.",
                stack: "Stack : Laravel, Tailwind, MySQL, PHP.",
                url: "https://menarahijau.com"
            },
            {
                image: "/images/thumbnail-csr.png",
                title: "Pemkab Cirebon CSR Web",
                desc: "This website was developed for the Coding League 2024 competition organized by SMKDEV & GITS Indonesia, where my team and I proudly won 1st place. It serves as a Corporate Social Responsibility (CSR) management platform for Pemkab Cirebon, designed to organize and monitor CSR-related data with real-time charts and analytics available on both the admin dashboard and user interface. The website was not published publicly, as it was created solely for the competition purpose.",
                stack: "Stack : Laravel, Tailwind, Chart.js, MySQL, PHP, HTML, CSS, JavaScript.",
                url: "https://github.com/ammarzhrn/csr_cirebon_3_bit"
            },
            {
                image: "/images/thumbnail-ice.png",
                title: "ICE 4.0 CyberSec Event Web",
                desc: "The ICE 4.0 CyberSec Event Web was developed for the ICE 4.0 Cyber Security competition, an event organized by BSSN (Badan Siber dan Sandi Negara) in collaboration with PT Media Telekomunikasi Mandiri, the company where I’m currently interning. I served as a Front-End Developer on this project, and it was the first website that my fellow intern and I built entirely from scratch. The website featured comprehensive event details, including the competition overview, previous event history, event rundown, FAQ, and a real-time leaderboard that was actively used during the competition. The website is no longer active, as it was created specifically for that event.",
                stack: "Stack : Vue.js, Nuxt.js, CSS, TypeScript.",
                url: "/"
            },
            {
                image: "/images/thumbnail-brainee.png",
                title: "Brainee - IT Quiz Web",
                desc: "Brainee – IT Quiz Web was a website developed for the ICOMFEST 2024 competition. My teammate and I created this project as a computer science–themed quiz website, designed and built entirely from scratch. In this project, I served as a Front-End Developer, and we implemented a quiz system that fetched questions dynamically from a public API available on the internet. The platform provided users with an engaging and interactive quiz experience related to IT topics, complete with smooth navigation and responsive design. The website was created specifically for the competition and is no longer active.",
                stack: "Stack : Laravel, Tailwind.",
                url: "https://github.com/ammarzhrn/Brainee_ICOMFEST-2024"
            },
            {
                image: "/images/thumbnail-kickstart.png",
                title: "KickStart - Fashion Store Web",
                desc: "KickStart – Fashion Store Web is a personal project I created as a youth-themed fashion store website. It focuses purely on UI design, built using Tailwind CSS, without any dynamic data or backend functionality. The website features a simple, clean, and modern interface that reflects a casual youth fashion style. It was developed entirely from scratch as a way to practice front-end design and layout implementation. You can access the project repository to explore the design and structure in more detail.",
                stack: "Stack : HTML, CSS, Tailwind, JavaScript.",
                url: "https://github.com/ammarzhrn/KickStart"
            }
        ];

        const links = document.querySelectorAll(".project-link");
        const placeholder = document.getElementById("placeholder");
        const content = document.getElementById("project-content");

        const img = document.getElementById("project-image");
        const title = document.getElementById("project-title");
        const desc = document.getElementById("project-desc");
        const stack = document.getElementById("project-stack");
        const url = document.getElementById("project-url");

        links.forEach(link => {
            link.addEventListener("click", () => {
                const id = link.getAttribute("data-id");
                const project = projects[id];

                // hide placeholder, show project content
                placeholder.classList.add("hidden");
                content.classList.remove("hidden");

                // isi data project
                img.src = project.image;
                title.textContent = project.title;
                desc.textContent = project.desc;
                stack.textContent = project.stack;
                url.href = project.url;
            });
        });
    </script>

</x-app-layout>
