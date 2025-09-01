<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Akun Baru - RentalYuk</title>
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
      <h2 class="mt-2 text-2xl font-bold text-gray-900">Buat Akun Baru</h2>
      <p class="mt-2 text-sm text-gray-600">Sudah punya akun? <a href="/login"
          class="font-medium text-indigo-600 hover:text-indigo-500">Masuk di sini</a></p>
    </div>
    <form action="/register" method="POST">
      @csrf
      <div class="space-y-6">
        @if (session('status'))
          <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('status') }}
          </div>
        @endif
        @if ($errors->any())
          <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <div>
          <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
          <div class="mt-1">
            <input id="name" name="name" type="text" required
              class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
          </div>
        </div>
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Alamat Email</label>
          <div class="mt-1">
            <input id="email" name="email" type="email" autocomplete="email" required
              class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
          </div>
        </div>
        <div>
          <label for="phone" class="block text-sm font-medium text-gray-700">Nomor WhatsApp</label>
          <div class="mt-1">
            <input id="phone" name="phone" type="tel" required
              class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
          </div>
        </div>
        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <div class="mt-1">
            <input id="password" name="password" type="password" autocomplete="new-password" required
              class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
          </div>
        </div>
        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
          <div class="mt-1">
            <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password"
              required
              class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
          </div>
        </div>
        <div>
          <button type="submit"
            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-lg font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Daftar
          </button>
        </div>
      </div>
    </form>
  </div>
</body>

</html>
