<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
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
    .sidebar a {
      padding: 12px 20px;
      display: block;
      color: white;
      text-decoration: none;
    }
    .sidebar a:hover {
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
    <a href="#"><i class="bi bi-house-door"></i> <span class="ms-2">Dashboard</span></a>
    <a href="#"><i class="bi bi-people"></i> <span class="ms-2">Users</span></a>
    <a href="#"><i class="bi bi-bar-chart"></i> <span class="ms-2">Reports</span></a>
    <a href="#"><i class="bi bi-gear"></i> <span class="ms-2">Settings</span></a>
    <a href="#"><i class="bi bi-box-arrow-right"></i> <span class="ms-2">Logout</span></a>
  </div>

  <!-- Content -->
  <div id="content" class="content">
    <div class="container-fluid pt-5">
      <h1 class="mt-4">Welcome Admin</h1>
      <p>This is your dashboard. Use the navigation menu to access different sections.</p>

      <div class="row">
        <div class="col-md-4">
          <div class="card shadow-sm mb-4">
            <div class="card-body">
              <h5 class="card-title">Total Users</h5>
              <p class="card-text fs-4">1,245</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm mb-4">
            <div class="card-body">
              <h5 class="card-title">Active Orders</h5>
              <p class="card-text fs-4">320</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm mb-4">
            <div class="card-body">
              <h5 class="card-title">Support Tickets</h5>
              <p class="card-text fs-4">27</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- JS -->
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
