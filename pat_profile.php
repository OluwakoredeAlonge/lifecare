<?php
session_start();
require_once "patient_guard.php";
require_once "classes/Patient.php";
$userid = $_SESSION["patient_id"];
$a = new Patient;
$rec = $a->get_patientbyid($userid);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Patient Profile</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      display: flex;
    }

    #sidebar {
      width: 250px;
      background-color: #343a40;
      color: white;
      min-height: 100vh;
    }

    #sidebar a {
      color: white;
      text-decoration: none;
    }

    #main-content {
      flex-grow: 1;
      padding: 20px;
    }

    img {
      object-fit: cover;
    }
  </style>
</head>

<body>
  <?php require_once "partials/patient_menu.php"; ?>
  <div id="main-content">
    <?php require_once "partials/patient_nav.php"; ?>
    <?php if (isset($_SESSION['feedback'])): ?>
      <div class='alert alert-success'><?= $_SESSION['feedback']; ?></div>
      <?php unset($_SESSION['feedback']); ?>
    <?php endif; ?>
    <?php if (isset($_SESSION['errormsg'])): ?>
      <div class='alert alert-danger'><?= $_SESSION['errormsg']; ?></div>
      <?php unset($_SESSION['errormsg']); ?>
    <?php endif; ?>
    <div class="d-flex justify-content-between align-items-center">
      <div>
        <h2 class="text-dark">Welcome back, <?= $rec['patient_name']; ?></h2>
        <?php
        $status = $rec['patient_status'];
        $statusClass = ($status == "Active") ? 'bg-success' : 'bg-danger';
        echo "<span class='input-group-text $statusClass text-white w-50 text-center d-block'>Profile Status: $status</span>";
        ?>
        <h2 class="headtext mt-3">Update Profile</h2>
      </div>
      <div class="col-2">
        <?php if (!empty($rec['patient_image'])): ?>
          <img src='uploads/<?= $rec['patient_image']; ?>' width='100' class='img-fluid border border-dark rounded'>
        <?php else: ?>
          <p>No profile picture uploaded</p>
        <?php endif; ?>
      </div>
    </div>
    <form action="processes/patientprofileupdate_action.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control border-dark" id="name" name="fullname" value="<?= $rec['patient_name']; ?>" required>
      </div>
      <div class="form-group">
        <label for="date" class="form-label">Date of Birth</label>
        <input type="date" class="form-control border-dark mb-3" id="date" name="dob" value="<?= $rec['patient_dob']; ?>" required>
      </div>
      <p>Gender</p>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="male" value="male" <?= ($rec['patient_gender'] == "male") ? "checked" : ""; ?>>
        <label class="form-check-label" for="male">Male</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="female" value="female" <?= ($rec['patient_gender'] == "female") ? "checked" : ""; ?>>
        <label class="form-check-label" for="female">Female</label>
      </div>
      <div class="form-group">
        <label for="weight" class="form-label mt-2">Weight</label>
        <input type="text" class="form-control border-dark" id="weight" name="weight" value="<?= $rec['patient_weight']; ?>" required>
      </div>
      <div class="form-group">
        <label for="height" class="form-label mt-2">Height</label>
        <input type="text" class="form-control border-dark" id="height" name="height" value="<?= $rec['patient_height']; ?>" required>
      </div>
      <div class="form-group">
        <label for="address" class="form-label mt-2">Address</label>
        <input type="text" class="form-control border-dark" id="address" name="address" value="<?= $rec['patient_address']; ?>" required>
      </div>
      <div class="form-group">
        <label for="phone" class="form-label mt-2">Phone</label>
        <input type="text" class="form-control border-dark" id="phone" name="phone" value="<?= $rec['patient_phone']; ?>" required>
      </div>
      <div class="form-group">
        <label for="image" class="form-label mt-2">Profile picture</label>
        <input type="file" class="form-control border-dark" id="image" name="profilepic">
      </div>
      <button class="btn btn-primary col-12 mt-3" name="updatebtn">Update Details</button>
    </form>
  </div>
  <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>