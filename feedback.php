<?php
require_once "classes/Feedback.php";
require_once "admin_guard.php";
$app = new Feedback;
$rec = $app->fetch_feedback();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedbacks</title>
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
      All feedbacks
      <span><?php echo !empty($rec) ? count($rec) : '0'; ?></span>
    </h4>
    <?php if (!empty($rec)) { ?>
      <table class="table table-striped">
        <thead class="table-dark">
          <tr>
            <th>S/N</th>
            <th>Sender Name</th>
            <th>Sender E-mail</th>
            <th>Sender Phone</th>
            <th class="text-center">Message</th>
            <th>More</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sn = 1;
          foreach ($rec as $r) {
          ?>
            <tr>
              <td><?php echo $sn++; ?></td>
              <td><?php echo $r["sender_name"]; ?></td>
              <td><?php echo $r["sender_email"]; ?></td>
              <td><?php echo $r["sender_phone"]; ?></td>
              <td><?php echo $r["message"]; ?></td>
              <td><a href="singlefeedback.php?id=<?php echo $r["message_id"]; ?>" class="btn btn-primary">View More</a></td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    <?php } else { ?>
      <div class="alert alert-info text-center" role="alert">
        No feedback found at the moment.
      </div>
    <?php } ?>
    <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>