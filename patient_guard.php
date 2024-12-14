<?php
    if(!isset($_SESSION['patient_id'])){
        $_SESSION['errormsg'] = "You must be logged in to access this page.";
        header("location: patient_login.php");
    }
?>