<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Pengguna - RentalYuk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        #sidebar { transition: transform 0.3s ease-in-out; }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar Admin -->
        <aside id="sidebar" class="w-64 bg-gray-900 text-white flex-shrink-0 flex flex-col justify-between p-4 transform -translate-x-full md:translate-x-0">
            <div>
                <a href="#" class="text-2xl font-bold text-white mb-8 block text-center">RentalYuk (Admin)</a>
                <nav class="space-y-2">
                    <a href="#" class="flex items-center px-4 py-2.5 text-gray-300 hover:bg-gray-700 hover:text-white rounded-lg">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        Dashboard
                    </a>
                    <a href="#" class="flex items-center px-4 py-2.5 text-gray-300 hover:bg-gray-700 hover:text-white rounded-lg">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Moderasi Iklan
                    </a>
                    <a href="#" class="flex items-center px-4 py-2.5 text-gray-300 hover:bg-gray-700 hover:text-white rounded-lg">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        Kelola Paket
                    </a>
                    <a href="#" class="flex items-center px-4 py-2.5 bg-indigo-600 rounded-lg text-white font-semibold">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M15 21a6 6 0 00-9-5.197M15 21a6 6 0 006-6v-1a3 3 0 00-3-3H9a3 3 0 00-3 3v1a6 6 0 006 6z"></path></svg>
                        Kelola Pengguna
                    </a>
                </nav>
            </div>
            <div><a href="#" class="flex items-center px-4 py-2.5 text-gray-300 hover:bg-gray-700 hover:text-white rounded-lg"><svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>Logout</a></div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="bg-white shadow-md flex justify-between items-center p-4">
                <button id="sidebar-toggle" class="md:hidden text-gray-600"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg></button>
                <h1 class="text-xl font-semibold text-gray-800">Kelola Pengguna</h1>
                <div class="w-64"><input type="text" placeholder="Cari pengguna..." class="w-full border border-gray-300 rounded-md py-2 px-3 text-sm"></div>
            </header>

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
                                <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Owner</span></td>
                                <td class="px-6 py-4 text-gray-800">20 Agu 2025</td>
                                <td class="px-6 py-4 space-x-2"><a href="#" class="text-indigo-600 hover:text-indigo-900">Detail</a></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 font-medium text-gray-900">Joko Susilo</td>
                                <td class="px-6 py-4 text-gray-800">joko@example.com</td>
                                <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Owner</span></td>
                                <td class="px-6 py-4 text-gray-800">26 Agu 2025</td>
                                <td class="px-6 py-4 space-x-2"><a href="#" class="text-indigo-600 hover:text-indigo-900">Detail</a></td>
                            </tr>
                             <tr>
                                <td class="px-6 py-4 font-medium text-gray-900">Rina Wati</td>
                                <td class="px-6 py-4 text-gray-800">rina.w@example.com</td>
                                <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-800">User</span></td>
                                <td class="px-6 py-4 text-gray-800">24 Agu 2025</td>
                                <td class="px-6 py-4 space-x-2"><a href="#" class="text-indigo-600 hover:text-indigo-900">Detail</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
    <script>
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebar-toggle');
        sidebarToggle.addEventListener('click', () => { sidebar.classList.toggle('-translate-x-full'); });
    </script>
</body>
</html>
