@extends('layouts.app')

@section('title', 'Informasi Terbaru')

@section('content')
    <div class="container mx-auto py-12 px-4">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-blue-800">Informasi Terbaru</h1>
            <p class="text-lg text-gray-700">Berikut adalah berita dan informasi terbaru mengenai kegiatan dan acara di Kelurahan Pasir Wan Salim.</p>
        </div>

        <!-- Informasi Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Informasi Card 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden" data-aos="fade-up">
                <img src="https://via.placeholder.com/800x400" alt="Berita 1" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-2xl font-semibold text-blue-800 mb-2">Judul Informasi 1</h2>
                    <p class="text-gray-600 mb-4">Deskripsi singkat mengenai informasi atau berita terbaru yang ada di kelurahan.</p>
                    <a href="/informasi/1" class="text-blue-500 hover:underline">Baca selengkapnya</a>
                </div>
            </div>

            <!-- Informasi Card 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden" data-aos="fade-up">
                <img src="https://via.placeholder.com/800x400" alt="Berita 2" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-2xl font-semibold text-blue-800 mb-2">Judul Informasi 2</h2>
                    <p class="text-gray-600 mb-4">Deskripsi singkat mengenai informasi atau berita terbaru yang ada di kelurahan.</p>
                    <a href="/informasi/2" class="text-blue-500 hover:underline">Baca selengkapnya</a>
                </div>
            </div>

            <!-- Informasi Card 3 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden" data-aos="fade-up">
                <img src="https://via.placeholder.com/800x400" alt="Berita 3" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-2xl font-semibold text-blue-800 mb-2">Judul Informasi 3</h2>
                    <p class="text-gray-600 mb-4">Deskripsi singkat mengenai informasi atau berita terbaru yang ada di kelurahan.</p>
                    <a href="/informasi/3" class="text-blue-500 hover:underline">Baca selengkapnya</a>
                </div>
            </div>

            <!-- Tambahkan lebih banyak kartu informasi jika diperlukan -->
        </div>
    </div>
@endsection
