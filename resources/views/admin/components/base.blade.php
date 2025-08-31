<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard - RentalYuk</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }

    #sidebar {
      transition: transform 0.3s ease-in-out;
    }
  </style>
</head>

<body class="bg-gray-100">
  <div class="flex h-screen bg-gray-100"z>
    {{-- Side Bar --}}
    @include('admin.components.sidebar')
    <div class="flex-1 flex flex-col overflow-hidden">
      {{-- Top Bar --}}
      @include('admin.components.navbar')
      <!-- Main Content -->
      @yield('page-content')
    </div>
  </div>
  @yield('custom-js')
  <script>
    // Sidebar Toggle
    const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebar-toggle');
    sidebarToggle.addEventListener('click', () => {
      sidebar.classList.toggle('-translate-x-full');
    });
  </script>
</body>
</html>
