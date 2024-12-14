<?php
    session_start();
    require_once "../classes/sanitize.php";
    require_once "../classes/Patient.php";
    if(isset($_POST["regbtn"])){
        $fullname = sanitize($_POST["fullname"]);
        $email = sanitize($_POST["email"]);
        $phone = sanitize($_POST["phone"]);
        $password = $_POST["password"];
        $confirmpass = $_POST["confirmpass"];
        if(trim($fullname) == "" || trim($email) == "" || trim($phone) == "" || trim($password) == "" || trim($confirmpass) == ""){
            $_SESSION['errormsg'] = "Please complete all fields.";
            header('location:../patient_reg.php');exit();
        }elseif($password != $confirmpass){
            $_SESSION['errormsg'] = "The two passwords must match";
            header('location:../patient_reg.php');exit();
        }elseif(strlen($phone) < 11 || strlen($phone) > 11){
            $_SESSION['errormsg'] = "Your phone number must be 11 characters";
            header('location:../patient_reg.php');exit();
        }else{
            $a = new Patient;
            $rec = $a->register_patient($fullname, $email, $phone, $password);
            if($rec){//registration successful
                $_SESSION['feedback'] = "An account has been created for you, please login";
                header('location:../patient_login.php');
                exit();
            }else{
                $_SESSION['errormsg'] = "Error creating account, please try again";
                header("location:../patient_reg.php");
                exit();
            }
        }
    }else{
        $_SESSION["errormsg"] = "Please login the proper way";
        header("location: ../patient_reg.php");exit();
    }
?>