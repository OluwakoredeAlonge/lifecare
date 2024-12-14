<?php
    session_start();
    require_once "../classes/Feedback.php";
    if(isset($_POST['feedback_btn'])){
        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        if(empty($name) || empty($email) || empty($message) || empty($phone)){
            $_SESSION['error'] = "Please complete all fields";
            header('location:../index.php#feedback');
        }else{
            $que = new Feedback;
            $que->insert_feedback($name, $email,$phone, $message);
            $_SESSION['message'] = "Feedback received, we'll send a reply via the mail you sent.";
            header('location:../index.php#feedback');
        }
    }else{
        $_SESSION['error'] = "Please fill the form";
        header('location:../index.php#feedback');
    }
?>