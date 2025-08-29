@extends('admin.components.base')

@section('page-content')
  <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
    <div class="bg-white rounded-lg shadow-lg">
      <div class="p-6 border-b">
        <h2 class="text-xl font-semibold text-gray-800">Iklan Menunggu Persetujuan (3)</h2>
      </div>
      <div class="overflow-x-auto">
        <table class="w-full">
          <thead class="bg-gray-50">
            <tr>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pemilik</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kendaraan</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Dibuat
              </th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <!-- Iklan 1 -->
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm font-medium text-gray-900">Joko Susilo</div>
                <div class="text-sm text-gray-500">joko@example.com</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm font-medium text-gray-900">Daihatsu Ayla</div>
                <div class="text-sm text-gray-500">Malang</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">26 Agu 2025</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                <button class="bg-green-500 text-white px-3 py-1 rounded-md hover:bg-green-600 text-xs">Setujui</button>
                <button class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600 text-xs">Tolak</button>
                <a href="#" class="text-indigo-600 hover:text-indigo-900 text-xs">Lihat Detail</a>
              </td>
            </tr>
            <!-- Iklan 2 -->
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm font-medium text-gray-900">Siti Aminah</div>
                <div class="text-sm text-gray-500">siti.a@example.com</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm font-medium text-gray-900">Yamaha Fazzio</div>
                <div class="text-sm text-gray-500">Bandung</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">25 Agu 2025</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                <button class="bg-green-500 text-white px-3 py-1 rounded-md hover:bg-green-600 text-xs">Setujui</button>
                <button class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600 text-xs">Tolak</button>
                <a href="#" class="text-indigo-600 hover:text-indigo-900 text-xs">Lihat Detail</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </main>
@endsection
