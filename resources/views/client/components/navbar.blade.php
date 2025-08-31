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
      @if (session()->has('name'))
      <b>Welcome, {{ session('name') }}</b>
      @else
      <a href="/login" class="text-gray-600 hover:text-indigo-600">Masuk</a>
      <a href="/register"
        class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition duration-300">Daftar</a>
      @endif
    </div>
    <button id="mobile-menu-button" class="md:hidden text-gray-600 hover:text-indigo-600 focus:outline-none">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
      </svg>
    </button>
  </nav>
  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden md:hidden px-6 pt-2 pb-4">
    <a href="#mobil" class="block text-gray-600 hover:text-indigo-600 py-2">Sewa Mobil</a>
    <a href="#motor" class="block text-gray-600 hover:text-indigo-600 py-2">Sewa Motor</a>
    <a href="#tentang" class="block text-gray-600 hover:text-indigo-600 py-2">Tentang Kami</a>
    <a href="#kontak" class="block text-gray-600 hover:text-indigo-600 py-2">Kontak</a>
    <div class="border-t border-gray-200 mt-4 pt-4">
      <a href="/login" class="block text-gray-600 hover:text-indigo-600 py-2">Masuk</a>
      <a href="/register"
        class="block bg-indigo-600 text-white text-center px-4 py-2 rounded-md hover:bg-indigo-700 transition duration-300 mt-2">Daftar</a>
    </div>
  </div>
</header>
