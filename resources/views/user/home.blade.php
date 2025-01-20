@extends('layouts.app')

@section('content')

<div class="container mx-auto py-10 bg-gradient-to-r from-blue-100 via-white to-blue-100 rounded-lg shadow-2xl">
    <h1 class="text-5xl font-extrabold text-center mb-6 text-blue-700 drop-shadow-lg">Sistem Pengaduan Masyarakat</h1>
    <p class="text-xl text-center mb-8 text-gray-800">
        Dibuat oleh <span class="font-semibold text-blue-600">Ilham Maulana (NIM: 2206020)</span> dan <span class="font-semibold text-blue-600">Ahmad Hopan (NIM: 2206002)</span> untuk menuntaskan Tugas Besar Praktikum Pemrograman Web.
    </p>
    <div class="prose lg:prose-xl mx-auto bg-white p-8 rounded-xl shadow-md">
        <h2 class="text-3xl font-semibold mb-4 text-blue-600">Latar Belakang</h2>
        <p class="text-gray-800 leading-relaxed">
            Sistem pengaduan masyarakat adalah platform yang dirancang untuk memudahkan masyarakat dalam menyampaikan keluhan atau masalah yang mereka alami. Proyek ini bertujuan untuk menyediakan solusi digital yang efektif dan efisien dalam pengelolaan pengaduan.
        </p>
        <h2 class="text-3xl font-semibold mb-4 text-blue-600">Tujuan</h2>
        <p class="text-gray-800 leading-relaxed">
            Proyek ini bertujuan untuk:
        </p>
        <ul class="list-disc pl-8 text-gray-800 space-y-2">
            <li>Meningkatkan aksesibilitas masyarakat terhadap sistem pengaduan.</li>
            <li>Menyediakan antarmuka pengguna yang sederhana dan mudah digunakan.</li>
            <li>Memastikan pengaduan masyarakat ditangani dengan transparan dan tepat waktu.</li>
        </ul>
        <h2 class="text-3xl font-semibold mb-4 text-blue-600">Fitur Utama</h2>
        <p class="text-gray-800 leading-relaxed">
            Sistem ini memiliki beberapa fitur utama, antara lain:
        </p>
        <ul class="list-disc pl-8 text-gray-800 space-y-2">
            <li>Formulir pengaduan online yang responsif.</li>
            <li>Dashboard admin dengan visualisasi data pengaduan.</li>
            <li>Notifikasi real-time untuk pengaduan baru melalui email atau SMS.</li>
        </ul>
        <h2 class="text-3xl font-semibold mb-4 text-blue-600">Teknologi yang Digunakan</h2>
        <p class="text-gray-800 leading-relaxed">
            Sistem ini dibangun menggunakan teknologi berikut:
        </p>
        <ul class="list-disc pl-8 text-gray-800 space-y-2">
            <li><strong class="text-blue-600">Framework:</strong> Laravel</li>
            <li><strong class="text-blue-600">Database:</strong> MySQL</li>
            <li><strong class="text-blue-600">Front-End:</strong> Tailwind CSS dengan efek interaktif modern</li>
        </ul>
        <h2 class="text-3xl font-semibold mb-4 text-blue-600">Kesimpulan</h2>
        <p class="text-gray-800 leading-relaxed">
            Dengan adanya sistem ini, diharapkan pengelolaan pengaduan masyarakat menjadi lebih terstruktur dan memberikan dampak positif dalam meningkatkan layanan publik. Implementasi fitur yang inovatif akan memastikan pengalaman pengguna yang optimal.
        </p>
    </div>
</div>

@endsection
