<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @elseif (file_exists(public_path('build/manifest.json')))
        @php
            $manifestPath = public_path('build/manifest.json');
            $manifest = json_decode(file_get_contents($manifestPath), true);
            $cssFile = $manifest['resources/css/app.css']['file'] ?? null;
            $jsFile = $manifest['resources/js/app.js']['file'] ?? null;
        @endphp
        @if($cssFile)
            <link rel="stylesheet" href="{{ asset('build/' . $cssFile) }}">
        @endif
        @if($jsFile)
            <script type="module" src="{{ asset('build/' . $jsFile) }}"></script>
        @endif
    @else
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <style>
        /* Hilangin cursor di semua elemen */
        * {
    cursor: none !important;
}



        #follower, #follower * {
            pointer-events: none !important;
            cursor: none !important;
        }



        /* Lingkaran merah */
        #redDot {
            background: radial-gradient(circle, rgba(255,0,0,1) 60%, rgba(255,0,0,0.7) 80%, rgba(255,0,0,0) 100%);
            box-shadow: 
                0 0 6px rgba(255,0,0,0.9),
                0 0 12px rgba(255,0,0,0.7),
                0 0 25px rgba(255,0,0,0.5);
            transition: transform 0.3s ease-out;
        }

        /* Membesar saat hover link / button */
        #redDot.red-dot-large {
            transform: scale(2.5) translate(-50%, -50%);
        }

        .select-none {
            user-select: none;
        }
    </style>
</head>
<body style="font-family: 'Helvetica', sans-serif;" class="font-sans antialiased bg-black">
    <div class="min-h-screen bg-gray-100">

        @isset($header)
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <main class="select-none">
            {{ $slot }}
        </main>

        <!-- Custom Cursor -->
        <div id="follower" class="z-[70] fixed w-20 h-20 pointer-events-none -translate-x-1/2 -translate-y-1/2 overflow-visible hidden"> 
            <div class="w-full h-full border border-neutral-300 shadow-inner shadow-neutral-700 backdrop-invert">
                <svg viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'>
                    <filter id='noiseFilter'>
                        <feTurbulence type='fractalNoise' baseFrequency='2' numOctaves='6' stitchTiles='stitch'/>
                    </filter>
                    <rect width='100%' height='100%' filter='url(#noiseFilter)' opacity='0.8'/>
                </svg>
            </div>
            <div id="redDot" class="absolute left-1/2 top-1/2 w-2 h-2 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        </div>
        
        <!-- Custom Right Click Menu -->
        <div id="customMenu" class="hidden absolute z-[60] bg-white px-1 border group">
            <a href="{{route('contact')}}" class="text-center group-hover:underline transition">Just Contact Me :)</a>
        </div>
    </div>

    <script>
        const menu = document.getElementById("customMenu");
        const follower = document.getElementById("follower");
        const redDot = document.getElementById("redDot");

        document.body.style.cursor = "none";

        document.addEventListener("pointermove", () => {
        document.body.style.cursor = "none";
        }, { passive: true });


        // Right click menu custom
        document.addEventListener("contextmenu", (e) => {
            e.preventDefault();
            menu.style.top = e.pageY + "px";
            menu.style.left = e.pageX + "px";
            menu.classList.remove("hidden");
        });
        document.addEventListener("click", () => menu.classList.add("hidden"));

        // Cursor animation setup
        let x = 0, y = 0;
        let dotX = 0, dotY = 0;
        let targetX = 0, targetY = 0;
        let initialized = false;

        document.addEventListener("pointermove", (e) => {
            targetX = e.pageX;
            targetY = e.pageY;
            if (!initialized) {
                x = dotX = targetX;
                y = dotY = targetY;
                follower.style.left = x + "px";
                follower.style.top = y + "px";
                follower.classList.remove("hidden");
                initialized = true;
            }
        }, { once: true });

        document.addEventListener("mousemove", (e) => {
            targetX = e.pageX;
            targetY = e.pageY;
        });

        function animate() {
            if (initialized) {
                x += (targetX - x) * 0.1;
                y += (targetY - y) * 0.1;
                follower.style.left = x + "px";
                follower.style.top = y + "px";

                dotX += (targetX - dotX) * 0.4;
                dotY += (targetY - dotY) * 0.4;
                redDot.style.left = (dotX - x + follower.offsetWidth/2) + "px";
                redDot.style.top  = (dotY - y + follower.offsetHeight/2) + "px";
            }
            requestAnimationFrame(animate);
        }
        animate();
// Hover effect on interactive elements
document.querySelectorAll("a, button").forEach((el) => {
    el.addEventListener("mouseenter", () => redDot.classList.add("red-dot-large"));
    el.addEventListener("mouseleave", () => redDot.classList.remove("red-dot-large"));
});

// Hide custom cursor kalau keluar window/tab
window.addEventListener("pointerout", (e) => {
    if (!e.relatedTarget) { // bener2 keluar window
        follower.classList.add("hidden");
    }
});

window.addEventListener("pointerover", (e) => {
    if (!e.relatedTarget) { // bener2 masuk lagi ke window
        follower.classList.remove("hidden");
    }
});

// Tambahan: kalau tab di-blur / pindah aplikasi
window.addEventListener("blur", () => {
    follower.classList.add("hidden");
});
window.addEventListener("focus", () => {
    follower.classList.remove("hidden");
});


    </script>
</body>
</html>
