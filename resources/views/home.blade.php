<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Mobil & Motor - Cepat & Mudah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Header -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-indigo-600">RentalYuk</a>
            <div class="hidden md:flex space-x-8 items-center">
                <a href="#mobil" class="text-gray-600 hover:text-indigo-600 transition duration-300">Sewa Mobil</a>
                <a href="#motor" class="text-gray-600 hover:text-indigo-600 transition duration-300">Sewa Motor</a>
                <a href="#tentang" class="text-gray-600 hover:text-indigo-600 transition duration-300">Tentang Kami</a>
                <a href="#kontak" class="text-gray-600 hover:text-indigo-600 transition duration-300">Kontak</a>
            </div>
            <div class="hidden md:flex items-center space-x-4">
                 <a href="#" class="text-gray-600 hover:text-indigo-600">Masuk</a>
                 <a href="#" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition duration-300">Daftar</a>
            </div>
            <button id="mobile-menu-button" class="md:hidden text-gray-600 hover:text-indigo-600 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </button>
        </nav>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden px-6 pt-2 pb-4">
            <a href="#mobil" class="block text-gray-600 hover:text-indigo-600 py-2">Sewa Mobil</a>
            <a href="#motor" class="block text-gray-600 hover:text-indigo-600 py-2">Sewa Motor</a>
            <a href="#tentang" class="block text-gray-600 hover:text-indigo-600 py-2">Tentang Kami</a>
            <a href="#kontak" class="block text-gray-600 hover:text-indigo-600 py-2">Kontak</a>
            <div class="border-t border-gray-200 mt-4 pt-4">
                <a href="#" class="block text-gray-600 hover:text-indigo-600 py-2">Masuk</a>
                <a href="#" class="block bg-indigo-600 text-white text-center px-4 py-2 rounded-md hover:bg-indigo-700 transition duration-300 mt-2">Daftar</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <main class="container mx-auto px-6 py-12">
        <section class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight">Sewa Mobil & Motor Terbaik di Kota Anda</h1>
            <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">Temukan kendaraan yang tepat untuk perjalanan Anda dengan mudah, cepat, dan aman.</p>
            <div class="mt-8 max-w-2xl mx-auto bg-white p-4 rounded-lg shadow-lg flex flex-col md:flex-row items-center gap-4">
                <div class="relative w-full">
                    <svg class="w-6 h-6 text-gray-400 absolute left-3 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    <input type="text" placeholder="Masukkan kota atau lokasi (e.g., Surabaya)" class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
                <button class="w-full md:w-auto bg-indigo-600 text-white px-8 py-3 rounded-md hover:bg-indigo-700 transition duration-300 font-semibold">Cari Kendaraan</button>
            </div>
        </section>

        <!-- Featured Mobil Section -->
        <section id="mobil" class="mt-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Pilihan Mobil Terpopuler</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                <!-- Car Card 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                    <img src="https://placehold.co/600x400/3498db/ffffff?text=Toyota+Avanza" alt="Toyota Avanza" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Toyota Avanza</h3>
                        <p class="text-gray-600 mb-4">Manual | 7 Kursi</p>
                        <div class="flex justify-between items-center">
                            <p class="text-lg font-bold text-indigo-600">Rp 350.000<span class="text-sm font-normal text-gray-500">/hari</span></p>
                            <a href="#" class="bg-indigo-100 text-indigo-700 px-4 py-2 rounded-md hover:bg-indigo-200 font-semibold text-sm transition duration-300">Sewa Sekarang</a>
                        </div>
                    </div>
                </div>
                <!-- Car Card 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                    <img src="https://placehold.co/600x400/e74c3c/ffffff?text=Honda+Brio" alt="Honda Brio" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Honda Brio</h3>
                        <p class="text-gray-600 mb-4">Matic | 5 Kursi</p>
                        <div class="flex justify-between items-center">
                            <p class="text-lg font-bold text-indigo-600">Rp 300.000<span class="text-sm font-normal text-gray-500">/hari</span></p>
                            <a href="#" class="bg-indigo-100 text-indigo-700 px-4 py-2 rounded-md hover:bg-indigo-200 font-semibold text-sm transition duration-300">Sewa Sekarang</a>
                        </div>
                    </div>
                </div>
                <!-- Car Card 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                    <img src="https://placehold.co/600x400/2ecc71/ffffff?text=Mitsubishi+Xpander" alt="Mitsubishi Xpander" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Mitsubishi Xpander</h3>
                        <p class="text-gray-600 mb-4">Matic | 7 Kursi</p>
                        <div class="flex justify-between items-center">
                            <p class="text-lg font-bold text-indigo-600">Rp 400.000<span class="text-sm font-normal text-gray-500">/hari</span></p>
                            <a href="#" class="bg-indigo-100 text-indigo-700 px-4 py-2 rounded-md hover:bg-indigo-200 font-semibold text-sm transition duration-300">Sewa Sekarang</a>
                        </div>
                    </div>
                </div>
                <!-- Car Card 4 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                    <img src="https://placehold.co/600x400/9b59b6/ffffff?text=Daihatsu+Terios" alt="Daihatsu Terios" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Daihatsu Terios</h3>
                        <p class="text-gray-600 mb-4">Manual | 7 Kursi</p>
                        <div class="flex justify-between items-center">
                            <p class="text-lg font-bold text-indigo-600">Rp 380.000<span class="text-sm font-normal text-gray-500">/hari</span></p>
                            <a href="#" class="bg-indigo-100 text-indigo-700 px-4 py-2 rounded-md hover:bg-indigo-200 font-semibold text-sm transition duration-300">Sewa Sekarang</a>
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
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                    <img src="https://placehold.co/600x400/f1c40f/ffffff?text=Honda+Vario+150" alt="Honda Vario 150" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Honda Vario 150</h3>
                        <p class="text-gray-600 mb-4">Motor Matic</p>
                        <div class="flex justify-between items-center">
                            <p class="text-lg font-bold text-indigo-600">Rp 100.000<span class="text-sm font-normal text-gray-500">/hari</span></p>
                            <a href="#" class="bg-indigo-100 text-indigo-700 px-4 py-2 rounded-md hover:bg-indigo-200 font-semibold text-sm transition duration-300">Sewa Sekarang</a>
                        </div>
                    </div>
                </div>
                <!-- Motorcycle Card 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                    <img src="https://placehold.co/600x400/1abc9c/ffffff?text=Yamaha+NMAX" alt="Yamaha NMAX" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Yamaha NMAX</h3>
                        <p class="text-gray-600 mb-4">Motor Matic</p>
                        <div class="flex justify-between items-center">
                            <p class="text-lg font-bold text-indigo-600">Rp 150.000<span class="text-sm font-normal text-gray-500">/hari</span></p>
                            <a href="#" class="bg-indigo-100 text-indigo-700 px-4 py-2 rounded-md hover:bg-indigo-200 font-semibold text-sm transition duration-300">Sewa Sekarang</a>
                        </div>
                    </div>
                </div>
                <!-- Motorcycle Card 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                    <img src="https://placehold.co/600x400/34495e/ffffff?text=Kawasaki+KLX" alt="Kawasaki KLX" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Kawasaki KLX</h3>
                        <p class="text-gray-600 mb-4">Motor Sport</p>
                        <div class="flex justify-between items-center">
                            <p class="text-lg font-bold text-indigo-600">Rp 200.000<span class="text-sm font-normal text-gray-500">/hari</span></p>
                            <a href="#" class="bg-indigo-100 text-indigo-700 px-4 py-2 rounded-md hover:bg-indigo-200 font-semibold text-sm transition duration-300">Sewa Sekarang</a>
                        </div>
                    </div>
                </div>
                 <!-- Motorcycle Card 4 -->
                 <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                    <img src="https://placehold.co/600x400/e67e22/ffffff?text=Honda+Beat" alt="Honda Beat" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Honda Beat</h3>
                        <p class="text-gray-600 mb-4">Motor Matic</p>
                        <div class="flex justify-between items-center">
                            <p class="text-lg font-bold text-indigo-600">Rp 80.000<span class="text-sm font-normal text-gray-500">/hari</span></p>
                            <a href="#" class="bg-indigo-100 text-indigo-700 px-4 py-2 rounded-md hover:bg-indigo-200 font-semibold text-sm transition duration-300">Sewa Sekarang</a>
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
                        RentalYuk adalah platform marketplace yang menghubungkan pemilik kendaraan dengan para penyewa di seluruh Indonesia. Misi kami adalah membuat proses sewa kendaraan menjadi lebih mudah, transparan, dan aman bagi kedua belah pihak.
                    </p>
                    <p class="text-gray-600">
                        Kami percaya bahwa setiap orang berhak mendapatkan akses transportasi yang fleksibel sesuai kebutuhan. Baik untuk liburan keluarga, perjalanan bisnis, atau sekadar kebutuhan harian, RentalYuk hadir sebagai solusi andalan Anda.
                    </p>
                </div>
                <div>
                    <img src="https://placehold.co/600x400/a5b4fc/ffffff?text=Tim+Kami" alt="Tentang Kami" class="rounded-lg shadow-md">
                </div>
            </div>
        </section>
        
        <!-- Contact Section -->
        <section id="kontak" class="mt-16">
            <div class="text-center">
                 <h2 class="text-3xl font-bold text-gray-900 mb-4">Hubungi Kami</h2>
                 <p class="text-gray-600 max-w-2xl mx-auto">Punya pertanyaan atau butuh bantuan? Jangan ragu untuk menghubungi tim kami.</p>
            </div>
            <div class="mt-8 max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
                <form>
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-semibold mb-2">Nama</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700 font-semibold mb-2">Pesan</label>
                        <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required></textarea>
                    </div>
                    <button type="submit" class="w-full bg-indigo-600 text-white px-8 py-3 rounded-md hover:bg-indigo-700 transition duration-300 font-semibold">Kirim Pesan</button>
                </form>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-16">
        <div class="container mx-auto px-6 py-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">RentalYuk</h3>
                    <p class="text-gray-400">Platform sewa kendaraan terpercaya di Indonesia. Hubungkan pemilik dan penyewa dengan mudah.</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Navigasi</h3>
                    <ul class="space-y-2">
                        <li><a href="#mobil" class="text-gray-400 hover:text-white">Sewa Mobil</a></li>
                        <li><a href="#motor" class="text-gray-400 hover:text-white">Sewa Motor</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Jadi Mitra</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Kebijakan Privasi</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Ikuti Kami</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg></a>
                        <a href="#" class="text-gray-400 hover:text-white"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.71v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg></a>
                        <a href="#" class="text-gray-400 hover:text-white"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.024.06 1.378.06 3.808s-.012 2.784-.06 3.808c-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.024.048-1.378.06-3.808.06s-2.784-.013-3.808-.06c-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.048-1.024-.06-1.378-.06-3.808s.012-2.784.06-3.808c.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 016.08 2.525c.636-.247 1.363-.416 2.427-.465C9.53 2.013 9.884 2 12.315 2zM12 7a5 5 0 100 10 5 5 0 000-10zm0 8a3 3 0 110-6 3 3 0 010 6zm6.406-11.845a1.25 1.25 0 100 2.5 1.25 1.25 0 000-2.5z" clip-rule="evenodd" /></svg></a>
                    </div>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-700 pt-6 text-center text-gray-400">
                <p>&copy; 2024 RentalYuk. Semua Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>

</body>
</html>
