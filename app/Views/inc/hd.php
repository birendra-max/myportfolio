<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birendra Pradhan ! Developer</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <style>
        /* Smooth icon hover lift */
        .hover-lift {
            transition: transform .2s ease, opacity .2s ease;
        }

        .hover-lift:hover {
            transform: translateY(-2px);
            opacity: .9;
        }

        #sunIcon {
            display: none;
        }
    </style>
</head>
</head>

<body id="body" class="bg-white">
    <!-- ===== Topbar Start ===== -->
    <div class="w-full bg-black text-white/90 py-3 shadow-md sticky top-0 z-50 backdrop-blur-sm bg-opacity-90 border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex items-center justify-between gap-6">

                <!-- Left: Logo + Search -->
                <div class="flex items-center gap-6 flex-shrink-0">
                    <!-- Logo -->
                    <a href="#" class="flex items-center gap-2 font-bold text-lg group">
                        <div class="flex items-center justify-center w-8 h-8 rounded-lg bg-gradient-to-br from-amber-500 to-orange-600 group-hover:rotate-12 transition-transform">
                            <i class="fa-solid fa-code text-white text-sm"></i>
                        </div>
                        <span class="bg-gradient-to-r from-amber-400 to-orange-500 bg-clip-text text-transparent tracking-tight">DevPortfolio</span>
                    </a>

                    <!-- Search Bar -->
                    <div class="hidden md:flex items-center bg-gray-800/50 rounded-lg px-3 py-1.5 w-60 focus-within:ring-1 focus-within:ring-amber-500/50 focus-within:bg-gray-800 transition-all duration-200">
                        <i class="fa-solid fa-magnifying-glass text-amber-500/80 text-sm"></i>
                        <input type="text" placeholder="Search portfolio..." class="bg-transparent text-sm text-white ml-2 w-full outline-none placeholder-gray-500 tracking-tight">
                    </div>
                </div>

                <!-- Center: Contact Info -->
                <div class="hidden lg:flex items-center gap-6 text-sm">
                    <a href="tel:+919692926869" class="inline-flex items-center gap-2 hover:text-amber-400 transition-colors duration-200 group">
                        <div class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center group-hover:bg-amber-500/10 transition-colors">
                            <i class="fa-solid fa-phone text-amber-500/90 text-xs"></i>
                        </div>
                        <span class="font-medium">+91 9692926869</span>
                    </a>
                    <a href="mailto:birendpradhan112@gmail.com" class="inline-flex items-center gap-2 hover:text-amber-400 transition-colors duration-200 group">
                        <div class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center group-hover:bg-amber-500/10 transition-colors">
                            <i class="fa-regular fa-envelope text-amber-500/90 text-xs"></i>
                        </div>
                        <span class="font-medium">Contact Me</span>
                    </a>
                </div>

                <!-- Right: Actions -->
                <div class="flex items-center gap-3">
                    <!-- Socials -->
                    <div class="flex items-center gap-2">
                        <a href="#" class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center hover:bg-amber-500/10 hover:text-amber-400 transition-colors duration-200">
                            <i class="fa-brands fa-linkedin-in text-amber-500/90 text-sm"></i>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center hover:bg-amber-500/10 hover:text-amber-400 transition-colors duration-200">
                            <i class="fa-brands fa-github text-amber-500/90 text-sm"></i>
                        </a>
                        <a href="#" class="hidden sm:inline-flex w-8 h-8 rounded-full bg-gray-800 items-center justify-center hover:bg-amber-500/10 hover:text-amber-400 transition-colors duration-200">
                            <i class="fa-brands fa-x-twitter text-amber-500/90 text-sm"></i>
                        </a>
                    </div>

                    <!-- Divider -->
                    <div class="h-6 w-px bg-gray-700 mx-1 hidden sm:block"></div>

                    <!-- CTA Buttons -->
                    <a href="#" class="hidden md:inline-flex items-center gap-2 rounded-lg bg-gray-800 px-4 py-2 text-sm font-medium hover:bg-amber-500 hover:text-gray-900 transition-colors duration-200 group">
                        <i class="fa-solid fa-download text-amber-500 group-hover:text-gray-900 transition-colors"></i>
                        <span>Download CV</span>
                    </a>
                    <a href="#" class="inline-flex items-center gap-2 rounded-lg bg-gradient-to-r from-amber-500 to-orange-600 px-4 py-2 text-sm font-semibold text-gray-900 hover:shadow-lg hover:shadow-amber-500/20 transition-all duration-200">
                        <i class="fa-solid fa-paper-plane"></i>
                        <span>Hire Me</span>
                    </a>

                    <!-- Dark mode toggle -->
                    <button id="themeToggle" onclick="changeTheam()" class="inline-flex items-center justify-center rounded-lg bg-gray-800 w-10 h-10 hover:bg-amber-500/10 hover:text-amber-400 transition-colors duration-200 cursor-pointer">
                        <i id="sunIcon" class="fa-solid fa-sun text-amber-500 text-lg"></i>
                        <i id="moonIcon" class="fa-solid fa-moon text-amber-500 text-lg"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>


    <script>
        let sun = document.getElementById('sunIcon');
        let moon = document.getElementById('moonIcon');

        function changeTheam() {
            let body = document.getElementById('body');
            if (body.classList.contains('bg-white')) {
                body.classList.remove('bg-white');
                body.classList.add('bg-black');
                sun.style.display = "block";
                moon.style.display = "none";
            } else {
                body.classList.add('bg-white');
                body.classList.remove('bg-black');
                sun.style.display = "none";
                moon.style.display = "block";
            }
        }
    </script>






    <main id="main">