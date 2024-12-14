<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="fa/css/all.css">
    <title>Our Team</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <style>
        div {
            min-height: 50px;
        }
        .head {
            min-height: 200px;
            background-image: url(images/others.png);
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        .logo {
            background-image: url(images/logo.png);
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        .social {
            font-size: 30px;
            color: #04409A;
        }
        .foot {
            background-color: #9BC3D2;
        }
        .hold {
            border-radius: 20px;
        }
        .soc {
            font-size: 20px;
            color: #04409A;
        }
        a {
            color: black;
        }
        .blue {
            color: #04409A;
        }
        .nav-link:hover {
            background-color: #69ABD5;
            color: #04409A;
        }
        .nav-link {
            font-family: "EB Garamond", sans-serif;
            font-weight: bold;
            font-size: 20px;
        }
        .headtext {
            font-family: "Arvo", sans-serif;
            font-weight: bold;
            font-size: 50px;
        }
        .foot_head {
            font-family: "Philosopher", sans-serif;
        }
        .image-container img {
            display: block;
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .image-container h5 {
            font-weight: bold;
            margin-top: 10px;
        }
        .image-container p {
            margin-bottom: 0;
            color: #555;
        }
        .text-center {
            text-align: center;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;
        }
        .image-container {
            position: relative;
            width: 100%;
            max-width: 300px;
            margin: 0 auto;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .image-container img {
            width: 100%;
            border-radius: 10px;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .image-container:hover .overlay {
            opacity: 1;
        }
        .overlay .icon {
            margin: 5px;
            font-size: 1.5rem;
            color: #fff;
            transition: color 0.3s ease;
        }
        .youtube:hover {
            color: #FF0000;
        }
        .facebook:hover {
            color: #3b5998;
        }
        .instagram:hover {
            color: #E1306C;
        }
        .twitter:hover {
            color: #1DA1F2;
        }
        .linkedin:hover {
            color: #0077b5;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row head">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg bg-transparent py-3">
                    <div class="container-fluid">
                        <a class="navbar-brand d-flex align-items-center" href="#">
                            <img src="images/logo.png" alt="Logo" class="img-fluid me-3" style="max-height: 50px;">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarContent">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="nav-link px-3 text-dark active" aria-current="page" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-3 text-dark" href="#">Team</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-3 text-dark" href="blog.php">Blog</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-md-12 text-center mt-4">
                <h1 class="blue fw-bold">Our Team</h1>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-evenly">
                <div class="col-md-5 text-center mt-3">
                    <div class="image-container">
                        <img src="images/doc.png" class="img-fluid" alt="">
                        <div class="overlay">
                            <a href="#" class="icon youtube"><i class="fab fa-youtube"></i></a>
                            <a href="#" class="icon facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="icon instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="icon twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="icon linkedin"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <h5 class="mt-3">Dr. Rebecca Harris</h5>
                        <p>Cardiologist</p>
                    </div>
                </div>
                <div class="col-md-5 text-center mt-3">
                    <div class="image-container">
                        <img src="images/doc.png" class="img-fluid" alt="">
                        <div class="overlay">
                            <a href="#" class="icon youtube"><i class="fab fa-youtube"></i></a>
                            <a href="#" class="icon facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="icon instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="icon twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="icon linkedin"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <h5 class="mt-3">Dr. Rebecca Harris</h5>
                        <p>Cardiologist</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-evenly">
                <div class="col-md-5 text-center mt-3">
                    <div class="image-container">
                        <img src="images/doc.png" class="img-fluid" alt="">
                        <div class="overlay">
                            <a href="#" class="icon youtube"><i class="fab fa-youtube"></i></a>
                            <a href="#" class="icon facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="icon instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="icon twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="icon linkedin"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <h5 class="mt-3">Dr. Rebecca Harris</h5>
                        <p>Cardiologist</p>
                    </div>
                </div>
                <div class="col-md-5 text-center mt-3">
                    <div class="image-container">
                        <img src="images/doc.png" class="img-fluid" alt="">
                        <div class="overlay">
                            <a href="#" class="icon youtube"><i class="fab fa-youtube"></i></a>
                            <a href="#" class="icon facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="icon instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="icon twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="icon linkedin"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <h5 class="mt-3">Dr. Rebecca Harris</h5>
                        <p>Cardiologist</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-evenly">
                <div class="col-md-5 text-center mt-3">
                    <div class="image-container">
                        <img src="images/doc.png" class="img-fluid" alt="">
                        <div class="overlay">
                            <a href="#" class="icon youtube"><i class="fab fa-youtube"></i></a>
                            <a href="#" class="icon facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="icon instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="icon twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="icon linkedin"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <h5 class="mt-3">Dr. Rebecca Harris</h5>
                        <p>Cardiologist</p>
                    </div>
                </div>
                <div class="col-md-5 text-center mt-3">
                    <div class="image-container">
                        <img src="images/doc.png" class="img-fluid" alt="">
                        <div class="overlay">
                            <a href="#" class="icon youtube"><i class="fab fa-youtube"></i></a>
                            <a href="#" class="icon facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="icon instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="icon twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="icon linkedin"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <h5 class="mt-3">Dr. Rebecca Harris</h5>
                        <p>Cardiologist</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-evenly">
                <div class="col-md-5 text-center mt-3">
                    <div class="image-container">
                        <img src="images/doc.png" class="img-fluid" alt="">
                        <div class="overlay">
                            <a href="#" class="icon youtube"><i class="fab fa-youtube"></i></a>
                            <a href="#" class="icon facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="icon instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="icon twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="icon linkedin"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <h5 class="mt-3">Dr. Rebecca Harris</h5>
                        <p>Cardiologist</p>
                    </div>
                </div>
                <div class="col-md-5 text-center mt-3">
                    <div class="image-container">
                        <img src="images/doc.png" class="img-fluid" alt="">
                        <div class="overlay">
                            <a href="#" class="icon youtube"><i class="fab fa-youtube"></i></a>
                            <a href="#" class="icon facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="icon instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="icon twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="icon linkedin"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <h5 class="mt-3">Dr. Rebecca Harris</h5>
                        <p>Cardiologist</p>
                    </div>
                </div>
            </div>
        </div>
        <?php
        require_once "partials/footer.php";
        ?>