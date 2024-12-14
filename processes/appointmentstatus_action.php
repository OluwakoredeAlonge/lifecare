<?php
session_start();
require_once "../classes/Appointment.php";
require_once "../classes/Rejection.php";
$r = new Rejection;

if (isset($_POST['update'])) {
    $status = $_POST['status'];
    $appointment = $_POST['appointment'];
    $app = new Appointment;
    $app->get_status($status, $appointment);
    header('location:../appointments.php');
} elseif (isset($_POST['send_reason'])) {
    $reason = $_POST['rejection_reason'];
    $appointment_id = $_POST['appointment'];
    if(empty($reason)){
        header('location:../appointments.php');
    }else{
        $app = new Rejection;
        $app->rejection_reason( $reason,$appointment_id); 
        header('location:../appointments.php');
    }
} else {
    header("location: ../appointments.php");
}
?>