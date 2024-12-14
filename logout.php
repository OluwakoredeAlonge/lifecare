<?php
    session_start();
    require_once "classes/Patient.php";
    $b = new Patient;
    $b->logout();
    header("location:index.php");
?>