<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verifikasi Email - RentalYuk</title>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  @vite('resources/css/app.css')
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-animated-gradient flex items-center justify-center min-h-screen font-inter">

<div data-aos="fade-up" class="w-full max-w-md mx-auto bg-white/20 backdrop-blur-lg p-8 rounded-2xl shadow-2xl border border-white/30 text-center">
    
    <div class="mb-4">
    <a href="/" class="text-4xl font-bold text-white tracking-wider">RentalYuk</a>
      <h2 class="mt-4 text-2xl font-bold text-white">Satu Langkah Lagi!</h2>
      <h3 class="mt-1 text-xl font-medium text-indigo-200">Verifikasi Email Anda</h3>
    </div>
    <div>
      <p class="text-indigo-200 mb-6 text-sm">
        Terima kasih telah mendaftar! Sebelum melanjutkan, mohon verifikasi alamat email Anda dengan mengklik tautan yang baru saja kami kirimkan.
        <br><br>
        Jika Anda tidak menerima email, kami akan dengan senang hati mengirimkannya kembali.
      </p>

      @if (session('message'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
          {{ session('message') }}
        </div>
      @endif

      <form method="POST" action="{{ route('verification.send') }}" class="mb-4">
        @csrf
        <button type="submit"
                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-lg font-medium text-white 
                       bg-gradient-to-r from-green-500 to-teal-600 hover:from-green-600 hover:to-teal-700 
                       focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 
                       transform hover:scale-105 transition-all duration-300">
                Kirim Ulang Email Verifikasi
            </button>
      </form>

      <a href="/logout" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm font-medium text-indigo-200 
                           bg-white/10 hover:bg-white/20 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-400 
                           transform hover:scale-105 transition-all duration-300">
        Log Out
      </a>
    </div>

  </div>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 800, once: true });
  </script>
</body>

</html>
