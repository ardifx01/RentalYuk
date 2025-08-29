@extends('admin.components.base')

@section('page-content')
  <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
    <!-- Stat Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <p class="text-sm text-gray-500">Total Pengguna</p>
        <p class="text-3xl font-bold text-gray-800">142</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <p class="text-sm text-gray-500">Total Iklan</p>
        <p class="text-3xl font-bold text-gray-800">210</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <p class="text-sm text-gray-500">Iklan Pending</p>
        <p class="text-3xl font-bold text-yellow-500">3</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <p class="text-sm text-gray-500">Pendapatan (Bulan Ini)</p>
        <p class="text-3xl font-bold text-green-500">Rp 1.550.000</p>
      </div>
    </div>

    <!-- Chart and Recent Transactions -->
    <div class="mt-8 grid grid-cols-1 lg:grid-cols-3 gap-6">
      <div class="lg:col-span-2 bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-xl font-semibold mb-4">Statistik Transaksi (6 Bulan Terakhir)</h2>
        <canvas id="transactionsChart"></canvas>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-xl font-semibold mb-4">Pembayaran Terbaru</h2>
        <ul class="space-y-4">
          <li class="flex justify-between items-center">
            <div>
              <p class="font-semibold text-gray-800">Budi Santoso</p>
              <p class="text-sm text-gray-500">Paket Super Premium</p>
            </div>
            <p class="font-bold text-green-600">+ Rp 100.000</p>
          </li>
          <li class="flex justify-between items-center">
            <div>
              <p class="font-semibold text-gray-800">Joko Susilo</p>
              <p class="text-sm text-gray-500">Paket Premium</p>
            </div>
            <p class="font-bold text-green-600">+ Rp 50.000</p>
          </li>
          <li class="flex justify-between items-center">
            <div>
              <p class="font-semibold text-gray-800">Siti Aminah</p>
              <p class="text-sm text-gray-500">Paket Premium</p>
            </div>
            <p class="font-bold text-green-600">+ Rp 50.000</p>
          </li>
        </ul>
      </div>
    </div>
  </main>
@endsection

