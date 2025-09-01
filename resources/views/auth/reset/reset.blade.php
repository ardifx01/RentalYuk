<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atur Ulang Password - RentalYuk</title>
  <!-- Memuat Tailwind CSS -->
  @vite('resources/css/app.css')
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="w-full max-w-md mx-auto bg-white p-8 rounded-xl shadow-lg">
    <div class="text-center mb-8">
      <a href="/" class="text-3xl font-bold text-indigo-600">RentalYuk</a>
      <h2 class="mt-2 text-2xl font-bold text-gray-900">Atur Ulang Password Anda</h2>
      <p class="mt-2 text-sm text-gray-600">Masukkan password baru Anda di bawah ini.<br> atas email :
        <b>{{ request('email') }}</b>
      </p>
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
    <form action="/reset-password" method="POST">
      @csrf
      <div class="space-y-6">
        <input type="hidden" name="token" value="{{ $token }}">
        <input name="email" type="hidden" value="{{ request('email') }}">
        <div>
          <label for="new-password" class="block text-sm font-medium text-gray-700">Password Baru</label>
          <div class="mt-1 relative">
            <input id="new-password" name="password" type="password" placeholder="••••••••" required
              class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 pr-10">
            <button type="button" id="toggleNewPassword"
              class="absolute inset-y-0 right-0 px-3 flex items-center text-gray-500 focus:outline-none">
              <svg id="eyeIcon1" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                </path>
              </svg>
              <svg id="eyeSlashIcon1" class="h-5 w-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7 1.274-4.057 5.064 7 9.542 7 .847 0 1.673.124 2.458.352M6.125 5.175A10.05 10.05 0 0112 5c4.478 0 8.268 2.943 9.542 7a10.054 10.054 0 01-2.036 3.825m-2.223-2.223a3 3 0 10-4.243-4.243M1 1l22 22">
                </path>
              </svg>
            </button>
          </div>
        </div>

        <div>
          <label for="confirm-password" class="block text-sm font-medium text-gray-700">Konfirmasi Password Baru</label>
          <div class="mt-1 relative">
            <input id="confirm-password" name="password_confirmation" type="password" placeholder="••••••••" required
              class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 pr-10">
            <button type="button" id="toggleConfirmPassword"
              class="absolute inset-y-0 right-0 px-3 flex items-center text-gray-500 focus:outline-none">
              <svg id="eyeIcon2" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                </path>
              </svg>
              <svg id="eyeSlashIcon2" class="h-5 w-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"
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
            Simpan Password Baru
          </button>
        </div>
      </div>
    </form>
    <div class="text-center mt-6">
      <p class="text-sm text-gray-600">
        <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500">‹ Kembali ke Login</a>
      </p>
    </div>
  </div>

  <script>
    function setupPasswordToggle(toggleButtonId, passwordInputId, eyeIconId, eyeSlashIconId) {
      const toggleButton = document.getElementById(toggleButtonId);
      const passwordInput = document.getElementById(passwordInputId);
      const eyeIcon = document.getElementById(eyeIconId);
      const eyeSlashIcon = document.getElementById(eyeSlashIconId);

      toggleButton.addEventListener('click', function() {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        eyeIcon.classList.toggle('hidden');
        eyeSlashIcon.classList.toggle('hidden');
      });
    }

    setupPasswordToggle('toggleNewPassword', 'new-password', 'eyeIcon1', 'eyeSlashIcon1');
    setupPasswordToggle('toggleConfirmPassword', 'confirm-password', 'eyeIcon2', 'eyeSlashIcon2');
  </script>

</body>

</html>
