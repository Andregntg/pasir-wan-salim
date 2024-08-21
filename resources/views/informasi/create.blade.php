@extends('layouts.admin')

@section('content')
@vite('resources/css/app.css')

<div class="container mx-auto p-8">
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-xl overflow-hidden border border-gray-200">
        <div class="p-8">
            <h1 class="text-4xl font-extrabold text-gray-900 mb-8 text-center">Add New Informasi</h1>
            <form action="{{ route('informasi.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf

                <!-- Judul -->
                <div class="relative">
                    <input type="text" id="judul" name="judul" required class="form-input w-full border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300 ease-in-out px-4 py-3 placeholder-transparent" placeholder=" ">
                    <label for="judul" class="absolute top-1/2 left-4 transform -translate-y-1/2 text-gray-600 text-lg font-medium pointer-events-none transition-all duration-300 ease-in-out peer-placeholder-shown:top-4 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-sm peer-focus:-top-2 peer-focus:text-blue-500 peer-focus:text-base">Judul</label>
                </div>

                <!-- Tanggal Informasi -->
                <div class="relative">
                    <input type="date" id="tanggal_informasi" name="tanggal_informasi" required class="form-input w-full border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300 ease-in-out px-4 py-3 placeholder-transparent" placeholder=" ">
                    <label for="tanggal_informasi" class="absolute top-1/2 left-4 transform -translate-y-1/2 text-gray-600 text-lg font-medium pointer-events-none transition-all duration-300 ease-in-out peer-placeholder-shown:top-4 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-sm peer-focus:-top-2 peer-focus:text-blue-500 peer-focus:text-base"></label>
                </div>

                <!-- Deskripsi -->
                <div class="relative">
                    <textarea id="deskripsi" name="deskripsi" rows="6" required class="form-textarea w-full border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300 ease-in-out px-4 py-3 placeholder-transparent" placeholder=" "></textarea>
                    <label for="deskripsi" class="absolute top-1/2 left-4 transform -translate-y-1/2 text-gray-600 text-lg font-medium pointer-events-none transition-all duration-300 ease-in-out peer-placeholder-shown:top-4 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-sm peer-focus:-top-2 peer-focus:text-blue-500 peer-focus:text-base">Deskripsi</label>
                </div>

                <!-- Gambar -->
                <div>
                    <label for="gambar" class="block text-lg font-medium text-gray-800 mb-2">Gambar</label>
                    <input type="file" id="gambar" name="gambar" class="block w-full text-gray-900 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300 ease-in-out p-3">
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="px-8 py-3 bg-blue-600 text-white font-semibold rounded-full shadow-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
