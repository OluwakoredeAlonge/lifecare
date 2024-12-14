<?php
    session_start();
    require_once "../classes/Patient.php";
    if(isset($_POST['update'])){
        $status = $_POST['status'];
        $id = $_POST['activity'];
        $err = new Patient;
        $err->get_status($status, $id);
        header('location:../patients.php');
    }else{
        header("location: ../patients.php");
    }
?>