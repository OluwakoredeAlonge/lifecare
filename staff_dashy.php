<?php
require_once "classes/Staff.php";
require_once "admin_guard.php";
$app = new Staff;
$appointment = $app->fetch_staff();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff Management</title>
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
  <?php require_once "partials/admin_menu.php"; ?>
  <div id="main-content" class="container-fluid">
    <?php require_once "partials/admin_nav.php"; ?>
    <h4 class="text-center mb-4">All Registered Staff <span><?php echo count($appointment) ?></span></h4>
    <?php if (!empty($appointment)) { ?>
      <table class="table table-striped table-hover">
        <thead class="table-dark">
          <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>Phone</th>
            <th>E-mail</th>
            <th colspan="2" class="text-center">Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php $sn = 1;
          foreach ($appointment as $app): ?>
            <tr>
              <td><?php echo $sn++; ?></td>
              <td><?php echo htmlspecialchars($app["name"]); ?></td>
              <td><?php echo htmlspecialchars($app["phone"]); ?></td>
              <td><?php echo htmlspecialchars($app["email"]); ?></td>
              <td>
              <td>
                <form action="processes/staffstatus_action.php" method="post">
                  <div class="input-group">
                    <select name="status" id="status" class="form-select">
                      <option value="" <?php echo empty($app['status']) ? 'selected' : ''; ?>>Staff Status</option>
                      <option value="Active" <?php echo ($app['status'] == 'Active') ? 'selected' : ''; ?>>Active</option>
                      <option value="Inactive" <?php echo ($app['status'] == 'Inactive') ? 'selected' : ''; ?>>Inactive</option>
                    </select>
                    <input type="hidden" name="activity" value="<?php echo $app['User_id']; ?>">
                    <button class="btn btn-warning ms-2" name="update">Confirm</button>
                  </div>
                </form>
              </td>
              </td>
              <td>
                <a href="singlestaff.php?id=<?php echo $app['User_id']; ?>" class="btn btn-primary">View More</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php } else { ?>
      <div class="alert alert-info text-center" role="alert">No registered staff found.</div>
    <?php } ?>
  </div>
  <script src="bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>