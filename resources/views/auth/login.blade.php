<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale-1.0">
  <title>Masuk - RentalYuk</title>
  <!-- Memuat Tailwind CSS -->
  @vite(['resources/css/app.css'])
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="w-full max-w-md mx-auto bg-white p-8 rounded-xl shadow-lg">
    <div class="text-center mb-8">
      <a href="/" class="text-3xl font-bold text-indigo-600">RentalYuk</a>
      <h2 class="mt-2 text-2xl font-bold text-gray-900">Masuk ke Akun Anda</h2>
      <p class="mt-2 text-sm text-gray-600">Belum punya akun? <a href="/register"
          class="font-medium text-indigo-600 hover:text-indigo-500">Daftar gratis</a></p>
    </div>

    <form action="/login" method="POST">
      @csrf
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
      <div class="space-y-6">
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email Pengguna</label>
          <div class="mt-1">
            <input id="email" name="email" type="email" placeholder="contoh@email.com" autocomplete="email"
              required
              class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
          </div>
        </div>

        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <div class="text-sm">
              <a href="/forgot-password" class="font-medium text-indigo-600 hover:text-indigo-500">Lupa password?</a>
            </div>
          </div>
          <div class="mt-1 relative">
            <input id="password" placeholder="••••••••" name="password" type="password" autocomplete="current-password"
              required
              class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 pr-10">
            <button type="button" id="togglePassword"
              class="absolute inset-y-0 right-0 px-3 flex items-center text-gray-500 focus:outline-none">
              <!-- Ikon mata (tampilkan) -->
              <svg id="eyeIcon" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                </path>
              </svg>
              <!-- Ikon mata coret (sembunyikan) -->
              <svg id="eyeSlashIcon" class="h-5 w-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7 1.274-4.057 5.064 7 9.542 7 .847 0 1.673.124 2.458.352M6.125 5.175A10.05 10.05 0 0112 5c4.478 0 8.268 2.943 9.542 7a10.054 10.054 0 01-2.036 3.825m-2.223-2.223a3 3 0 10-4.243-4.243M1 1l22 22">
                </path>
              </svg>
            </button>
          </div>
        </div>

        <div>
          <button type="submit"
            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-lg font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Masuk
          </button>
        </div>
      </div>
    </form>
  </div>

  <script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');
    const eyeSlashIcon = document.getElementById('eyeSlashIcon');

    togglePassword.addEventListener('click', function() {
      // Ubah tipe input dari password ke text atau sebaliknya
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);

      // Ganti ikon mata
      eyeIcon.classList.toggle('hidden');
      eyeSlashIcon.classList.toggle('hidden');
    });
  </script>

</body>

</html>
