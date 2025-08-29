@extends('admin.components.base')

@section('page-content')
  <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
    <div class="bg-white rounded-lg shadow-lg overflow-x-auto">
      <table class="w-full">
        <thead class="bg-gray-50">
          <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama Paket</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Harga</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kuota Iklan</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Durasi</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          <tr>
            <td class="px-6 py-4 font-medium text-gray-900">Gratis</td>
            <td class="px-6 py-4 text-gray-800">Rp 0</td>
            <td class="px-6 py-4 text-gray-800">1</td>
            <td class="px-6 py-4 text-gray-800">-</td>
            <td class="px-6 py-4 space-x-2"><a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a></td>
          </tr>
          <tr>
            <td class="px-6 py-4 font-medium text-gray-900">Premium</td>
            <td class="px-6 py-4 text-gray-800">Rp 50.000</td>
            <td class="px-6 py-4 text-gray-800">5</td>
            <td class="px-6 py-4 text-gray-800">30 Hari</td>
            <td class="px-6 py-4 space-x-2"><a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a><a
                href="#" class="text-red-600 hover:text-red-900">Hapus</a></td>
          </tr>
          <tr>
            <td class="px-6 py-4 font-medium text-gray-900">Super Premium</td>
            <td class="px-6 py-4 text-gray-800">Rp 100.000</td>
            <td class="px-6 py-4 text-gray-800">15</td>
            <td class="px-6 py-4 text-gray-800">30 Hari</td>
            <td class="px-6 py-4 space-x-2"><a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a><a
                href="#" class="text-red-600 hover:text-red-900">Hapus</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
@endsection
