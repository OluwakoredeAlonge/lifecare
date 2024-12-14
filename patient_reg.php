<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration Form</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background-color: #9BC3D2;
            padding: 1rem 0;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .navbar img {
            height: 50px;
        }

        .navbar-nav .nav-link {
            color: #fff;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #003d5b;
        }

        .form-container {
            background: #fff;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            font-weight: bold;
            color: #333;
        }

        .btn-primary {
            background: #007bff;
            border: none;
            padding: 0.6rem;
        }

        .btn-primary:hover {
            background: #0056b3;
        }

        .form-label {
            font-weight: bold;
            color: #555;
        }

        .form-control[type=number]::-webkit-outer-spin-button,
        .form-control[type=number]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md">
            <div class="container-fluid">
                <img src="images/logo.png" alt="Logo" class="img-fluid">
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
    <div class="container mt-4 mb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <form class="form-container" action="processes/patientreg_action.php" method="post">
                    <h2 class="text-center mb-4">Sign Up</h2>
                    <?php
                    if (isset($_SESSION["errormsg"])) {
                        echo "<div class='alert alert-danger'>" . $_SESSION["errormsg"] . "</div>";
                        unset($_SESSION["errormsg"]);
                    }
                    if (isset($_SESSION['feedback'])) {
                        echo "<div class='alert alert-success'>" . $_SESSION['feedback'] . "</div>";
                        unset($_SESSION['feedback']);
                    }
                    ?>
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="fullname" placeholder="Enter your full name">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                        <sp an id="mail" class="text-danger"></span>
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Create a password">
                    </div>
                    <div class="form-group mb-4">
                        <label for="confirmpassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmpassword" name="confirmpass" placeholder="Re-enter your password">
                    </div>
                    <button class="btn btn-primary w-100" name="regbtn">REGISTER</button>
                    <hr class="my-4">
                    <small class="d-block text-center">Already have an account? <a href="patient_login.php" class="text-primary text-decoration-none">Sign In</a></small>
                </form>
            </div>
        </div>
    </div>
    <script src="jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#email').change(function() {
                var email = $(this).val().trim();
                if (email == "") {
                    $('#mail').html('Please enter an email address.');
                    $('.btn').prop("disabled", true);
                    return;
                }
                $.ajax({
                    type: "GET",
                    url: "mailcheck.php",
                    data: {
                        email: email
                    },
                    dataType: "json",
                    beforeSend: function() {
                        $('#mail').html('<span class="text-info">Checking...</span>');
                    },
                    success: function(response) {
                        if (response.status == "exists") {
                            $('#mail').html('<span class="text-danger">This email is already registered. Please use another email.</span>');
                            $('.btn').prop("disabled", true);
                        } else if (response.status == "available") {
                            $('#mail').html('<span class="text-success">This email is available!</span>');
                            $('.btn').prop("disabled", false);
                        } else {
                            $('#mail').html('<span class="text-warning">Unexpected response. Please try again later.</span>');
                            $('.btn').prop("disabled", true);
                        }
                    },
                    error: function(xhr, status, error) {
                        $('#mail').html('<span class="text-danger">An error occurred while checking the email. Please try again later.</span>');
                        console.error("AJAX Error: ", error);
                    }
                });
            });
        });
    </script>
</body>
</html>