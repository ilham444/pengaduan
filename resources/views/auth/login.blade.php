<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login - Sistem Pengaduan Masyarakat</title>
  
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-purple-600 to-blue-500 min-h-screen flex items-center justify-center">
  <div class="container mx-auto px-4">
    <div class="flex justify-center">
      <div class="w-full lg:w-10/12 xl:w-8/12">
        <div class="bg-white rounded-lg shadow-2xl overflow-hidden">
          <div class="p-0">
            <div class="flex flex-wrap">
              <div class="hidden lg:block lg:w-1/2 bg-cover bg-center" style="background-image: url('https://source.unsplash.com/random/800x600?login')"></div>
              <div class="w-full lg:w-1/2">
                <div class="p-8">
                  <div class="text-center">
                    <h1 class="text-3xl font-bold text-gray-900 mb-6">Login Boyy</h1>
                  </div>
                  <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf
                  
                    <div class="space-y-2">
                      <input type="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition" placeholder="Enter Email Address..." value="{{ old('email') }}" required autofocus>
                      @error('email')
                        <small class="text-red-500">{{ $message }}</small>
                      @enderror
                    </div>

                    <div class="space-y-2">
                      <input type="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition" placeholder="Password" required>
                      @error('password')
                        <small class="text-red-500">{{ $message }}</small>
                      @enderror
                    </div>

                    <div class="flex items-center">
                      <input type="checkbox" name="remember" class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded" id="customCheck">
                      <label class="ml-2 text-sm text-gray-700" for="customCheck">Remember Me</label>
                    </div>

                    <button type="submit" class="w-full bg-purple-600 text-white py-2 px-4 rounded-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 transition duration-150 ease-in-out">
                      Login
                    </button>
                  </form>
                  <hr class="my-6 border-gray-300">
                
                  <div class="text-center">
                    <a class="text-sm text-purple-600 hover:text-purple-800 transition" href="{{ route('register') }}">Register</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('admin_assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('admin_assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('admin_assets/js/sb-admin-2.min.js') }}"></script>
</body>
</html>