<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="fa/css/all.css">
    <link rel="stylesheet" type="text/css" href="ico/icofont.css">
    <title>LifeCare</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <style>
        .heade {
            min-height: 600px;
            background-image: url(images/header.png);
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }

        div {
            /* border: 2px solid black; */
            min-height: 70px;
        }

        .tab {
            justify-content: space-around;

        }

        .ico {
            font-size: 50px;
            color: #69ABD5;
        }

        .social {
            font-size: 30px;
            color: #04409A;
        }

        .soc {
            font-size: 20px;
            color: #04409A;
        }

        a {
            color: black;
        }

        .one {
            margin-top: 100px;
        }

        .appoint {
            background-image: url(images/header.png);
            background-size: 100% 100%;
            background-repeat: no-repeat;
            min-height: 400px;
        }

        .form {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .banner {
            width: 70%;
            background-image: url(images/banner.png);
            background-repeat: no-repeat;
            background-size: 100% 100%;
            height: 300px;
            border-radius: 20px;
        }

        .foot {
            background-color: #9BC3D2;
        }

        .lifeline {
            margin-top: -60px;
            margin-bottom: -60px;
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

        .animate__animated.animate__heartBeat {
            --animate-duration: 10s;
        }

        @media (min-width: 1024px) {
            .laptop {
                display: block;
            }
        }

        @media (max-width: 1023px) {
            .laptop {
                display: none;
            }
        }
        textarea{
            resize: none;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row heade">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="images/logo.png" alt="Logo" class="img-fluid" style="max-height: 50px;">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="nav-link px-3" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-3" href="team.php">Team</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-3" href="blog.php">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-3" href="patient_reg.php">Sign Up</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-3" href="patient_login.php">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#contact" class="ms-lg-3 btn btn-outline-primary btn-lg rounded-pill">EMERGENCY CALL</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="text-center mt-4">
                    <img src="images/lifeline.png" alt="Lifeline" class="img-fluid lifeline mx-auto d-block" style="max-width: 100%; height: auto;">
                    <h1 class="headtext mt-3">
                        Discover Exceptional Care<br> for a <span class="blue">Healthier Tomorrow</span>
                    </h1>
                </div>
                <div class="col-12 col-md-8 mx-auto mt-3">
                    <p class="text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores consectetur soluta porro fugit sint neque maxime dolores alias ipsam nihil. Veniam, distinctio quis. Perspiciatis aut nam temporibus ad voluptas nulla.
                    </p>
                </div>
                <div class="col-12 text-center mt-4">
                    <a href="patient_login.php" class="me-2 btn btn-danger px-4 py-2 btn-lg rounded-pill">APPOINTMENT</a>
                    <a href="blog.php" class="btn btn-primary px-4 py-2 btn-lg rounded-pill">FIND MORE</a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center mt-4">
            <div class="col-md-5 mb-4">
                <div class="text-center">
                    <h5 class="text-uppercase fw-bold">About Us</h5>
                </div>
                <h2 class="head_two text-center">
                    We are Always Open for Your <br><span class="blue">Health Services</span>
                </h2>
                <div class="d-flex align-items-start">
                    <div class="icon-container me-3 mt-3 text-center">
                        <i class="icofont-nurse ico"></i>
                    </div>
                    <div>
                        <h4 class="text-start">Compassionate & Expert Care</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam unde vel temporibus voluptate, nulla quibusdam.</p>
                    </div>
                </div>
                <hr>
                <div class="d-flex align-items-start">
                    <div class="icon-container me-3 mt-3 text-center">
                        <i class="icofont-doctor-alt ico "></i>
                    </div>
                    <div>
                        <h4 class="text-start">Patient-Centered Approach</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim temporibus, fugit eos, totam, illo nostrum impedit facere.</p>
                    </div>
                </div>
                <hr>
                <div class="d-flex align-items-start">
                    <div class="icon-container me-3 mt-3 text-center">
                        <i class="fa-solid fa-hospital-user ico"></i>
                    </div>
                    <div>
                        <h4 class="text-start">Personalized Treatment Plans</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae error tenetur sint, labore magnam quam.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <img src="images/one.png" alt="Healthcare Illustration" class="img-fluid rounded shadow">
            </div>
        </div>
        <div class="row py-5">
            <div class="text-center mb-4">
                <h5>SERVICES</h5>
                <h2 class="head_two">We Provide Various <span class="blue">Health Services</span></h2>
                <p class="col-md-8 mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus hic nihil doloribus, temporibus numquam debitis in possimus iure, corrupti distinctio suscipit neque corporis? Cupiditate, vero ipsam odit blanditiis itaque cum?</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <i class="icofont-pulse ico"></i>
                            <h5 class="mt-3">Cardiology</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <i class="fa-solid fa-lungs ico"></i>
                            <h5 class="mt-3">Urology Care</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <i class="fa-solid fa-tooth ico"></i>
                            <h5 class="mt-3">Dental Care</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <i class="icofont-brain-alt ico"></i>
                            <h5 class="mt-3">Neurology Care</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <i class="fa-solid fa-person-breastfeeding ico"></i>
                            <h5 class="mt-3">Gynecologist</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <i class="fa-solid fa-eye ico"></i>
                            <h5 class="mt-3">Eye Doctor</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <i class="fa-solid fa-suitcase-medical ico"></i>
                            <h5 class="mt-3">Orthopedics</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <i class="icofont-operation-theater ico"></i>
                            <h5 class="mt-3">Internal Medicine</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mx-auto mt-3 mb-3 banner laptop">
                <h2 class="mt-5 px-5 head_two">Your Safety is Our <br>Priority, Emergency<br> Assistance<br> <span class="blue"> Available 24/7</span></h2>
            </div>
        </div>

        <div class="row justify-content-center px-3 py-5">
            <div class="col-12 text-center mb-4">
                <h2 class="fw-bold">Frequently <span class="blue">Asked Questions</span></h2>
                <p class="text-muted col-lg-6 mx-auto">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint recusandae autem corporis, nulla iste voluptas libero quasi omnis, ratione exercitationem architecto. Eaque asperiores cupiditate maiores magni, eum qui ea exercitationem.
                </p>
            </div>
            <div class="col-lg-5 mb-4">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fa-solid fa-question-circle me-2 blue"></i> What services does your clinic offer?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We offer a 30-day return policy on all our products. If you are not satisfied with your purchase, you can return the item within 30 days of delivery for a full refund or exchange.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fa-solid fa-question-circle me-2 blue"></i> Are walk-in appointments available?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Walk-in appointments are welcome, but booking ahead is recommended for shorter wait times.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="fa-solid fa-question-circle me-2 blue"></i> Do you offer virtual appointments?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes, we offer virtual appointments for patients who prefer to consult from home. Please contact us to schedule.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="fa-solid fa-question-circle me-2 blue"></i> What are the accepted payment methods for medical services at your clinic?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We accept various payment methods including credit/debit cards, insurance, and mobile payments. Please inquire if you have specific questions.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <i class="fa-solid fa-question-circle me-2 blue"></i> Is parking available on-site for patients and visitors?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes, we have on-site parking available for patients and visitors. Parking is free of charge.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="form shadow-sm p-4 rounded" id="quest">
                    <h5 class="text-center mb-3 blue">Have a Question?</h5>
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
                    <form action="processes/question_action.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Your Name" name="fullname">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="Your Email" name="email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="message" rows="5" placeholder="Write your question here" name="message" maxlength="300" oninput="count()"></textarea>
                            <small class="form-text text-muted text-end">Characters remaining: <span id="counter">300</span></small>
                        </div>
                        <div class="text-end mt-3">
                            <button class="btn btn-primary px-4 py-2 rounded-pill" name="question_btn">
                                <i class="fa-solid fa-paper-plane"></i> SEND QUESTION
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <h2 class="head_two text-center">Contact <span class="blue">Us</span></h2>
                <p class="col-6 offset-3 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam reiciendis, hic iure minima beatae neque. Accusamus distinctio, ad eos dolorem quod tempora sint qui? Vel reiciendis dolores beatae sit distinctio!</p>
            </div>
        </div>
        <div class="row justify-content-evenly">
            <div class="col-md-5 p-4 mb-5 bg-body rounded shadow mt-3" id="feedback">
                <h2 class="mb-3 text-center">Feedback</h2>
                <form action="processes/feedback_action.php" method="post">
                    <?php
                    if (isset($_SESSION['error'])) {
                        echo "<div class='alert alert-danger'>" . $_SESSION['error'] . "</div>";
                        unset($_SESSION['error']);
                    }
                    if (isset($_SESSION['message'])) {
                        echo "<div class='alert alert-success'>" . $_SESSION['message'] . "</div>";
                        unset($_SESSION['message']);
                    }
                    ?>
                    <p class="text-muted">Your email address is safe with us.</p>
                    <div>
                        <input type="text" class="form-control" placeholder="Full Name" name="fullname">
                    </div>
                    <div>
                        <input type="email" class="form-control" id="email" placeholder="Your E-mail" name="email">
                    </div>
                    <div>
                        <input type="number" class="form-control" id="phone" placeholder="Your Phone Number" name="phone">
                    </div>
                    <div>
                        <textarea class="form-control" id="message2" rows="5" placeholder="Write your message" maxlength="300" oninput="counter()" name="message"></textarea>
                        <small class="form-text text-muted text-end">Characters remaining: <span id="counter2">300</span></small>
                    </div>
                    <div class="text-end">
                        <button class="btn btn-primary px-4 py-2 rounded-pill" name="feedback_btn">
                            <i class="fa-solid fa-paper-plane"></i> SEND MESSAGE
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-5 shadow p-4 mb-5 bg-body rounded mt-3">
                <h2 class="mb-3 text-center">How to <span class="blue">Reach Us</span></h2>
                <p>
                    <i class="fa-solid fa-location-dot blue"></i><span class="fw-bold px-2">Our Branches:</span>
                </p>
                <ul class="list-unstyled ms-4">
                    <li>Ado-Ekiti</li>
                    <li>Lagos</li>
                    <li>Ibadan</li>
                </ul>
                <p>
                    <i class="fa-solid fa-phone blue"></i><span class="fw-bold px-2">Hotlines:</span>
                </p>
                <ul class="list-unstyled ms-4">
                    <li> <a href="tel:+234701123456" title="Call us now!" class="text-decoration-none">+44 94 04</a></li>
                    <li> <a href="tel:+234701123456" title="Call us now!" class="text-decoration-none">+44 94 04</a></li>
                    <li> <a href="tel:+234701123456" title="Call us now!" class="text-decoration-none">+44 94 04</a></li>
                </ul>
                <p>
                    <i class="fa-regular fa-envelope blue"></i><span class="fw-bold px-2">Email Address:</span>
                </p>
                <ul class="list-unstyled ms-4">
                    <li><a href="mailto:Korebobo@gmail.com" class="text-decoration-none">Korebobo@gmail.com</a></li>
                    <li><a href="mailto:support@korebobo.com" class="text-decoration-none">support@korebobo.com</a></li>
                </ul>
                <p>
                    <i class="fa-regular fa-comment blue"></i><span class="fw-bold px-2">Social Media:</span>
                </p>
                <p>
                    <a href="#" class="blue fs-5 me-3"><i class="fa-brands fa-square-x-twitter"></i></a>
                    <a href="#" class="blue fs-5 me-3"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="blue fs-5 me-3"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="blue fs-5 me-3"><i class="fa-brands fa-youtube"></i></a>
                </p>
            </div>
        </div>
        <?php
        require_once "partials/footer.php";
        ?>