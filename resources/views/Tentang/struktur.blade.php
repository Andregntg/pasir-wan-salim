@extends('layouts.app')

@section('title', 'Struktur Desa')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold mb-6 text-center text-blue-700" data-aos="fade-down">Struktur Organisasi Kelurahan Pasir Wan Salim</h1>
        <p class="mb-8 text-center text-lg" data-aos="fade-up">Berikut adalah struktur organisasi Kelurahan Pasir Wan Salim yang terdiri dari berbagai perangkat desa yang bertugas melayani masyarakat.</p>

        <!-- Lampiran Peraturan -->
        <div class="bg-white p-6 rounded-lg shadow-lg mb-8 border border-blue-200 text-center">
            <h2 class="text-2xl font-bold mb-4 text-blue-800 border-b-2 border-blue-300 pb-2">Lampiran Peraturan Bupati Mempawah</h2>
            <p class="text-lg mb-2"><strong class="text-blue-600">Nomor:</strong> 65 Tahun 2016</p>
            <p class="text-lg"><strong class="text-blue-600">Tentang:</strong> Kedudukan Susunan Organisasi, Tugas dan Fungsi, Serta Tata Kerja Mempawah Timur</p>
        </div>

        <div class="flex flex-wrap justify-center gap-8">
            @foreach($pegawais as $pegawai)
                <div class="bg-white shadow-lg rounded-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl w-full md:w-1/2 lg:w-1/3">
                    <div class="relative">
                        <img src="{{ asset($pegawai->gambar) }}" alt="Gambar Pegawai" class="w-full h-auto max-h-60 object-contain mx-auto">
                    </div>
                    <div class="p-4 text-center">
                        <h2 class="text-2xl font-semibold mb-2">
                            {{ $pegawai->jabatan->nama_jabatan ?? 'Tidak Berjabatan' }}
                        </h2>
                        <p class="mb-4">{{ $pegawai->nama }}</p>
                        <p class="text-gray-600">Bertanggung jawab atas keseluruhan jalannya pemerintahan desa.</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
