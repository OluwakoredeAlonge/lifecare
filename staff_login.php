<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff Login</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <style>
    header .navbar {
      background-color: #9bc3d2;
    }
    .passy {
      display: block;
      text-align: center;
      font-size: 0.9rem;
      margin-top: 15px;
      text-decoration: none;
      color: #0d6efd;
    }
    .passy:hover {
      text-decoration: underline;
    }
    .center {
      text-align: center;
      font-size: 0.9rem;
    }
    .center a {
      text-decoration: none;
      color: #0d6efd;
    }
    .center a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-md">
      <div class="container-fluid">
        <img src="images/logo.png" alt="" class="img-fluid px-5">
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
        <form action="processes/stafflogin_action.php" method="post" class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@email.com" name="email">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit" name="loginbtn">Sign In</button>
          <a href="#" class="passy">Forgot Password?</a>
          <hr class="my-4">
          <div class="center">
            Don't have an account? <a href="staff_reg.php">Sign Up</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>