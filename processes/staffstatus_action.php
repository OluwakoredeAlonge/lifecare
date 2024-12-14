<?php
    session_start();
    require_once "../classes/Staff.php";
    if(isset($_POST['update'])){
        $status = $_POST['status'];
        $id = $_POST['activity'];
        $err = new Staff;
        $err->get_status($status, $id);
        header('location:../staff_dashy.php');
    }else{
        header("location: ../staff_dashy.php");
    }
?>