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

<body class="bg-gray-100 flex">  
    <aside class="w-64 bg-gradient-to-b from-green-600 to-blue-500 min-h-screen">  
        <div class="container mx-auto py-4 px-6">  
            <a class="text-white text-lg font-bold" href="#">Pengaduan Masyarakat</a>  
            <nav class="mt-6">  
                <a href="{{ route('user.dashboard') }}" class="block py-2 px-4 rounded text-white hover:bg-green-400 {{ request()->is('about') ? 'bg-green-700' : '' }}">  
                    Dashboard  
                </a>  
                <a href="{{ route('home') }}" class="block py-2 px-4 rounded text-white hover:bg-green-400 {{ request()->is('/') ? 'bg-green-700' : '' }}">  
                    Blog  
                </a>  
                <a href="{{ route('about') }}" class="block py-2 px-4 rounded text-white hover:bg-green-400 {{ request()->is('about') ? 'bg-green-700' : '' }}">  
                    About  
                </a>  
                <form action="{{ route('logout') }}" method="POST" class="mt-4">  
                    @csrf  
                    <button type="submit" class="bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white py-2 px-4 rounded transition duration-200">  
                        Logout  
                    </button>  
                </form>  
            </nav>  
        </div>  
    </aside>  

    <main class="flex-1 w-full h-screen px-6 mt-0 bg-gradient-to-br from-blue-400 via-green-200 to-blue-200">  
        @yield('content')  
    </main>  

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