<?php
session_start();
if (!isset($_SESSION['User_id'])) {
  $_SESSION['errormsg'] = "You must be logged in to access this page.";
  header("location: staff_login.php");
}
