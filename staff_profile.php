<?php
require_once "staff_guard.php";
require_once "classes/Staff.php";
$a = new Staff;
$rec = $a->get_staff($_SESSION["User_id"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff Profile</title>
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
  <?php require_once "partials/staff_menu.php"; ?>
  <div id="main-content">
    <?php require_once "partials/staff_nav.php"; ?>
    <?php if (isset($_SESSION['feedback'])): ?>
      <div class='alert alert-success'><?= $_SESSION['feedback']; ?></div>
      <?php unset($_SESSION['feedback']); ?>
    <?php endif; ?>
    <?php if (isset($_SESSION['errormsg'])): ?>
      <div class='alert alert-danger'><?= $_SESSION['errormsg']; ?></div>
      <?php unset($_SESSION['errormsg']); ?>
    <?php endif; ?>
    <?php
    if (isset($_SESSION['feedback'])) {
      echo "<div class='alert alert-success'>" . $_SESSION['feedback'] . "</div>";
      unset($_SESSION['feedback']);
    }
    if (isset($_SESSION['errormsg'])) {
      echo "<div class='alert alert-danger'>" . $_SESSION['errormsg'] . "</div>";
      unset($_SESSION['errormsg']);
    }
    ?>
    <div class="d-flex justify-content-between">
      <div>
        <h2 class="text-dark">Welcome back,<?php echo $rec['name'] ?></h2>
        <?php
        $status = $rec['status'];
        if ($status == "Active") {
          echo " <span class='input-group-text bg-success text-white w-50 text-center d-block' id=''>Profile Status: $status</span>";
        } elseif ($status == "Inactive") {
          echo " <span class='input-group-text bg-danger text-white w-50 text-center d-block' id=''>Profile Status: $status</span>";
        }
        ?>
        <h2 class="headtext">Update Profile</h2>
      </div>
      <div class="col-2"> Profile photo not updated yet</div>
    </div>
    <form action="processes/staffprofileupdate_action.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="fullname" value="<?php echo $rec["name"]; ?>">
      </div>
      <div>
        <p>Gender</p>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="male" value="male">
          <label class="form-check-label" for="male">Male</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="female" value="female">
          <label class="form-check-label" for="female">Female</label>
        </div>
      </div>
      <div class="form-group">
        <label for="address" class="form-label mt-2">Address</label>
        <input type="text" class="form-control" id="address" name="address" value="<?php echo $rec["address"]; ?>">
      </div>
      <div class="form-group">
        <label for="phone" class="form-label mt-2">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $rec["phone"]; ?>">
      </div>
      <div class="form-group">
        <label for="profileimage" class="form-label mt-2">Profile Image</label>
        <input type="file" class="form-control" id="profileimage" name="proimg">
      </div>
      <button class="btn btn-primary col-12 mt-3" name="updatebtn">Update Details</button>
    </form>
  </div>
  </div>
  </div>
</body>

</html>