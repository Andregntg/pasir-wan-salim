@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')
    <div class="container mx-auto p-4">
        <!-- Header Section -->
        <header class="text-center mb-8">
            <h1 class="text-5xl font-bold mb-4 text-blue-800" data-aos="fade-down">Kontak Kami</h1>
            <p class="text-lg text-gray-600" data-aos="fade-up">Silakan hubungi kami melalui informasi kontak di bawah ini atau isi formulir kontak untuk pertanyaan atau masukan.</p>
        </header>

        <!-- Informasi Kontak -->
        <div class="bg-white p-6 rounded-lg shadow-lg mb-8 border border-blue-200">
            <h2 class="text-3xl font-bold mb-4 text-blue-800 border-b-2 border-blue-300 pb-2">Informasi Kontak</h2>
            <ul class="space-y-6">
                <li class="flex items-center">
                    <i class="fas fa-map-marker-alt text-blue-500 text-2xl mr-4"></i>
                    <span class="text-lg">Alamat: Jl. Contoh No. 123, Kelurahan Pasir Wan Salim</span>
                </li>
                <li class="flex items-center">
                    <i class="fas fa-phone-alt text-blue-500 text-2xl mr-4"></i>
                    <span class="text-lg">Telepon: (123) 456-7890</span>
                </li>
                <li class="flex items-center">
                    <i class="fas fa-envelope text-blue-500 text-2xl mr-4"></i>
                    <span class="text-lg">Email: info@pasirwansalim.id</span>
                </li>
            </ul>
        </div>

        <!-- Form Kontak -->
        <div class="bg-white p-8 rounded-lg shadow-lg border border-blue-200">
            <h2 class="text-3xl font-bold mb-6 text-blue-800 border-b-2 border-blue-300 pb-2">Form Kontak</h2>
            <form action="" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-lg font-medium text-gray-700">Nama</label>
                        <input type="text" id="name" name="name" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="email" class="block text-lg font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 sm:text-sm">
                    </div>
                </div>
                <div class="mt-6">
                    <label for="message" class="block text-lg font-medium text-gray-700">Pesan</label>
                    <textarea id="message" name="message" rows="6" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 sm:text-sm"></textarea>
                </div>
                <div class="mt-8 flex justify-center">
                    <button type="submit" class="px-6 py-3 bg-blue-600 text-white rounded-md shadow-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Kirim Pesan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
