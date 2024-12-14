<?php
session_start();
require_once "classes/Blog.php";
$blog = new Blog;
$rec = $blog->get_blog_by_id(4);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="fa/css/all.css">
    <title>Our Blog</title>
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

        .head_two {
            font-family: "Arvo", sans-serif;
            font-weight: bold;
        }

        .nav-link:hover {
            background-color: #69ABD5;
            color: #04409A;
        }

        .foot_head {
            font-family: "Philosopher", sans-serif;
        }

        .blog-container {
            margin-top: 50px;
            max-width: 900px;
        }

        .blog-image {
            width: 940px;
            height: 627px;
            object-fit: cover;
            display: block;
            margin: 0 auto;
        }

        .blog-content {
            text-align: left;
            margin-bottom: 30px;
        }

        .date-time {
            font-size: 0.9em;
            color: #777;
        }

        hr {
            margin: 20px 0;
        }

        .btn-group {
            display: flex;
            gap: 10px;
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
                                    <a class="nav-link px-3 text-dark" href="team.php">Team</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-3 text-dark" href="#">Blog</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-md-12 text-center mt-4">
                <h1 class="blue fw-bold">Blog</h1>
            </div>
        </div>
        <div class="container blog-container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center head_two">Read Blogs Written By <span class="blue">Our Medics</span></h2>
                    <p class="col-6 offset-3 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam reiciendis, hic iure minima beatae neque. Accusamus distinctio, ad eos dolorem quod tempora sint qui? Vel reiciendis dolores beatae sit distinctio!</p>
                </div>
                <div class="col-md-12">
                    <img src="images/three.jpg" class="blog-image" alt="Blog Image">
                    <div class="blog-content">
                        <h5><?php echo $rec['title'] ?></h5>
                        <p class="date-time"><i class="fas fa-calendar-alt"></i> <?php echo date('d M Y', strtotime($rec['date'])) ?> &bull; <i class="fas fa-clock"></i> <?php echo date('h:i A', strtotime($rec['time'])) ?> &bull; Author: <?php echo $rec['author'] ?></p>
                        <p><?php echo substr($rec['content'], 0, 100) . "..........."; ?></p>
                        <hr>
                        <a href="singleblog.php" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        require_once "partials/footer.php";
        ?>