<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>@yield('title', 'Pengaduan Masyarakat')</title>  
    <script src="https://cdn.tailwindcss.com"></script>  

    <!-- Bootstrap CSS -->  
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">  
    <link rel="stylesheet" href="{{ asset('assets/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css') }}">  
    <link rel="stylesheet" href="{{ asset('assets/DataTables/Buttons-1.5.6/css/buttons.bootstrap4.min.css') }}">  

    @stack('styles')  
</head>  

<body class="bg-gray-100">  
    <nav class="bg-green-600">  
        <div class="container mx-auto flex justify-between items-center py-4 px-6">  
            <a class="text-white text-lg font-bold" href="#">Pengaduan Masyarakat</a>  
            <button id="menu-toggle" class="block md:hidden text-white focus:outline-none" aria-label="Toggle menu">  
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">  
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />  
                </svg>  
            </button>  

            <div id="menu" class="hidden md:flex items-center space-x-4">  
                <a href="{{ route('admin.dashboard') }}" class="py-2 px-4 rounded text-white hover:bg-green-500 {{ request()->is('about') ? 'bg-green-700' : '' }}">  
                    Dashboard  
                </a>  
                <form action="{{ route('logout') }}" method="POST" class="inline-block">  
                    @csrf  
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded" aria-label="Logout">  
                        Logout  
                    </button>  
                </form>  
            </div>  
        </div>  
    </nav>  

    <div class="w-screen h-screen px-6 mt-0 bg-gradient-to-br from-blue-400 via-blue-200 to-blue-50">  
        @yield('content')  
    </div>  

    <!-- Scripts -->  
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>  
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>  
    <script src="{{ asset('assets/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js') }}"></script>  
    <script src="{{ asset('assets/DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.min.js') }}"></script>  
    <script src="{{ asset('assets/DataTables/Buttons-1.5.6/js/dataTables.buttons.min.js') }}"></script>  
    <script src="{{ asset('assets/DataTables/Buttons-1.5.6/js/buttons.bootstrap4.min.js') }}"></script>  
    <script src="{{ asset('assets/DataTables/JSZip-2.5.0/jszip.min.js') }}"></script>  
    <script src="{{ asset('assets/DataTables/pdfmake-0.1.36/pdfmake.min.js') }}"></script>  
    <script src="{{ asset('assets/DataTables/pdfmake-0.1.36/vfs_fonts.js') }}"></script>  
    <script src="{{ asset('assets/DataTables/Buttons-1.5.6/js/buttons.html5.min.js') }}"></script>  
    <script src="{{ asset('assets/DataTables/Buttons-1.5.6/js/buttons.print.min.js') }}"></script>  
    <script src="{{ asset('assets/DataTables/Buttons-1.5.6/js/buttons.colVis.min.js') }}"></script>  
    @stack('scripts')  
</body>  
</html>