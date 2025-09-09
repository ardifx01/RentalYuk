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
          <td class="px-6 py-4 space-x-2"><button type="button" data-id="{{ $data->id }}"
              data-modal-target="default-modal" data-modal-toggle="default-modal"
              class="detail-btn text-indigo-600 hover:text-indigo-900">Detail</button>
          </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </main>
@endsection

@section('page-component')
  <div id="default-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow-sm">
        <!-- Modal header -->
        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
          <h3 class="text-xl font-semibold text-gray-900">
            Detail Pengguna
          </h3>
          <button type="button"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
            data-modal-hide="default-modal">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close modal</span>
          </button>
        </div>
        <!-- Modal body -->
        <div class="p-4 md:p-5 space-y-4">
          <div class="grid md:grid-cols-2 gap-4">
            <div class="col-span-2 md:col-span-1" id="detailRole">
            </div>
            <div class="col-span-2 md:col-span-1">
              <div class="flex justify-between">
                <p class="text-base leading-relaxed text-gray-500">
                  Nama
                </p>
                <p class="text-base leading-relaxed text-gray-500" id="detailName"></p>
              </div>
              <div class="flex justify-between">
                <p class="text-base leading-relaxed text-gray-500">
                  Email
                </p>
                <p class="text-base leading-relaxed text-gray-500" id="detailEmail"></p>
              </div>
              <div class="flex justify-between">
                <p class="text-base leading-relaxed text-gray-500">
                  No HP
                </p>
                <p class="text-base leading-relaxed text-gray-500" id="detailPhone"></p>
              </div>
            </div>
            <div class="col-span-2" id="detailVehicles">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('custom-js')
  <script>
    document.querySelectorAll('.detail-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        const user = @json($userDatas);
        console.log(user);
        const id = btn.getAttribute('data-id');
        const v = user.find(item => item.id == id);
        // Fill basic info
        document.getElementById('detailName').innerText = v.name ?? '';
        document.getElementById('detailEmail').innerText = v.email ?? '';
        document.getElementById('detailPhone').innerText = v.phone ?? '';

        let listContainer = document.getElementById('detailRole');
        if (v.role == "admin") {
          listContainer.innerHTML = `
            <div class="shadow rounded-lg bg-green-200 text-center p-4">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-10 w-10 mx-auto" viewBox="0 0 16 16">
                <path
                  d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4m9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0" />
              </svg>
              <p>Admin</p>
            </div>
          `;
        } else {
          listContainer.innerHTML = `
            <div class="shadow rounded-lg bg-yellow-200 text-center p-4">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-10 w-10 mx-auto" viewBox="0 0 16 16">
                  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
              </svg>
              <p>Pemilik</p>
            </div>
          `;
        }
        // let listContainer = document.getElementById('detailVehicles');
        // listContainer.innerHTML = ""; // clear old ones
        // if (v.vehicles && v.vehicles.length > 0) {
        //   v.vehicles.forEach(vehicle => {
        //     listContainer.innerHTML += `
      //     <div class="col-span-1 aspect-square">
      //       <img class="h-full w-full object-cover rounded shadow"
      //         src="/storage/photo/${v.type}/${vehicle.photo_url}" alt="">

      //     </div>
      //   `;
        //   });
        // }
      });
    });
  </script>
@endsection
