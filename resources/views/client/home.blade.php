@extends('client.components.base')

@section('page-content')
  <main class="bg-gray-50">
    <section class="relative text-center py-20 md:py-32 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1517524008697-84bbe3c3fd98?q=80&w=1964&auto=format&fit=crop');">
        <div class="absolute inset-0 bg-black/60"></div> <div class="relative container mx-auto px-6">
            <h1 class="text-4xl md:text-5xl font-bold text-white leading-tight">Sewa Mobil & Motor Terbaik di Kota Anda</h1>
            <p class="mt-4 text-lg text-gray-200 max-w-2xl mx-auto">Temukan kendaraan yang tepat untuk perjalanan Anda dengan mudah, cepat, dan aman.</p>
            <div class="mt-8 max-w-2xl mx-auto bg-white p-4 rounded-lg shadow-2xl flex flex-col md:flex-row items-center gap-4">
                <div class="relative w-full">
                    <svg class="w-6 h-6 text-gray-400 absolute left-3 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <input type="text" placeholder="Masukkan kota atau lokasi (e.g., Surabaya)" class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
                <button class="w-full md:w-auto bg-indigo-600 text-white px-8 py-3 rounded-md hover:bg-indigo-700 transition duration-300 font-semibold shrink-0">Cari Kendaraan</button>
            </div>
        </div>
    </section>

    <section id="keunggulan" class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Mengapa Memilih RentalYuk?</h2>
                <p class="mt-2 text-gray-600">Kami memberikan yang terbaik untuk perjalanan Anda.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div class="p-6">
                    <div class="flex items-center justify-center h-16 w-16 rounded-full bg-indigo-100 text-indigo-600 mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v.01" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Harga Terbaik</h3>
                    <p class="text-gray-600">Dapatkan penawaran harga sewa paling kompetitif tanpa biaya tersembunyi.</p>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-center h-16 w-16 rounded-full bg-indigo-100 text-indigo-600 mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Banyak Pilihan</h3>
                    <p class="text-gray-600">Dari mobil keluarga hingga motor lincah, temukan kendaraan sesuai kebutuhan Anda.</p>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-center h-16 w-16 rounded-full bg-indigo-100 text-indigo-600 mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Proses Mudah & Aman</h3>
                    <p class="text-gray-600">Pesan kendaraan impian Anda hanya dalam beberapa klik dengan sistem yang aman.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="mobil" class="py-16 bg-gray-50">
      <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">Pilihan Mobil Terpopuler</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300 hover:shadow-xl">
                <img src="https://placehold.co/600x400/3498db/ffffff?text=Toyota+Avanza" alt="Toyota Avanza" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Toyota Avanza</h3>
                    <div class="flex items-center gap-4 text-sm text-gray-600 mb-4">
                        <span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>Manual</span>
                        <span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>7 Kursi</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="text-lg font-bold text-indigo-600">Rp 350.000<span class="text-sm font-normal text-gray-500">/hari</span></p>
                        <a href="#" class="bg-indigo-100 text-indigo-700 px-4 py-2 rounded-md hover:bg-indigo-200 font-semibold text-sm transition duration-300">Sewa Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300 hover:shadow-xl">
                <img src="https://placehold.co/600x400/e74c3c/ffffff?text=Honda+Brio" alt="Honda Brio" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Honda Brio</h3>
                    <div class="flex items-center gap-4 text-sm text-gray-600 mb-4">
                        <span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>Matic</span>
                        <span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>5 Kursi</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="text-lg font-bold text-indigo-600">Rp 300.000<span class="text-sm font-normal text-gray-500">/hari</span></p>
                        <a href="#" class="bg-indigo-100 text-indigo-700 px-4 py-2 rounded-md hover:bg-indigo-200 font-semibold text-sm transition duration-300">Sewa Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300 hover:shadow-xl">
                <img src="https://placehold.co/600x400/2ecc71/ffffff?text=Mitsubishi+Xpander" alt="Mitsubishi Xpander" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Mitsubishi Xpander</h3>
                    <div class="flex items-center gap-4 text-sm text-gray-600 mb-4">
                        <span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>Matic</span>
                        <span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>7 Kursi</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="text-lg font-bold text-indigo-600">Rp 400.000<span class="text-sm font-normal text-gray-500">/hari</span></p>
                        <a href="#" class="bg-indigo-100 text-indigo-700 px-4 py-2 rounded-md hover:bg-indigo-200 font-semibold text-sm transition duration-300">Sewa Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300 hover:shadow-xl">
                <img src="https://placehold.co/600x400/9b59b6/ffffff?text=Daihatsu+Terios" alt="Daihatsu Terios" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Daihatsu Terios</h3>
                    <div class="flex items-center gap-4 text-sm text-gray-600 mb-4">
                        <span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>Manual</span>
                        <span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>7 Kursi</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="text-lg font-bold text-indigo-600">Rp 380.000<span class="text-sm font-normal text-gray-500">/hari</span></p>
                        <a href="#" class="bg-indigo-100 text-indigo-700 px-4 py-2 rounded-md hover:bg-indigo-200 font-semibold text-sm transition duration-300">Sewa Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-12">
            <a href="#" class="bg-indigo-600 text-white px-8 py-3 rounded-md hover:bg-indigo-700 transition duration-300 font-semibold">Lihat Semua Mobil</a>
        </div>
      </div>
    </section>

    <section id="motor" class="py-16 bg-white">
      <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">Pilihan Motor Paling Dicari</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300 hover:shadow-xl">
                <img src="https://placehold.co/600x400/f1c40f/ffffff?text=Honda+Vario+150" alt="Honda Vario 150" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Honda Vario 150</h3>
                    <p class="text-gray-600 mb-4 text-sm">Motor Matic</p>
                    <div class="flex justify-between items-center">
                        <p class="text-lg font-bold text-indigo-600">Rp 100.000<span class="text-sm font-normal text-gray-500">/hari</span></p>
                        <a href="#" class="bg-indigo-100 text-indigo-700 px-4 py-2 rounded-md hover:bg-indigo-200 font-semibold text-sm transition duration-300">Sewa Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300 hover:shadow-xl">
                <img src="https://placehold.co/600x400/1abc9c/ffffff?text=Yamaha+NMAX" alt="Yamaha NMAX" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Yamaha NMAX</h3>
                    <p class="text-gray-600 mb-4 text-sm">Motor Matic</p>
                    <div class="flex justify-between items-center">
                        <p class="text-lg font-bold text-indigo-600">Rp 150.000<span class="text-sm font-normal text-gray-500">/hari</span></p>
                        <a href="#" class="bg-indigo-100 text-indigo-700 px-4 py-2 rounded-md hover:bg-indigo-200 font-semibold text-sm transition duration-300">Sewa Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300 hover:shadow-xl">
                <img src="https://placehold.co/600x400/34495e/ffffff?text=Kawasaki+KLX" alt="Kawasaki KLX" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Kawasaki KLX</h3>
                    <p class="text-gray-600 mb-4 text-sm">Motor Sport</p>
                    <div class="flex justify-between items-center">
                        <p class="text-lg font-bold text-indigo-600">Rp 200.000<span class="text-sm font-normal text-gray-500">/hari</span></p>
                        <a href="#" class="bg-indigo-100 text-indigo-700 px-4 py-2 rounded-md hover:bg-indigo-200 font-semibold text-sm transition duration-300">Sewa Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300 hover:shadow-xl">
                <img src="https://placehold.co/600x400/e67e22/ffffff?text=Honda+Beat" alt="Honda Beat" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Honda Beat</h3>
                    <p class="text-gray-600 mb-4 text-sm">Motor Matic</p>
                    <div class="flex justify-between items-center">
                        <p class="text-lg font-bold text-indigo-600">Rp 80.000<span class="text-sm font-normal text-gray-500">/hari</span></p>
                        <a href="#" class="bg-indigo-100 text-indigo-700 px-4 py-2 rounded-md hover:bg-indigo-200 font-semibold text-sm transition duration-300">Sewa Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-12">
            <a href="#" class="bg-indigo-600 text-white px-8 py-3 rounded-md hover:bg-indigo-700 transition duration-300 font-semibold">Lihat Semua Motor</a>
        </div>
      </div>
    </section>

    <section id="tentang" class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="bg-white p-12 rounded-lg shadow-lg">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Tentang RentalYuk</h2>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            RentalYuk adalah platform marketplace yang menghubungkan pemilik kendaraan dengan para penyewa di seluruh Indonesia. Misi kami adalah membuat proses sewa kendaraan menjadi lebih mudah, transparan, dan aman bagi kedua belah pihak.
                        </p>
                        <p class="text-gray-600 leading-relaxed">
                            Kami percaya bahwa setiap orang berhak mendapatkan akses transportasi yang fleksibel sesuai kebutuhan. Baik untuk liburan keluarga, perjalanan bisnis, atau sekadar kebutuhan harian, RentalYuk hadir sebagai solusi andalan Anda.
                        </p>
                    </div>
                    <div>
                        <img src="https://placehold.co/600x400/a5b4fc/ffffff?text=Tim+Kami" alt="Tentang Kami" class="rounded-lg shadow-md">
                    </div>
                </div>
            </div>
        </div>
    </section>
  </main>
@endsection