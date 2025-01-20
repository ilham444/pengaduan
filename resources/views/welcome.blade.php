<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        {{-- <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}

        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased bg-gray-100 dark:bg-gray-900 min-h-screen flex items-center justify-center">
        <div class="relative w-full max-w-4x2 mx-auto p-6 bg-white dark:bg-gray-800 shadow-lg rounded-lg">
            @if (Route::has('login'))
                <div class="flex justify-end mb-6">
                    @auth
                        <a href="{{ route('login') }}" 
                           class="px-4 py-2 text-sm font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition focus:outline-none focus:ring focus:ring-red-500 rounded">
                            
                        </a>
                    @else
                        <a href="{{ route('login') }}" 
                           class="px-4 py-2 text-sm font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition focus:outline-none focus:ring focus:ring-red-500 rounded">
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" 
                               class="ml-4 px-4 py-2 text-sm font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition focus:outline-none focus:ring focus:ring-red-500 rounded">
                                Register
                            </a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="relative bg-gradient-to-r from-purple-600 to-blue-600 h-screen text-white overflow-hidden">
                <div class="absolute inset-0">
                  <img src="https://images.unsplash.com/photo-1522252234503-e356532cafd5?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw2fHxjb2RlfGVufDB8MHx8fDE2OTQwOTg0MTZ8MA&ixlib=rb-4.0.3&q=80&w=1080" alt="Background Image" class="object-cover object-center w-full h-full" />
                  <div class="absolute inset-0 bg-black opacity-50"></div>
                </div>
                
                <div class="relative z-10 flex flex-col justify-center items-center h-full text-center">
                  <h1 class="text-5xl font-bold leading-tight mb-4">Welcome Di Sistem Pengaduan Masyarakat</h1>
                  <p class="text-lg text-gray-300 mb-8">Pengaduan masyarakat adalah proses atau tindakan di mana seseorang atau kelompok masyarakat menyampaikan keluhan, kritik, laporan, atau aspirasi kepada pihak yang berwenang atau instansi tertentu terkait permasalahan, pelanggaran, atau ketidakpuasan terhadap pelayanan publik, kebijakan, atau kejadian yang merugikan. Pengaduan ini bertujuan untuk mencari solusi atau tindakan perbaikan atas masalah yang dihadapi oleh masyarakat.</p>
                  <a href="{{ route('login') }}" class="bg-yellow-400 text-gray-900 hover:bg-yellow-300 py-2 px-6 rounded-full text-lg font-semibold transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">Get Started</a>
                </div>
              </div>
              
        </div>
    </body>
</html>
