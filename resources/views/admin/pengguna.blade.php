@extends('admin.components.base')

@section('page-content')
  <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
    <div class="bg-white rounded-lg shadow-lg overflow-x-auto">
      <table class="w-full">
        <thead class="bg-gray-50">
          <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Role</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal Bergabung</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          <tr>
            <td class="px-6 py-4 font-medium text-gray-900">Budi Santoso</td>
            <td class="px-6 py-4 text-gray-800">budi.santoso@example.com</td>
            <td class="px-6 py-4"><span
                class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Owner</span></td>
            <td class="px-6 py-4 text-gray-800">20 Agu 2025</td>
            <td class="px-6 py-4 space-x-2"><a href="#" class="text-indigo-600 hover:text-indigo-900">Detail</a>
            </td>
          </tr>
          <tr>
            <td class="px-6 py-4 font-medium text-gray-900">Joko Susilo</td>
            <td class="px-6 py-4 text-gray-800">joko@example.com</td>
            <td class="px-6 py-4"><span
                class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Owner</span></td>
            <td class="px-6 py-4 text-gray-800">26 Agu 2025</td>
            <td class="px-6 py-4 space-x-2"><a href="#" class="text-indigo-600 hover:text-indigo-900">Detail</a>
            </td>
          </tr>
          <tr>
            <td class="px-6 py-4 font-medium text-gray-900">Rina Wati</td>
            <td class="px-6 py-4 text-gray-800">rina.w@example.com</td>
            <td class="px-6 py-4"><span
                class="px-2 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-800">User</span></td>
            <td class="px-6 py-4 text-gray-800">24 Agu 2025</td>
            <td class="px-6 py-4 space-x-2"><a href="#" class="text-indigo-600 hover:text-indigo-900">Detail</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
@endsection
