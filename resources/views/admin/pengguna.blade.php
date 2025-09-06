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
          @foreach ($userDatas as $data)
            <tr>
              <td class="px-6 py-4 font-medium text-gray-900">{{ $data->name }}</td>
              <td class="px-6 py-4 text-gray-800">{{ $data->email }}</td>
              <td class="px-6 py-4">
                @if ($data->role == 'owner')
                  <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Owner</span>
              </td>
            @elseif($data->role == 'admin')
              <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Admin</span></td>
            @else
              <span class="px-2 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-800">User</span></td>
          @endif
          <td class="px-6 py-4 text-gray-800">{{ $data->created_at }}</td>
          <td class="px-6 py-4 space-x-2"><a href="#" class="text-indigo-600 hover:text-indigo-900">Detail</a>
          </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </main>
@endsection
