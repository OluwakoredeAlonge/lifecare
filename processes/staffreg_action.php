<?php
    session_start();
    require_once "../classes/sanitize.php";
    require_once "../classes/Staff.php";
    if(isset($_POST["regbtn"])){
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $password = $_POST["password"];
        $confirmpass = $_POST["confirmpass"];
        if(trim($fullname) == "" || trim($email) == "" || trim($phone) == "" || trim($password) == "" || trim($confirmpass) == ""){
            $_SESSION['errormsg'] = "Please complete all fields.";
            header('location:../staff_reg.php');exit();
        }elseif($password != $confirmpass){
            $_SESSION['errormsg'] = "The two passwords must match";
            header('location:../staff_reg.php');exit();
        }elseif(strlen($phone) < 11 || strlen($phone) > 11){
            $_SESSION['errormsg'] = "Your phone number must be 11 characters";
            header('location:../staff_reg.php');exit();
        }else{
            $a = new Staff;
            $rec = $a->register_staff($fullname, $email, $phone, $password);
            if($rec){//registration successful
                $_SESSION['feedback'] = "An account has been created for you, please login";
                header('location:../staff_login.php');
                exit();
            }else{
                $_SESSION['errormsg'] = "Error creating account, please try again";
                header("location:../staff_reg.php");
                exit();
            }
        }
    }else{
        $_SESSION["errormsg"]= "Please login the proper way";
        header("location:../staff_reg.php");
    }
?>