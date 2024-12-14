<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Registration form</title>
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
        .btn {
            background: #007bff;
            border: none;
            padding: 0.6rem;
        }
        .btn:hover {
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
        .center-text {
            text-align: center;
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 offset-3">
                <form class="p-4 p-md-5 mb-5 border rounded-5 mt-5 bg-body-tertiary form-container" action="processes/staffreg_action.php" method="post">
                    <h2 class="text-center">Sign Up</h2>
                    <?php
                    if (isset($_SESSION["errormsg"])) {
                        echo "<div class='alert alert-danger'>" . $_SESSION["errormsg"] . "</div>";
                        unset($_SESSION["errormsg"]);
                    }
                    if (isset($_SESSION['feedback'])) {
                        echo "<div class='alert alert-success'>" . $_SESSION["feedback"] . "</div>";
                        unset($_SESSION['feedback']);
                    }
                    ?>
                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="fullname">
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label mt-2">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                        <span id="mail" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="form-label mt-2">Phone</label>
                        <input type="number" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label mt-2">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="confirmpassword" class="form-label mt-2">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmpassword" name="confirmpass">
                    </div>
                    <button class="btn btn col-12 mt-3 reg" name="regbtn">REGISTER</button>
                    <hr class="my-4">
                    <div class="center-text">
                        <small class="text-body-secondary">Already have an account? <a href="staff_login.php" class="text-decoration-none text-primary">Sign In</a></small>
                    </div>
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
                    url: "staff_mailcheck.php",
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