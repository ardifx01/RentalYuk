@extends('client.components.base')

@section('page-content')
  <!-- Hero Section -->
  <main class="container mx-auto px-6 py-12">
    <section class="text-center">
      <h1 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight">Sewa Mobil & Motor Terbaik di Kota Anda
      </h1>
      <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">Temukan kendaraan yang tepat untuk perjalanan Anda dengan
        mudah, cepat, dan aman.</p>
      <div class="mt-8 max-w-2xl mx-auto bg-white p-4 rounded-lg shadow-lg flex flex-col md:flex-row items-center gap-4">
        <div class="relative w-full">
          <svg class="w-6 h-6 text-gray-400 absolute left-3 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor"
            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z">
            </path>
          </svg>
          <input type="text" placeholder="Masukkan kota atau lokasi (e.g., Surabaya)"
            class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>
        <button
          class="w-full md:w-auto bg-indigo-600 text-white px-8 py-3 rounded-md hover:bg-indigo-700 transition duration-300 font-semibold">Cari
          Kendaraan</button>
      </div>
    </section>

    <!-- Featured Mobil Section -->
    <section id="mobil" class="mt-16">
      <h2 class="text-3xl font-bold text-gray-900 mb-8">Pilihan Mobil Terpopuler</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        <!-- Car Card 1 -->
        <div
          class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
          <img src="https://placehold.co/600x400/3498db/ffffff?text=Toyota+Avanza" alt="Toyota Avanza"
            class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2">Toyota Avanza</h3>
            <p class="text-gray-600 mb-4">Manual | 7 Kursi</p>
            <div class="flex justify-between items-center">
              <p class="text-lg font-bold text-indigo-600">Rp 350.000<span
                  class="text-sm font-normal text-gray-500">/hari</span></p>
              <a href="#"
                class="bg-indigo-100 text-indigo-700 px-4 py-2 rounded-md hover:bg-indigo-200 font-semibold text-sm transition duration-300">Sewa
                Sekarang</a>
            </div>
          </div>
        </div>
        <!-- Car Card 2 -->
        <div
          class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
          <img src="https://placehold.co/600x400/e74c3c/ffffff?text=Honda+Brio" alt="Honda Brio"
            class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2">Honda Brio</h3>
            <p class="text-gray-600 mb-4">Matic | 5 Kursi</p>
            <div class="flex justify-between items-center">
              <p class="text-lg font-bold text-indigo-600">Rp 300.000<span
                  class="text-sm font-normal text-gray-500">/hari</span></p>
              <a href="#"
                class="bg-indigo-100 text-indigo-700 px-4 py-2 rounded-md hover:bg-indigo-200 font-semibold text-sm transition duration-300">Sewa
                Sekarang</a>
            </div>
          </div>
        </div>
        <!-- Car Card 3 -->
        <div
          class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
          <img src="https://placehold.co/600x400/2ecc71/ffffff?text=Mitsubishi+Xpander" alt="Mitsubishi Xpander"
            class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2">Mitsubishi Xpander</h3>
            <p class="text-gray-600 mb-4">Matic | 7 Kursi</p>
            <div class="flex justify-between items-center">
              <p class="text-lg font-bold text-indigo-600">Rp 400.000<span
                  class="text-sm font-normal text-gray-500">/hari</span></p>
              <a href="#"
                class="bg-indigo-100 text-indigo-700 px-4 py-2 rounded-md hover:bg-indigo-200 font-semibold text-sm transition duration-300">Sewa
                Sekarang</a>
            </div>
          </div>
        </div>
        <!-- Car Card 4 -->
        <div
          class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
          <img src="https://placehold.co/600x400/9b59b6/ffffff?text=Daihatsu+Terios" alt="Daihatsu Terios"
            class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2">Daihatsu Terios</h3>
            <p class="text-gray-600 mb-4">Manual | 7 Kursi</p>
            <div class="flex justify-between items-center">
              <p class="text-lg font-bold text-indigo-600">Rp 380.000<span
                  class="text-sm font-normal text-gray-500">/hari</span></p>
              <a href="#"
                class="bg-indigo-100 text-indigo-700 px-4 py-2 rounded-md hover:bg-indigo-200 font-semibold text-sm transition duration-300">Sewa
                Sekarang</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Featured Motor Section -->
    <section id="motor" class="mt-16">
      <h2 class="text-3xl font-bold text-gray-900 mb-8">Pilihan Motor Paling Dicari</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        <!-- Motorcycle Card 1 -->
        <div
          class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
          <img src="https://placehold.co/600x400/f1c40f/ffffff?text=Honda+Vario+150" alt="Honda Vario 150"
            class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2">Honda Vario 150</h3>
            <p class="text-gray-600 mb-4">Motor Matic</p>
            <div class="flex justify-between items-center">
              <p class="text-lg font-bold text-indigo-600">Rp 100.000<span
                  class="text-sm font-normal text-gray-500">/hari</span></p>
              <a href="#"
                class="bg-indigo-100 text-indigo-700 px-4 py-2 rounded-md hover:bg-indigo-200 font-semibold text-sm transition duration-300">Sewa
                Sekarang</a>
            </div>
          </div>
        </div>
        <!-- Motorcycle Card 2 -->
        <div
          class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
          <img src="https://placehold.co/600x400/1abc9c/ffffff?text=Yamaha+NMAX" alt="Yamaha NMAX"
            class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2">Yamaha NMAX</h3>
            <p class="text-gray-600 mb-4">Motor Matic</p>
            <div class="flex justify-between items-center">
              <p class="text-lg font-bold text-indigo-600">Rp 150.000<span
                  class="text-sm font-normal text-gray-500">/hari</span></p>
              <a href="#"
                class="bg-indigo-100 text-indigo-700 px-4 py-2 rounded-md hover:bg-indigo-200 font-semibold text-sm transition duration-300">Sewa
                Sekarang</a>
            </div>
          </div>
        </div>
        <!-- Motorcycle Card 3 -->
        <div
          class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
          <img src="https://placehold.co/600x400/34495e/ffffff?text=Kawasaki+KLX" alt="Kawasaki KLX"
            class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2">Kawasaki KLX</h3>
            <p class="text-gray-600 mb-4">Motor Sport</p>
            <div class="flex justify-between items-center">
              <p class="text-lg font-bold text-indigo-600">Rp 200.000<span
                  class="text-sm font-normal text-gray-500">/hari</span></p>
              <a href="#"
                class="bg-indigo-100 text-indigo-700 px-4 py-2 rounded-md hover:bg-indigo-200 font-semibold text-sm transition duration-300">Sewa
                Sekarang</a>
            </div>
          </div>
        </div>
        <!-- Motorcycle Card 4 -->
        <div
          class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
          <img src="https://placehold.co/600x400/e67e22/ffffff?text=Honda+Beat" alt="Honda Beat"
            class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2">Honda Beat</h3>
            <p class="text-gray-600 mb-4">Motor Matic</p>
            <div class="flex justify-between items-center">
              <p class="text-lg font-bold text-indigo-600">Rp 80.000<span
                  class="text-sm font-normal text-gray-500">/hari</span></p>
              <a href="#"
                class="bg-indigo-100 text-indigo-700 px-4 py-2 rounded-md hover:bg-indigo-200 font-semibold text-sm transition duration-300">Sewa
                Sekarang</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Us Section -->
    <section id="tentang" class="mt-16 bg-white p-12 rounded-lg shadow-lg">
      <div class="grid md:grid-cols-2 gap-12 items-center">
        <div>
          <h2 class="text-3xl font-bold text-gray-900 mb-4">Tentang RentalYuk</h2>
          <p class="text-gray-600 mb-4">
            RentalYuk adalah platform marketplace yang menghubungkan pemilik kendaraan dengan para penyewa di seluruh
            Indonesia. Misi kami adalah membuat proses sewa kendaraan menjadi lebih mudah, transparan, dan aman bagi
            kedua belah pihak.
          </p>
          <p class="text-gray-600">
            Kami percaya bahwa setiap orang berhak mendapatkan akses transportasi yang fleksibel sesuai kebutuhan.
            Baik untuk liburan keluarga, perjalanan bisnis, atau sekadar kebutuhan harian, RentalYuk hadir sebagai
            solusi andalan Anda.
          </p>
        </div>
        <div>
          <img src="https://placehold.co/600x400/a5b4fc/ffffff?text=Tim+Kami" alt="Tentang Kami"
            class="rounded-lg shadow-md">
        </div>
      </div>
    </section>
  </main>
@endsection
