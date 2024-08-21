@extends('layouts.user')

@section('title', 'Beranda')

@section('content')
    <div class="container mx-auto p-4">
        <div class="relative overflow-hidden rounded-lg shadow-lg mb-8" style="height: 500px;">
            <div class="parallax bg-cover bg-center" style="background-image: url('{{ asset('image/Pelayanan.jpg') }}'); height: 500px;"></div>
            <div class="absolute inset-0 bg-blue-900 bg-opacity-50 flex items-center justify-center">
                <div class="text-center p-8">
                    <h1 class="text-4xl font-bold text-white mb-4" data-aos="fade-down">Selamat Datang di Kelurahan Pasir Wan Salim</h1>
                    <p class="text-lg text-white mb-8" data-aos="fade-up">Ini adalah halaman beranda dari website informasi kelurahan kami. Di sini Anda bisa mendapatkan informasi terbaru dan penting mengenai kelurahan.</p>
                    <a href="{{route('Kontak.kontak')}}" class="bg-red-500 hover:bg-red-700 transition-colors duration-300 text-white font-bold py-2 px-4 rounded" data-aos="fade-up">Hubungi kami</a>
                </div>
            </div>
        </div>
        <h1 class="text-5xl font-bold text-black mb-6" style="font-family: 'Playfair Display', serif;">BERITA</h1>

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
        
        <!-- Pagination Links -->
        <div class="mt-8">
            {{ $informasi->links('pagination::tailwind') }}
        </div>
<br>
        <!-- Bagian Konten -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="relative rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden" data-aos="fade-up">
                <div class="bg-blue-900 bg-opacity-50 flex items-center justify-center h-48">
                    <div class="text-center p-4">
                        <h2 class="text-2xl font-semibold text-white mb-2 border-b-4 border-white inline-block" data-aos="fade-up">Informasi Terbaru</h2>
                        <p class="text-white mb-4">Dapatkan informasi terbaru seputar kegiatan dan acara di kelurahan kami.</p>
                        <a href="{{route('Berita.informasi')}}" class="bg-blue-500 hover:bg-blue-700 transition-colors duration-300 text-white font-bold py-2 px-4 rounded">Baca selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="relative rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden" data-aos="fade-up">
                <div class="bg-green-900 bg-opacity-50 flex items-center justify-center h-48">
                    <div class="text-center p-4">
                        <h2 class="text-2xl font-semibold text-white mb-2 border-b-4 border-white inline-block" data-aos="fade-up">Layanan Publik</h2>
                        <p class="text-white mb-4">Informasi mengenai layanan publik yang tersedia di kelurahan kami.</p>
                        <a href="/services" class="bg-green-500 hover:bg-green-700 transition-colors duration-300 text-white font-bold py-2 px-4 rounded">Lihat layanan</a>
                    </div>
                </div>
            </div>

            <div class="relative rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden" data-aos="fade-up">
                <div class="bg-red-900 bg-opacity-50 flex items-center justify-center h-48">
                    <div class="text-center p-4">
                        <h2 class="text-2xl font-semibold text-white mb-2 border-b-4 border-white inline-block" data-aos="fade-up">Kontak</h2>
                        <p class="text-white mb-4">Hubungi kami untuk informasi lebih lanjut atau pertanyaan.</p>
                        <a href="{{route('Kontak.kontak')}}" class="bg-red-500 hover:bg-red-700 transition-colors duration-300 text-white font-bold py-2 px-4 rounded">Hubungi kami</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-300 p-6 rounded-lg shadow-lg mt-8">
            <div class="map-wrapper">
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7541950681566!2d108.96749317447502!3d0.324845064013933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31e2f25c4456bc71%3A0x2b4dac0aacdecc6!2sKantor%20Kelurahan%20Pasir%20Wan%20Salim!5e0!3m2!1sid!2sid!4v1722866106374!5m2!1sid!2sid" style="border:0; position: absolute; top: 0; left: 0; width: 100%; height: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- Description -->
                <div class="description">
                    <h2>Deskripsi Lokasi</h2>
                    <p>Informasi detail tentang lokasi yang ditunjukkan di peta.</p>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
