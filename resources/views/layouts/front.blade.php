<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ahsar May - Little Writer')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <style>
        @font-face {
            font-family: 'Dancing Script';
            src: url({{ asset('fonts/dancing-script/DancingScript-Medium.ttf') }});
        }
    </style>
    
    <!-- Google Ads by Site for isaac.duckcloud.info -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3157572406863018"
     crossorigin="anonymous"></script>
    <!-- Google ads end -->

    <!-- amp ads -->
    <script async custom-element="amp-auto-ads"
            src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
    </script>
    <!-- amp ads end -->
    @yield('styles')
</head>
<body class="font-sans antialiased bg-gray-100">
    <header class="bg-teal-800 text-white p-4">
        <nav class="nav-for-mobile max-w-7xl mx-auto flex justify-between lg:hidden">
            <button id="menu-toggle" class="flex items-center px-3 py-2 border rounded text-gray-200 border-white-600 hover:text-white hover:border-black">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0V15z"/></svg>
            </button>
            <a href="{{ route('home') }}" class="mobile-isaac text-xl font-bold" style="font-family: 'Anton', cursive; src: url({{ asset('fonts/dancing-script/Anton-Regular.ttf') }});">Ahsarmay - Little Writer</a>
        </nav>
        <nav class="hidden lg:flex lg:items-center lg:w-auto lg:space-x-6 lg:text-sm">
            <div class="lg:hidden">
                <a href="{{ route('about') }}" class="block mt-4 lg:inline-block lg:mt-0 hover:bg-emerald-100 hover:text-black px-4 py-2 rounded">About</a>
                <a href="{{ route('blog.index') }}" class="block mt-4 lg:inline-block lg:mt-0 hover:bg-emerald-100 hover:text-black px-4 py-2 rounded">Blog</a>
                <a href="{{ route('contact') }}" class="block mt-4 lg:inline-block lg:mt-0 hover:bg-emerald-100 hover:text-black px-4 py-2 rounded">Contact</a>
            </div>
        </nav>
        <nav id="menu" class="hidden lg:flex lg:items-center lg:w-auto lg:space-x-6 lg:text-sm ml-4 mr-4">
            <a href="{{ route('home') }}" class="block lg:inline-block lg:mt-0 bg-emerald-50 text-black hover:bg-emerald-100 hover:text-black px-4 py-2 rounded">Home</a>
            <div class="flex-1"></div>
            <a href="{{ route('about') }}" class="block lg:inline-block lg:mt-0 bg-emerald-50 text-black hover:bg-emerald-100 hover:text-black px-4 py-2 rounded">About</a>
            <a href="{{ route('blog.index') }}" class="block lg:inline-block lg:mt-0 bg-emerald-50 text-black hover:bg-emerald-100 hover:text-black px-4 py-2 rounded">Blog</a>
            <a href="{{ route('contact') }}" class="block lg:inline-block lg:mt-0 bg-emerald-50 text-black hover:bg-emerald-100 hover:text-black px-4 py-2 rounded">Contact</a>
        </nav>
        <button id="exit-toggle" class="hidden lg:hidden lg:flex lg:items-center lg:w-auto lg:space-x-6 lg:text-sm absolute top-4 right-4">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Exit</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
        </button>
    </header>
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('menu').classList.toggle('hidden');
            document.getElementById('exit-toggle').classList.toggle('hidden');
            document.getElementsByClassName('mobile-isaac')[0].classList.toggle('hidden');
            document.body.classList.toggle('overflow-hidden');
            document.querySelector('.nav-for-mobile').style.marginBottom = '1.5rem';
        });
        document.getElementById('exit-toggle').addEventListener('click', function() {
            document.getElementById('menu').classList.toggle('hidden');
            document.getElementById('exit-toggle').classList.toggle('hidden');
            document.getElementsByClassName('mobile-isaac')[0].classList.toggle('hidden');
            document.body.classList.toggle('overflow-hidden');
            document.querySelector('.nav-for-mobile').style.marginBottom = 'auto';
        });
    </script>
    <main class="py-6">
        @yield('content')
    </main>
    <footer class="bg-teal-800 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Navigation Links -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 text-center sm:text-left">
                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-3 uppercase">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="hover:text-gray-300 transition-colors">Home</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-gray-300 transition-colors">About</a></li>
                        <li><a href="{{ route('blog.index') }}" class="hover:text-gray-300 transition-colors">Blogs</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-gray-300 transition-colors">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact Me -->
                <div>
                    <h3 class="text-lg font-semibold mb-3 uppercase">Contact Me</h3>
                    <ul class="space-y-2">
                        <li><a href="mailto:smileahsarmay@gmail.com" target="_blank" class="hover:text-gray-300 transition-colors">Gmail</a></li>
                        <li><a href="https://www.instagram.com/ahsarmay/" target="_blank" class="hover:text-gray-300 transition-colors">Instagram</a></li>
                        <li><a href="https://www.linkedin.com/in/thaung-ahsar-may-8109581a4/" target="_blank" class="hover:text-gray-300 transition-colors">LinkedIn</a></li>
                    </ul>
                </div>
            </div>

            <!-- Social Icons -->
            <div class="mt-8 flex justify-center space-x-6">
                <a href="mailto:smileahsarmay@gmail.com" target="_blank" aria-label="Gmail" class="hover:text-gray-300 transition-colors">
                    <img src="{{ asset('assets/footer-logo-svg/google-icon-logo-svgrepo-com.svg') }}" alt="Google Icon" class="w-6 h-6">
                </a>
                <a href="https://www.instagram.com/ahsarmay/" target="_blank" aria-label="Instagram" class="hover:text-gray-300 transition-colors">
                    <img src="{{ asset('assets/footer-logo-svg/instagram-2-1-logo-svgrepo-com.svg') }}" alt="Instagram Icon" class="w-6 h-6">
                </a>
                <a href="https://www.linkedin.com/in/thaung-ahsar-may-8109581a4/" target="_blank" aria-label="LinkedIn" class="hover:text-gray-300 transition-colors">
                    <img src="{{ asset('assets/footer-logo-svg/linkedin-icon-2-logo-svgrepo-com.svg') }}" alt="LinkedIn Icon" class="w-6 h-6">
                </a>
            </div>

            <!-- Footer Bottom -->
            <div class="mt-8 text-center text-sm border-t border-gray-700 pt-4">
            &copy; {{ date('Y') }} Ahsar May - Little Writer. All Rights Reserved.
            </div>
        </div>
    </footer>

    @stack('scripts')
    
</body>
</html>

