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
            @foreach($informasi as $item)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden" data-aos="fade-up">
                    @if($item->gambar)
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-48 object-cover">
                    @else
                        <img src="https://via.placeholder.com/800x400" alt="Placeholder" class="w-full h-48 object-cover">
                    @endif
                    <div class="p-4">
                        <h2 class="text-2xl font-semibold text-blue-800 mb-2">{{ $item->judul }}</h2>
                        <p class="text-gray-600 mb-4">{{ Str::limit($item->deskripsi, 100) }}</p>
                        <a href="{{ route('informasi.show', $item->id_informasi) }}" class="text-blue-500 hover:underline">Baca selengkapnya</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
