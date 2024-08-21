<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kelurahan')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body class="antialiased bg-gray-100 flex flex-col min-h-screen">
    <header class="bg-blue-600 p-4 text-white shadow-lg flex justify-between items-center sticky top-0 z-50" data-aos="fade-down">
        <div class="flex items-center space-x-4">
            <img src="{{ asset('image/logo.png') }}" alt="Logo Kelurahan" class="w-10 h-10">
            <div class="flex flex-col">
                <a href="/" class="text-lg font-bold hover:text-yellow-300 transition duration-300">Kelurahan Pasir Wan Salim</a>
                <p class="text-sm mt-1">Kabupaten Mempawah</p>
            </div>
        </div>
        <div class="lg:hidden">
            <button id="navbar-toggle" class="focus:outline-none">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
        <nav class="hidden lg:flex items-center space-x-4">
            <a href="/beranda" class="hover:text-yellow-300 transition duration-300" data-aos="fade-right">Beranda</a>
            <div class="relative dropdown" data-aos="fade-right">
                <button class="hover:text-yellow-300 focus:outline-none transition duration-300 flex items-center">
                    Tentang Desa <i class="fas fa-chevron-down ml-1"></i>
                </button>
                <div class="dropdown-menu">
                    <a href="{{ route('tentang.struktur') }}">Struktur Desa</a>
                    <a href="{{ route('tentang.visiMisi')}}">Tentang Kelurahan</a>
                    <a href="{{ route('tentang.daftarRt')}}">Daftar RT</a>
                </div>
            </div>
            <a href="{{route('Kontak.kontak')}}" class="hover:text-yellow-300 transition duration-300" data-aos="fade-left">Kontak Kami</a>
            <div class="relative dropdown">
                <button class="hover:text-yellow-300 focus:outline-none transition duration-300 flex items-center">
                    {{ Auth::user()->name }} <i class="fas fa-chevron-down ml-1"></i>
                </button>
                <div class="dropdown-menu">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                    <a href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}</a>
                    </form>
                </div>
            </div>
            <form class="relative">
                <input type="text" class="rounded-full pl-10 pr-4 py-1 focus:outline-none focus:ring-2 focus:ring-yellow-300 transition duration-300" placeholder="Search...">
                <button type="submit" class="absolute left-0 top-0 mt-1 ml-2 text-gray-400 hover:text-gray-600 transition duration-300">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </nav>
    </header>
    <div id="mobile-menu" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden transition-opacity duration-300">
        <div class="fixed inset-y-0 left-0 w-60 bg-white p-4 transform -translate-x-full transition-transform duration-300 ease-in-out shadow-lg rounded-tr-lg rounded-br-lg" data-aos="fade-right">
            <button id="mobile-menu-close" class="text-gray-700 focus:outline-none">
                <i class="fas fa-times w-6 h-6"></i>
            </button>
            <nav class="mt-4">
                <a href="/beranda" class="block py-2 px-4 text-gray-800 font-semibold hover:bg-blue-100 rounded transition-colors duration-200 flex items-center" data-aos="fade-right">
                    <i class="fas fa-home mr-2 text-blue-500"></i>
                    Beranda
                </a>
                <button id="mobile-dropdown-button" class="block py-2 px-4 text-gray-800 font-semibold hover:bg-blue-100 rounded transition-colors duration-200 w-full text-left flex items-center focus:outline-none" data-aos="fade-right">
                    <i class="fas fa-info-circle mr-2 text-blue-500"></i>
                    Tentang Desa
                </button>
                <div id="mobile-dropdown-menu" class="ml-4 hidden">
                    <a href="{{ route('tentang.struktur') }}" class="block py-2 px-4 text-gray-600 hover:bg-blue-50 rounded transition-colors duration-200 flex items-center" data-aos="fade-right">
                        <i class="fas fa-sitemap mr-2 text-blue-500"></i>
                        Struktur Desa
                    </a>
                    <a href="{{ route('tentang.visiMisi')}}" class="block py-2 px-4 text-gray-600 hover:bg-blue-50 rounded transition-colors duration-200 flex items-center" data-aos="fade-right">
                        <i class="fas fa-bullseye mr-2 text-blue-500"></i>
                        Tentang Kelurahan
                    </a>
                    <a href="{{ route('tentang.daftarRt')}}" class="block py-2 px-4 text-gray-600 hover:bg-blue-50 rounded transition-colors duration-200 flex items-center" data-aos="fade-right">
                        <i class="fas fa-list-ul mr-2 text-blue-500"></i>
                        Daftar RT
                    </a>
                </div>
                <a href="{{ route('Kontak.kontak')}}" class="block py-2 px-4 text-gray-800 font-semibold hover:bg-blue-100 rounded transition-colors duration-200 flex items-center" data-aos="fade-right">
                    <i class="fas fa-envelope mr-2 text-blue-500"></i>
                    Kontak Kami
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                <a href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();" class="block py-2 px-4 text-gray-800 font-semibold hover:bg-blue-100 rounded transition-colors duration-200 flex items-center" data-aos="fade-right">
                    <i class="fas fa-sign-in-alt mr-2 text-blue-500"></i>
                    Logout
                </a>
                </form>
            </nav>
        </div>
    </div>
    
    <main class="flex-1">
        <div class="container mx-auto p-4">
            @yield('content')
        </div>
    </main>
    <footer class="bg-blue-600 p-4 text-white mt-4 shadow-inner">
        <div class="container mx-auto text-center flex flex-col md:flex-row justify-between items-center">
            <p>&copy; 2024 Kelurahan. All rights reserved.</p>
            <p>Made by Andre Gifano & Rio Aji Febrian</p>
            <div class="flex space-x-4 mt-2 md:mt-0">
                <a href="#" class="hover:text-yellow-300 transition duration-300"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="hover:text-yellow-300 transition duration-300"><i class="fab fa-twitter"></i></a>
                <a href="#" class="hover:text-yellow-300 transition duration-300"><i class="fab fa-instagram"></i></a>
                <a href="#" class="hover:text-yellow-300 transition duration-300"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </footer>
    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
