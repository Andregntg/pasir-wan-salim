@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <!-- Title and Date -->
    <div class="mb-6">
        <h1 class="text-4xl font-bold text-blue-700 mb-2">{{ $informasi->judul }}</h1>
        <p class="text-gray-600 text-lg">{{ \Carbon\Carbon::parse($informasi->tanggal_informasi)->format('d F Y') }}</p>
    </div>

    <!-- Image -->
    @if($informasi->gambar)
        <div class="mb-6">
            <img src="{{ asset('storage/' . $informasi->gambar) }}" alt="{{ $informasi->judul }}" class="w-full h-auto max-h-96 object-cover rounded-lg shadow-lg">
        </div>
    @endif

    <!-- Description -->
    <div class="mb-6">
        <p class="text-lg text-gray-800">{{ $informasi->deskripsi }}</p>
    </div>

    <!-- Back Button -->
    <div>
        <a href="{{ route('Berita.informasi') }}" class="btn-back flex items-center space-x-2 text-blue-600 hover:text-blue-800 hover:underline">
            <i class="fas fa-arrow-left"></i>
            <span>Kembali</span>
        </a>
    </div>
</div>
@endsection
