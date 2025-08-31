<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Masuk - RentalYuk</title>
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
    <div class="text-center mb-4">
      <a href="#" class="text-3xl font-bold text-indigo-600">RentalYuk</a>
      <h2 class="mt-2 text-2xl font-bold text-gray-900">Verifikasi Email Anda</h2>
    </div>
    <div class="max-w-md mx-auto bg-white p-4 text-center">
      <p class="text-gray-600 mb-6">
        Thanks for signing up! Before getting started, please verify your email
        address by clicking on the link we just emailed to you. <br>
        If you didn’t receive the email, you can request another.
      </p>

      @if (session('message'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
          {{ session('message') }}
        </div>
      @endif

      <form method="POST" action="{{ route('verification.send') }}" class="mb-4">
        @csrf
        <button type="submit"
          class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-lg shadow">
          Kirim Ulang Email Verifikasi
        </button>
      </form>

      <a href="/logout" class="bg-gray-500 hover:bg-gray-600 text-white font-semibold px-4 py-2 rounded-lg shadow">
        Log Out
      </a>
    </div>

  </div>

</body>

</html>
