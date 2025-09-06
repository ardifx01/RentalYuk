@extends('owner.components.base')

@section('page-content')
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
  <div class="max-w-2xl mx-auto">
    <!-- Form Profil Akun -->
    <form action="/owner/pengaturan" method="POST" class="bg-white p-6 rounded-lg shadow-lg mb-8">
      @csrf
      @method('PUT')
      <h2 class="text-xl font-semibold border-b pb-4 mb-6">Profil Akun</h2>
      <div class="space-y-4">
        <div>
          <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
          <input type="text" name="name" id="name" value="{{$userData->name}}"
            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Alamat Email</label>
          <input type="email" name="email" id="email" value="{{ $userData->email }}"
            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm bg-gray-200"
            readonly disabled>
          <p class="mt-1 text-xs text-gray-500">Email tidak dapat diubah.</p>
        </div>
        <div>
          <label for="phone" class="block text-sm font-medium text-gray-700">Nomor WhatsApp</label>
          <input type="tel" name="phone" id="phone" value="{{ $userData->phone }}"
            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
      </div>
      <div class="flex justify-end mt-6">
        <button type="submit"
          class="bg-indigo-600 text-white px-6 py-2 rounded-md hover:bg-indigo-700 font-semibold text-sm transition duration-300">Simpan
          Perubahan</button>
      </div>
    </form>

    <!-- Form Ubah Password -->
    <form action="/owner/pengaturan/pass" method="POST" class="bg-white p-6 rounded-lg shadow-lg">
      @csrf
      @method('PUT')
      <h2 class="text-xl font-semibold border-b pb-4 mb-6">Ubah Password</h2>
      <div class="space-y-4">
        {{-- <div>
          <label for="current_password" class="block text-sm font-medium text-gray-700">Password Saat Ini</label>
          <input type="password" name="current_password" id="current_password"
            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div> --}}
        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Password Baru</label>
          <input type="password" name="password" id="password"
            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div>
          <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Password Baru</label>
          <input type="password" name="password_confirmation" id="password_confirmation"
            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
      </div>
      <div class="flex justify-end mt-6">
        <button type="submit"
          class="bg-indigo-600 text-white px-6 py-2 rounded-md hover:bg-indigo-700 font-semibold text-sm transition duration-300">Ubah
          Password</button>
      </div>
    </form>
  </div>
</main>
@endsection
