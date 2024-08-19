@extends('layouts.app')

@section('title', 'Tentang Desa Pasir Wan Salim')

@section('content')

    <div class="container mx-auto px-4">
        <!-- Background Image Section -->
        <div class="relative mb-12">
            <img src="{{ asset('image/covervm.jpg') }}" alt="Cover Image" class="w-full h-64 object-cover rounded-lg shadow-lg" data-aos="fade-up">
            <div class="absolute inset-0 bg-gradient-to-t from-blue-800 to-blue-500 opacity-70 rounded-lg"></div>
            <div class="absolute inset-0 flex items-center justify-center">
                <h1 class="text-5xl font-extrabold text-white text-center" data-aos="zoom-in">Tentang Desa Pasir Wan Salim</h1>
            </div>
        </div>
        
        <!-- About Desa Section -->
        <div class="relative bg-white rounded-lg shadow-lg p-10 mb-12 text-gray-800" data-aos="fade-up">
            <div class="mb-12" data-aos="fade-right">
                <h2 class="text-4xl font-bold mb-6 text-center text-blue-800">Desa Pasir Wan Salim</h2>
                <div class="p-6 bg-blue-100 rounded-lg shadow-inner text-center" data-aos="zoom-in">
                    <p class="text-2xl font-light text-blue-900">
                        Desa Pasir Wan Salim terletak di Kecamatan Mempawah timur, Kabupaten Mempawah. Desa ini dikenal dengan keindahan alamnya yang memukau serta masyarakatnya yang ramah dan gotong royong. 
                        Sebagai desa yang terus berkembang, Pasir Wan Salim fokus pada pemberdayaan masyarakat serta pelestarian lingkungan untuk kesejahteraan bersama.
                    </p>
                </div>
            </div>
        </div>

        <!-- Visi dan Misi Section -->
        <div class="relative bg-white rounded-lg shadow-lg p-10 mb-12 text-gray-800" data-aos="fade-up">
            <!-- Visi Section -->
            <div class="mb-12" data-aos="fade-right">
                <h2 class="text-4xl font-bold mb-6 text-center text-blue-800">Visi</h2>
                <div class="p-6 bg-blue-100 rounded-lg shadow-inner text-center" data-aos="zoom-in">
                    <p class="text-2xl font-light text-blue-900">"Mewujudkan Kelurahan Pasir Wan Salim yang Sejahtera, Mandiri, dan Berdaya Saing Tinggi melalui Pemberdayaan Masyarakat dan Pembangunan Berkelanjutan."</p>
                </div>
            </div>
            
            <!-- Misi Section -->
            <div>
                <h2 class="text-4xl font-bold mb-6 text-center text-blue-800" data-aos="fade-left">Misi</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Misi 1 -->
                    <div class="p-6 bg-blue-100 rounded-lg shadow-inner text-center" data-aos="zoom-in">
                        <img src="{{ asset('image/edukasi.jpeg') }}" alt="Pendidikan" class="w-full h-32 object-cover mb-4 rounded-lg" data-aos="fade-up">
                        <h3 class="text-xl font-semibold mb-2 text-blue-900">Meningkatkan Kualitas Pendidikan dan Kesehatan</h3>
                        <p class="text-gray-700">Meningkatkan kualitas pendidikan dan kesehatan masyarakat untuk menciptakan generasi yang sehat dan berdaya saing tinggi.</p>
                    </div>
                    <!-- Misi 2 -->
                    <div class="p-6 bg-blue-100 rounded-lg shadow-inner text-center" data-aos="zoom-in">
                        <img src="{{ asset('image/community.jpg') }}" alt="Partisipasi Masyarakat" class="w-full h-32 object-cover mb-4 rounded-lg" data-aos="fade-up">
                        <h3 class="text-xl font-semibold mb-2 text-blue-900">Mendorong Partisipasi Masyarakat</h3>
                        <p class="text-gray-700">Mendorong partisipasi aktif masyarakat dalam pembangunan kelurahan untuk menciptakan lingkungan yang inklusif dan berdaya.</p>
                    </div>
                    <!-- Misi 3 -->
                    <div class="p-6 bg-blue-100 rounded-lg shadow-inner text-center" data-aos="zoom-in">
                        <img src="{{ asset('image/ekonomi.jpg') }}" alt="Ekonomi Lokal" class="w-full h-32 object-cover mb-4 rounded-lg" data-aos="fade-up">
                        <h3 class="text-xl font-semibold mb-2 text-blue-900">Mengembangkan Potensi Ekonomi Lokal</h3>
                        <p class="text-gray-700">Mengembangkan potensi ekonomi lokal untuk kesejahteraan bersama, dengan fokus pada peningkatan kemandirian ekonomi masyarakat.</p>
                    </div>
                    <!-- Misi 4 -->
                    <div class="p-6 bg-blue-100 rounded-lg shadow-inner text-center" data-aos="zoom-in">
                        <img src="{{ asset('image/lingkungan.jpg') }}" alt="Lingkungan" class="w-full h-80 object-contain mb-4 rounded-lg mx-auto" data-aos="fade-up">
                        <h3 class="text-xl font-semibold mb-2 text-blue-900">Mewujudkan Lingkungan Bersih</h3>
                        <p class="text-gray-700">Mewujudkan lingkungan yang bersih, sehat, dan ramah lingkungan melalui berbagai program kebersihan dan penghijauan.</p>
                    </div>
                    
                    <!-- Misi 5 -->
                    <div class="p-6 bg-blue-100 rounded-lg shadow-inner text-center" data-aos="zoom-in">
                        <img src="{{ asset('image/pelayanan.jpg') }}" alt="Pelayanan Publik" class="w-full h-32 object-cover mb-4 rounded-lg" data-aos="fade-up">
                        <h3 class="text-xl font-semibold mb-2 text-blue-900">Meningkatkan Pelayanan Publik</h3>
                        <p class="text-gray-700">Meningkatkan pelayanan publik yang profesional dan transparan, dengan mengutamakan kebutuhan dan kepuasan masyarakat.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Section: Testimoni -->
        <div class="bg-blue-50 rounded-lg shadow-lg p-10 text-gray-800" data-aos="fade-up">
            <h2 class="text-3xl font-bold mb-6 text-center text-blue-800">Testimoni Masyarakat</h2>
            <div class="space-y-8">
                <div class="p-6 bg-white rounded-lg shadow-inner" data-aos="zoom-in">
                    <p class="text-xl font-light text-gray-700">"Sejak program ini dijalankan, banyak perubahan positif yang kami rasakan, terutama dalam hal kebersihan lingkungan dan kualitas pendidikan anak-anak kami."</p>
                    <p class="text-right mt-4 font-semibold text-gray-900">- Bapak Ahmad, Warga Pasir Wan Salim</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-inner" data-aos="zoom-in">
                    <p class="text-xl font-light text-gray-700">"Pelayanan publik di kelurahan kami semakin cepat dan transparan, sangat membantu kami dalam berbagai keperluan administratif."</p>
                    <p class="text-right mt-4 font-semibold text-gray-900">- Ibu Siti, Warga Pasir Wan Salim</p>
                </div>
            </div>
        </div>
    </div>
@endsection
