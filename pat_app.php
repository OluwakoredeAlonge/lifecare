<?php
session_start();
require_once "patient_guard.php";
require_once "classes/Patient.php";
$id = $_SESSION["patient_id"];
$a = new Patient;
$rec = $a->get_patientbyid($id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Patient Appointment</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      display: flex;
    }

    #sidebar {
      width: 100%;
      max-width: 250px;
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

    .headtext {
      font-size: 1.5rem;
      font-weight: bold;
      margin-bottom: 1rem;
    }

    .blue {
      color: #007bff;
    }

    .alert {
      margin-top: 1rem;
    }

    textarea {
      resize: none;
    }
  </style>
</head>

<body>
  <?php require_once "partials/patient_menu.php"; ?>
  <div id="main-content">
    <?php require_once "partials/patient_nav.php"; ?>
    <?php if (isset($_SESSION["errormsg"])): ?>
      <div class="alert alert-danger">
        <?php echo $_SESSION["errormsg"];
        unset($_SESSION["errormsg"]); ?>
      </div>
    <?php endif; ?>
    <?php if (isset($_SESSION["feedback"])): ?>
      <div class="alert alert-success">
        <?php echo $_SESSION["feedback"];
        unset($_SESSION["feedback"]); ?>
      </div>
    <?php endif; ?>
    <form action="processes/appointment_action.php" method="post">
      <h2 class="headtext">Request an <span class="blue">Appointment</span>, <?php echo $rec['patient_name']; ?></h2>
      <div class="row g-3 mb-3">
        <div class="col-md-6">
          <label for="date" class="form-label">Date</label>
          <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="col-md-6">
          <label for="time" class="form-label">Time</label>
          <input type="time" class="form-control" id="time" name="time">
        </div>
      </div>
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $rec["patient_name"]; ?>" readonly>
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="number" class="form-control" id="phone" name="phone" value="<?php echo $rec["patient_phone"]; ?>" readonly>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $rec["patient_email"]; ?>" readonly>
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">Brief Nature of Illness</label>
        <textarea name="message" id="message" class="form-control" rows="5" maxlength="300" oninput="count()"></textarea>
        <small class="form-text text-muted text-end">Characters remaining: <span id="counter">300</span></small>
      </div>
      <div class="text-end">
        <button class="btn btn-primary" name="submitbtn">Book an Appointment</button>
      </div>
    </form>
  </div>
  <script src="bootstrap/js/bootstrap.bundle.js"></script>
  <script>
    function count() {
      const textarea = document.getElementById('message');
      const count = textarea.value.length;
      const max = textarea.maxLength;
      const counter = document.getElementById('counter');
      counter.textContent = max - count;
    }
  </script>
</body>

</html>