<?php
require_once "classes/Appointment.php";
require_once "admin_guard.php";
$app = new Appointment;
$rec = $app->fetch_appointment();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Appointments</title>
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

    .table {
      word-wrap: break-word;
    }
  </style>
</head>

<body>
  <?php
  require_once "partials/admin_menu.php";
  ?>
  <div id="main-content">
    <?php
    require_once "partials/admin_nav.php";
    ?>
    <h4 class="text-center">
      All requested appointments
      <span><?php echo !empty($rec) ? count($rec) : '0'; ?></span>
    </h4>
    <?php if (!empty($rec)) { ?>
      <table class="table table-striped">
        <thead class="table-dark">
          <tr>
            <th>S/N</th>
            <th>Patient Name</th>
            <th>Requested date</th>
            <th>Requested time</th>
            <th class="text-center">Status</th>
            <th colspan="2" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sn = 1;
          foreach ($rec as $r) {
          ?>
            <tr>
              <td><?php echo $sn++; ?></td>
              <td><?php echo $r["patient_name"]; ?></td>
              <td><?php echo date('l, d M Y', strtotime($r["appointment_date"])); ?></td>
              <td><?php echo date('h:i A', strtotime($r["appointment_time"])); ?></td>
              <td>
                <form action="processes/appointmentstatus_action.php" method="post" class="d-flex flex-column">
                  <div class="d-flex align-items-center">
                    <select name="status" id="status" class="form-select me-2">
                      <option value="">Appointment Status</option>
                      <option value="Pending" <?php echo ($r['appointment_status'] == "Pending") ? 'selected' : ''; ?>>Pending</option>
                      <option value="Successful" <?php echo ($r['appointment_status'] == "Successful") ? 'selected' : ''; ?>>Successful</option>
                      <option value="Rejected" <?php echo ($r['appointment_status'] == "Rejected") ? 'selected' : ''; ?>>Rejected</option>
                    </select>
                    <button class="btn btn-warning ms-2" name="update">Confirm</button>
                  </div>
                  <?php
                  if ($r['appointment_status'] == "Rejected") {
                    echo '
        <div class="mt-3">
            <textarea name="rejection_reason" class="form-control mb-2" rows="5" placeholder="Provide a reason for rejection..." style="padding: 10px; border-radius: 8px; background-color: #f8f9fa; resize: none;"></textarea>
            <button type="submit" name="send_reason" class="btn btn-danger w-100">Send</button>
        </div>';
                  }
                  ?>
                  <input type="hidden" name="appointment" value="<?php echo $r['appointment_id']; ?>">
                </form>
              </td>
              <td><a href="singleappointment.php?id=<?php echo $r["appointment_id"]; ?>" class="btn btn-primary">View More</a></td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    <?php } else { ?>
      <div class="alert alert-info text-center" role="alert">
        No appointments found at the moment.
      </div>
    <?php } ?>
    <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>