<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .sidebar {
      min-height: 100vh;
      background-color: #343a40;
      color: white;
      position: fixed;
      transition: margin 0.3s;
      width: 250px;
    }

    .sidebar a {
      color: white;
      text-decoration: none;
      padding: 10px;
      display: block;
      border-radius: 5px;
    }

    .sidebar a:hover {
      background-color: #495057;
    }

    .content {
      margin-left: 250px;
      transition: margin 0.3s;
    }

    .collapsed-sidebar {
      margin-left: -250px;
    }

    .collapsed-content {
      margin-left: 0;
    }

    .toggle-icon {
      position: fixed;
      top: 15px;
      left: 265px;
      font-size: 1.5rem;
      color: black;
      cursor: pointer;
      z-index: 1000;
      transition: left 0.3s;
    }

    .sidebar.collapsed-sidebar + .toggle-icon {
      left: 15px;
    }

    @media (max-width: 768px) {
      .toggle-icon {
        left: 15px;
      }

      .content {
        margin-left: 0;
      }
    }
  </style>
</head>

<body>
  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a href="#" class="nav-link">Dashboard</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Users</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Appointments</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Settings</a>
      </li>
    </ul>
  </div>

  <!-- Toggle Icon -->
  <i class="fas fa-bars toggle-icon" id="toggleSidebar"></i>

  <!-- Content -->
  <div class="content" id="content">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <h1 class="ms-auto">Welcome to Admin Dashboard</h1>
      </div>
    </nav>

    <div class="container mt-4">
      <h2>Dashboard Content</h2>
      <p>This is where your main content will go.</p>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const toggleSidebar = document.getElementById('toggleSidebar');
    const sidebar = document.getElementById('sidebar');
    const content = document.getElementById('content');

    toggleSidebar.addEventListener('click', () => {
      sidebar.classList.toggle('collapsed-sidebar');
      content.classList.toggle('collapsed-content');
    });
  </script>
</body>

</html>
