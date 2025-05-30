<!-- resources/views/layouts/dashboard.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8f9fa;
        }

        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #212529;
            color: white;
            padding-top: 60px;
            transition: all 0.3s;
        }

        .sidebar form {
            margin: 0;
        }

        .sidebar-logout-btn {
            width: 100%;
            padding: 12px 20px;
            display: flex;
            align-items: center;
            color: white;
            background: none;
            border: none;
            font: inherit;
            cursor: pointer;
            text-align: left;
        }

        .sidebar-logout-btn:hover {
            background-color: #343a40;
            text-decoration: none;
        }

        .sidebar a {
            padding: 12px 20px;
            display: block;
            color: white;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background-color: #343a40;
        }

        .sidebar-collapsed {
            width: 80px;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            transition: all 0.3s;
        }

        .content-collapsed {
            margin-left: 80px;
        }

        .navbar {
            position: fixed;
            width: 100%;
            z-index: 1000;
        }

        .sidebar-toggle {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark px-3">
        <span class="navbar-brand mb-0 h1">Dashboard</span>
        <span class="text-white sidebar-toggle" onclick="toggleSidebar()"><i class="bi bi-list"></i></span>
    </nav>

    <!-- Sidebar -->
    <div id="sidebar" class="sidebar">
        <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <i class="bi bi-house-door"></i> <span class="ms-2">Dashboard</span>
        </a>
        <a href="{{ route('pages.about.index') }}" class="{{ request()->routeIs('pages.about.*') ? 'active' : '' }}">
            <i class="bi bi-info-circle"></i> <span class="ms-2">About</span>
        </a>
        <a href="{{ route('pages.gallery.index') }}" class="{{ request()->routeIs('pages.gallery.*') ? 'active' : '' }}">
            <i class="bi bi-image"></i> <span class="ms-2">Gallery</span>
        </a>
        <a href="{{ route('pages.guru.index') }}" class="{{ request()->routeIs('pages.guru.*') ? 'active' : '' }}">
            <i class="bi bi-person-circle"></i> <span class="ms-2">Guru</span>
        </a>

        <!-- Logout Form -->
        <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
            @csrf
            <button type="submit" class="sidebar-logout-btn">
                <i class="bi bi-box-arrow-right"></i> <span class="ms-2">Logout</span>
            </button>
        </form>
    </div>

    <!-- Content -->
    <div id="content" class="content">
        <div class="container-fluid pt-5">
            @yield('content')
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const content = document.getElementById('content');
            sidebar.classList.toggle('sidebar-collapsed');
            content.classList.toggle('content-collapsed');
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
