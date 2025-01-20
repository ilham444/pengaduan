@extends('layouts.app')

@section('content')
<body class="bg-gradient-to-r from-blue-50 via-white to-blue-50">
    <div class="container mx-auto px-4 py-8">
        <!-- Welcome Section -->
        <div class="bg-gradient-to-br from-white to-blue-100 rounded-lg shadow-xl p-6 mb-8">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="mb-4 md:mb-0">
                    <h1 class="text-4xl font-extrabold text-blue-800 mb-2">Welcome, {{ Auth::user()->name }}</h1>
                    <p class="text-gray-700 text-lg">Selamat datang di dashboard Anda. Jelajahi menu untuk mengelola pengaduan.</p>
                </div>
                <img src="{{ asset('images/login.jpg') }}" alt="dashboard" class="w-full md:w-1/3 h-auto rounded-lg shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
            </div>
        </div>

        <!-- Menu Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Lihat Pengaduan -->
            <a href="{{ route('user.pengaduan.index') }}" class="bg-gradient-to-br from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-bold py-4 px-6 rounded-xl shadow-md transition duration-300 ease-in-out transform hover:scale-105 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                </svg>
                <span class="text-lg">Lihat Pengaduan Saya</span>
            </a>

            <!-- Tambah Pengaduan -->
            <a href="{{ route('user.pengaduan.create') }}" class="bg-gradient-to-br from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white font-bold py-4 px-6 rounded-xl shadow-md transition duration-300 ease-in-out transform hover:scale-105 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                <span class="text-lg">Tambah Pengaduan</span>
            </a>
        </div>
    </div>
@endsection
