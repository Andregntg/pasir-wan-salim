@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Widget 1: Statistics -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h5 class="text-lg font-semibold mb-4">Jumlah Pengguna</h5>
            <p class="text-3xl font-bold text-blue-500">500</p>
        </div>

        <!-- Widget 2: Recent Activities -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h5 class="text-lg font-semibold mb-4">Aktivitas Terbaru</h5>
            <ul class="list-disc list-inside">
                <li class="mb-2">Pengguna A menambahkan data baru</li>
                <li class="mb-2">Pengguna B memperbarui informasi</li>
                <li class="mb-2">Pengguna C menghapus data</li>
            </ul>
        </div>

        <!-- Widget 3: Notifications -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h5 class="text-lg font-semibold mb-4">Notifikasi</h5>
            <p class="text-gray-600">Tidak ada notifikasi terbaru.</p>
        </div>
    </div>
@endsection
