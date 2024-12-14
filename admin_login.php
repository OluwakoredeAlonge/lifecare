<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="fa/css/all.css">
  <title>Admin Login</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <style>
    .owner {
      min-height: 100px;
      border-radius: 20px;
      margin-top: 150px;
    }

    .log {
      height: 70px;
    }

    .navbar {
      background-color: #9bc3d2;
    }
  </style>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-md">
      <div class="container-fluid">
        <img src="images/logo.png" alt="Logo" class="img-fluid px-5">
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mx-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="container px-4 py-5" id="featured-3">
    <div class="row g-4 py-5">
      <div class="col-md-10 mx-auto col-lg-5">
        <h2 class="pb-2 text-center mb-3">Sign In</h2>
        <?php
        if (isset($_SESSION['errormsg'])) {
          echo "<div class='alert alert-danger'>" . $_SESSION['errormsg'] . "</div>";
          unset($_SESSION['errormsg']);
        }
        if (isset($_SESSION['feedback'])) {
          echo "<div class='alert alert-success'>" . $_SESSION['feedback'] . "</div>";
          unset($_SESSION['feedback']);
        }
        ?>
        <form action="processes/adminlogin_action.php" method="post" class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="email" name="email" value="mickyalonge@gmail.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="password" name="password" value="admin123">
            <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit" name="loginbtn">Sign In</button>
        </form>
      </div>
    </div>
  </div>
  <script src="bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>