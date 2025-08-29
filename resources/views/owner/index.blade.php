@extends('owner.components.base')

@section('page-content')
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
  <!-- Stat Cards -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <div class="bg-white p-6 rounded-lg shadow-lg flex items-center justify-between">
      <div>
        <p class="text-sm text-gray-500">Total Iklan Aktif</p>
        <p class="text-3xl font-bold text-gray-800">3 / 5</p>
      </div>
      <div class="bg-indigo-100 text-indigo-600 p-3 rounded-full">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M9 17v-2a4 4 0 00-4-4H3V9h2a4 4 0 004-4V3l5 4-5 4zm6 0v-2a4 4 0 014-4h2V9h-2a4 4 0 01-4-4V3l-5 4 5 4z">
          </path>
        </svg>
      </div>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-lg flex items-center justify-between">
      <div>
        <p class="text-sm text-gray-500">Total Dilihat (30 hari)</p>
        <p class="text-3xl font-bold text-gray-800">1,250</p>
      </div>
      <div class="bg-green-100 text-green-600 p-3 rounded-full">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
          </path>
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
          </path>
        </svg>
      </div>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-lg flex items-center justify-between">
      <div>
        <p class="text-sm text-gray-500">Klik WhatsApp (30 hari)</p>
        <p class="text-3xl font-bold text-gray-800">89</p>
      </div>
      <div class="bg-blue-100 text-blue-600 p-3 rounded-full">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
          </path>
        </svg>
      </div>
    </div>
  </div>

  <!-- Daftar Iklan -->
  <div class="mt-8 bg-white rounded-lg shadow-lg">
    <div class="p-6 flex justify-between items-center border-b">
      <h2 class="text-xl font-semibold text-gray-800">Daftar Iklan Anda</h2>
      <button
        class="bg-indigo-600 text-white px-5 py-2 rounded-md hover:bg-indigo-700 font-semibold text-sm transition duration-300">
        + Tambah Iklan Baru
      </button>
    </div>
    <div class="overflow-x-auto">
      <table class="w-full">
        <thead class="bg-gray-50">
          <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kendaraan</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Harga/Hari</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          <!-- Row 1 -->
          <tr>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center">
                <div class="flex-shrink-0 h-10 w-10">
                  <img class="h-10 w-10 rounded-md object-cover"
                    src="https://placehold.co/100x100/3498db/ffffff?text=AV" alt="">
                </div>
                <div class="ml-4">
                  <div class="text-sm font-medium text-gray-900">Toyota Avanza</div>
                  <div class="text-sm text-gray-500">Surabaya</div>
                </div>
              </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">Rp 350.000</td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span
                class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Aktif</span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
              <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
              <a href="#" class="text-yellow-600 hover:text-yellow-900">Nonaktifkan</a>
              <a href="#" class="text-red-600 hover:text-red-900">Hapus</a>
            </td>
          </tr>
          <!-- Row 2 -->
          <tr>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center">
                <div class="flex-shrink-0 h-10 w-10">
                  <img class="h-10 w-10 rounded-md object-cover"
                    src="https://placehold.co/100x100/f1c40f/ffffff?text=VA" alt="">
                </div>
                <div class="ml-4">
                  <div class="text-sm font-medium text-gray-900">Honda Vario 150</div>
                  <div class="text-sm text-gray-500">Surabaya</div>
                </div>
              </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">Rp 100.000</td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span
                class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Aktif</span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
              <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
              <a href="#" class="text-yellow-600 hover:text-yellow-900">Nonaktifkan</a>
              <a href="#" class="text-red-600 hover:text-red-900">Hapus</a>
            </td>
          </tr>
          <!-- Row 3 -->
          <tr>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center">
                <div class="flex-shrink-0 h-10 w-10">
                  <img class="h-10 w-10 rounded-md object-cover"
                    src="https://placehold.co/100x100/e74c3c/ffffff?text=BR" alt="">
                </div>
                <div class="ml-4">
                  <div class="text-sm font-medium text-gray-900">Honda Brio</div>
                  <div class="text-sm text-gray-500">Sidoarjo</div>
                </div>
              </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">Rp 300.000</td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span
                class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">Nonaktif</span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
              <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
              <a href="#" class="text-green-600 hover:text-green-900">Aktifkan</a>
              <a href="#" class="text-red-600 hover:text-red-900">Hapus</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</main>
@endsection