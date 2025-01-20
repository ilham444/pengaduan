@extends('layouts.app')

@section('content')
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Tambah Pengaduan</h1>

        <div class="bg-white shadow-md rounded-lg p-6">
            <form action="{{ route('user.pengaduan.store') }}" method="POST">
                @csrf
                <input type="hidden" name="nama" value="{{ auth()->user()->name }}">
                
                <div class="mb-6">
                    <label for="judul" class="block text-sm font-medium text-gray-700 mb-2">Judul Pengaduan</label>
                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-150 ease-in-out" id="judul" name="judul" required>
                </div>
                
                <div class="mb-6">
                    <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
                    <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-150 ease-in-out" id="deskripsi" name="deskripsi" rows="4" required></textarea>
                </div>
                
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Kirim Pengaduan
                    </button>
                    <a href="{{ route('user.pengaduan.index') }}" class="text-blue-500 hover:text-blue-600 font-medium transition duration-300 ease-in-out">
                        Kembali ke Daftar Pengaduan
                    </a>
                </div>
            </form>
        </div>
    </div>

    @endsection