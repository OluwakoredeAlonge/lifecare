<?php
session_start();
//require_once "admin_guard.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Update</title>
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
      position: fixed;
      top: 0;
      left: 0;
      padding: 20px;
    }

    #sidebar a {
      color: white;
      text-decoration: none;
      display: block;
      margin-bottom: 10px;
    }

    #main-content {
      flex-grow: 1;
      padding: 20px;
      margin-left: 250px;
    }

    .form-container {
      background: #fff;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
      margin-bottom: 2rem;
    }

    .form-control {
      margin-bottom: 1rem;
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
    <div class="form-container mt-5">
      <h3>Add New Blog Post</h3>
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
      <form action="processes/blog_action.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
          <label for="author">Author</label>
          <input type="text" class="form-control" id="author" name="author">
        </div>
        <div class="form-group d-flex justify-content-between">
          <div class="form-group col-5">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" name="date">
          </div>
          <div class="form-group col-5">
            <label for="time">Time</label>
            <input type="time" class="form-control" id="time" name="time">
          </div>
        </div>
        <div class="form-group">
          <label for="image">Image</label>
          <input type="file" class="form-control" id="image" name="con_img">
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <textarea class="form-control" id="content" name="content" rows="8"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="add_post">Add Post</button>
      </form>
    </div>
  </div>
  <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>