<?php
    session_start();
    require_once "../classes/Appointment.php";
    if(isset($_POST['submitbtn'])){
        $date = $_POST['date'];
        $time = $_POST['time'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        if(trim($date) == ""||trim($time) == ""||trim($name) == ""||trim($phone) == ""||trim($email) == ""|| trim($message) ==""){
            $_SESSION['errormsg'] = "Please complete all fields";
            header('location: ../pat_app.php');
        }elseif(strlen($phone) < 11 ||strlen($phone) > 11){
            $_SESSION['errormsg'] = "Phone number must be 11 characters";
            header('location: ../pat_app.php');
        }else{
            $app = new Appointment;
            $app->book_appointment($name,$phone,$email,$date,$time,$message,$patient_id);
           // echo "Requested appointment currently under review, please check back after 12 hours";
            header('location:../app_history.php');exit();
        }
    }else{
        $_SESSION['errormsg'] = "Please fill the form";
        header('location: ../pat_app.php');
    }
?>