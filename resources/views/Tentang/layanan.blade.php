@extends('layouts.app')

@section('title', 'Layanan Publik')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold mb-6 text-center text-blue-700" data-aos="fade-down">Layanan Publik Kelurahan Pasir Wan Salim</h1>
        <p class="mb-8 text-center text-lg" data-aos="fade-up">Berikut adalah daftar layanan publik yang tersedia di Kelurahan Pasir Wan Salim untuk mempermudah masyarakat dalam mendapatkan layanan yang dibutuhkan.</p>

        <div class="flex flex-wrap justify-center gap-8">
            <!-- Layanan 1 -->
            <div class="bg-white shadow-lg rounded-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl w-full md:w-1/2 lg:w-1/3">
                <div class="p-6 text-center">
                    <h2 class="text-2xl font-semibold mb-2 text-blue-800">Layanan Administrasi Kependudukan</h2>
                    <p class="text-gray-600 mb-4">Pengurusan KTP, KK, Akta Kelahiran, dan layanan lainnya terkait kependudukan.</p>
                    <a href="#" class="text-blue-500 hover:underline">Selengkapnya</a>
                </div>
            </div>

            <!-- Layanan 2 -->
            <div class="bg-white shadow-lg rounded-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl w-full md:w-1/2 lg:w-1/3">
                <div class="p-6 text-center">
                    <h2 class="text-2xl font-semibold mb-2 text-blue-800">Layanan Kesehatan</h2>
                    <p class="text-gray-600 mb-4">Fasilitas kesehatan untuk masyarakat seperti Puskesmas dan Posyandu.</p>
                    <a href="#" class="text-blue-500 hover:underline">Selengkapnya</a>
                </div>
            </div>

            <!-- Layanan 3 -->
            <div class="bg-white shadow-lg rounded-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl w-full md:w-1/2 lg:w-1/3">
                <div class="p-6 text-center">
                    <h2 class="text-2xl font-semibold mb-2 text-blue-800">Layanan Perizinan Usaha</h2>
                    <p class="text-gray-600 mb-4">Proses pengajuan izin usaha dan legalitas lainnya di wilayah kelurahan.</p>
                    <a href="#" class="text-blue-500 hover:underline">Selengkapnya</a>
                </div>
            </div>

            <!-- Layanan 4 -->
            <div class="bg-white shadow-lg rounded-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl w-full md:w-1/2 lg:w-1/3">
                <div class="p-6 text-center">
                    <h2 class="text-2xl font-semibold mb-2 text-blue-800">Layanan Kebersihan dan Lingkungan</h2>
                    <p class="text-gray-600 mb-4">Pengelolaan kebersihan lingkungan dan pengurusan sampah serta sanitasi.</p>
                    <a href="#" class="text-blue-500 hover:underline">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
@endsection
