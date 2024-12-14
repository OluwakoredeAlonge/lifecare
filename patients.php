<?php
require_once "classes/Patient.php";
require_once "admin_guard.php";
$app = new Patient;
$appointment = $app->fetch_patient();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Patients</title>
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
    <h4 class="text-center"> All registered Patients
      <span><?php echo count($appointment); ?></span>
    </h4>
    <?php if (!empty($appointment)) { ?>
      <table class="table table-striped">
        <thead class="table-dark">
          <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>Phone</th>
            <th>E-mail</th>
            <th colspan="2" class="text-center">Status</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sn = 1;
          foreach ($appointment as $app) {
          ?>
            <tr>
              <td><?php echo $sn++; ?></td>
              <td><?php echo $app["patient_name"]; ?></td>
              <td><?php echo $app["patient_phone"]; ?></td>
              <td><?php echo $app["patient_email"]; ?></td>
              <td colspan="2">
                <form action="processes/patientstatus_action.php" method="post" class="d-flex align-items-center">
                  <select name="status" id="status" class="form-select me-2">
                    <option value="">Patient Status</option>
                    <option value="Active" <?php echo $app["patient_status"] == 'Active' ? 'selected' : ''; ?>>Active</option>
                    <option value="Inactive" <?php echo $app["patient_status"] == 'Inactive' ? 'selected' : ''; ?>>Inactive</option>
                  </select>
                  <input type="hidden" name="activity" value="<?php echo $app['patient_id']; ?>">
                  <button class="btn btn-warning" name="update">Confirm</button>
                </form>
              </td>
              <td>
                <a href="singlepatient.php?id=<?php echo $app["patient_id"]; ?>" class="btn btn-primary">View More</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    <?php } else { ?>
      <div class="alert alert-info text-center" role="alert">
        No patients are currently registered.
      </div>
    <?php } ?>
  </div>
  <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>