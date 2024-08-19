@extends('layouts.app')

@section('title', 'Daftar RT Kelurahan Pasir Wan Salim')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold mb-6 text-center text-blue-700" data-aos="fade-down">Daftar RT Kelurahan Pasir Wan Salim</h1>
        <p class="mb-8 text-center text-lg" data-aos="fade-up">Berikut adalah daftar RT yang terdapat di Kelurahan Pasir Wan Salim.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($rts as $rt)
                <div class="bg-white p-6 shadow-lg rounded-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl hover:bg-blue-50" data-aos="zoom-in">
                    <h2 class="text-2xl font-semibold mb-2 text-center text-blue-600">
                        <i class="fas fa-home mr-2"></i>{{ $rt->no_rt }}
                    </h2>
                    
                    <p class="text-center text-gray-600 font-bold">Nama Ketua : {{ $rt->nama_rt }}</p>
                    <p class="text-center text-gray-600">No HP : {{ $rt->no_hp }}</p>
                    <p class="text-center text-gray-600">Alamat : {{ $rt->alamat }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
