<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lupa Password - RentalYuk</title>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  @vite('resources/css/app.css')
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-animated-gradient flex items-center justify-center min-h-screen font-inter">

<div data-aos="fade-up" class="w-full max-w-md mx-auto bg-white/20 backdrop-blur-lg p-8 rounded-2xl shadow-2xl border border-white/30">
<div class="text-center mb-8">
<a href="/" class="text-4xl font-bold text-white tracking-wider">RentalYuk</a>
      <h2 class="mt-4 text-2xl font-bold text-white">Lupa Password Anda?</h2>
      <p class="mt-2 text-sm text-indigo-200">Masukkan email Anda dan kami akan mengirimkan tautan untuk mengatur ulang password Anda.</p>
    </div>
    @if (session('status'))
      <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
        {{ session('status') }}
      </div>
    @endif
    @if ($errors->any())
      <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
        @foreach ($errors->all() as $error)
          {{ $error }}
        @endforeach
      </div>
    @endif
    <form action="/forgot-password" method="POST">
      @csrf
      <div class="space-y-6">
        <div>
        <label for="email" class="block text-sm font-medium text-gray-200">Alamat Email</label>
        <div class="mt-1">
        <input id="email" name="email" type="email" placeholder="contoh@email.com" autocomplete="email" required
              class="w-full px-4 py-3 bg-white text-gray-900 placeholder-gray-400 border border-gray-400/50 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 transition">
          </div>
        </div>

        <div>
        <button type="submit"
            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-lg text-lg font-medium text-white bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transform hover:scale-105 transition-all duration-300">
            Kirim Link Reset Password
          </button>
        </div>
      </div>
    </form>

    <div class="text-center mt-6">
      <p class="text-sm text-gray-600">
      <a href="{{ route('login') }}" class="font-medium text-white hover:underline">‹ Kembali ke Login</a>
      </p>
    </div>
  </div>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 800, once: true });
  </script>
</body>

</html>
