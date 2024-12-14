<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Dashboard</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
    </style>
</head>
<body>
<header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-light bg-light text-light">
          <div class="container-fluid">
          <img src="images/logo.png" alt="" class="img-fluid px-5">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav mx-auto mb-2 mb-md-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
              </ul>
              <div class="d-flex" role="search">
                <?php
                  if(isset($_SESSION['patient_id'])){?>
                 <a href="logout.php" class="btn btn-outline-danger btn-sm">Logout</a>
                <?php
                  }?>
              </div>
            </div>
          </div>
        </nav>
      </header>
