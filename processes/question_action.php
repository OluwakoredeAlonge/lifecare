<?php
    session_start();
    require_once "../classes/Question.php";
    if(isset($_POST['question_btn'])){
        $name = $_POST['fullname'];
        $mail = $_POST['email'];
        $message = $_POST['message'];
        if(empty($name) || empty($mail) || empty($message)){
            $_SESSION['errormsg'] = "Please complete all fields";
            header('location:../index.php#quest');
        }else{
            $que = new Question;
            $que->insert_question($name,$mail, $message);
            $_SESSION['feedback'] = "Question received, we'll send a reply via the mail you sent.";
            header('location:../index.php#quest');
        }
    }else{
        $_SESSION['errormsg'] = "Please fill the form";
        header("location:../index.php#quest");
    }
?>