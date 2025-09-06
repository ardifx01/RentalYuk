<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - RentalYuk</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <main>
    <div class="max-w-7xl mx-auto py-4 px-12">
      <!-- Header -->
      <div class="text-center mb-10">
        <h1 class="text-3xl font-bold text-gray-900">Pilih Paket Iklan</h1>
        <p class="text-gray-500 mt-2">Sesuaikan kebutuhan promosi Anda dengan paket berikut</p>
      </div>

      <!-- Pricing Cards -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

        <!-- Paket Gratis -->
        <div class="flex flex-col p-6 bg-white border rounded-2xl shadow hover:shadow-lg transition">
          <form action="/owner/pricing" method="POST">
            @csrf
            <input type="hidden" name="plan_id" value="1">
            <h3 class="text-2xl font-semibold text-gray-800">Paket Gratis</h3>
            <p class="mt-2 text-gray-500">Cocok untuk iklan sederhana dengan keterbatasan fitur.</p>
            <div class="my-4">
              <span class="text-4xl font-bold">Rp 0</span>
              <span class="text-gray-500">/ bulan</span>
            </div>
            <ul class="space-y-3 mb-6 text-gray-600">
              <li>✅ Maksimal 1 iklan aktif</li>
              <li>✅ 1 foto per iklan</li>
              <li>✅ Ditampilkan 7 hari</li>
              <li>❌ Tidak ada statistik detail</li>
            </ul>
            <button type="submit"
              class="mt-auto inline-block px-5 py-3 rounded-xl text-center bg-gray-200 text-gray-800 font-medium hover:bg-gray-300 transition">
              Pilih Paket Gratis
            </button>
          </form>
        </div>

        <!-- Paket Premium -->
        <div
          class="flex flex-col p-6 bg-gradient-to-b from-blue-600 to-blue-800 text-white rounded-2xl shadow-xl hover:scale-[1.02] transition">
          <form action="/owner/pricing" method="POST">
            @csrf
            <input type="hidden" name="plan_id" value="2">
            <h3 class="text-2xl font-semibold">Paket Premium</h3>
            <p class="mt-2 text-blue-100">Ideal untuk promosi serius dengan fitur lengkap.</p>
            <div class="my-4">
              <span class="text-4xl font-bold">Rp 99.000</span>
              <span class="text-blue-200">/ bulan</span>
            </div>
            <ul class="space-y-3 mb-6">
              <li>✅ Iklan tak terbatas</li>
              <li>✅ Hingga 10 foto per iklan</li>
              <li>✅ Prioritas tampil di halaman utama</li>
              <li>✅ Statistik lengkap (tayangan & klik)</li>
              <li>✅ Support prioritas</li>
            </ul>
            <button type="submit"
              class="mt-auto inline-block px-5 py-3 rounded-xl text-center bg-white text-blue-700 font-bold hover:bg-gray-100 transition">
              Pilih Paket Premium
            </button>
          </form>
        </div>

      </div>
    </div>
  </main>
</body>

</html>
