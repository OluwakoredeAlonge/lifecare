<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Login</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #9BC3D2;
        }

        .navbar .nav-link {
            color: #ffffff !important;
        }

        .navbar .nav-link:hover {
            color: #f8f9fa !important;
        }

        .form-container {
            max-width: 600px;
            margin: auto;
        }

        .form-control {
            border-radius: 0;
            width: 100%;
        }

        .btn-primary {
            border-radius: 0;
        }

        .alert {
            border-radius: 0;
        }

        .forgot-password-link {
            display: block;
            text-align: center;
            font-size: 0.9rem;
            margin-top: 15px;
            text-decoration: none;
            color: #0d6efd;
        }

        .forgot-password-link:hover {
            text-decoration: underline;
        }

        .text-center a {
            text-decoration: none;
            color: #0d6efd;
        }

        .text-center a:hover {
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
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container form-container px-4 py-5">
        <div class="row g-4 py-5">
            <div class="col-md-12">
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
                <form action="processes/patientlogin_action.php" method="post" class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@email.com" name="email">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit" name="loginbtn">Sign In</button>
                    <a href="#" class="forgot-password-link">Forgot Password?</a>
                    <hr class="my-4">
                    <div class="text-center">
                        <small class="text-body-secondary">Don't have an account? <a href="patient_reg.php" class="text-decoration-none">Sign Up</a></small>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>