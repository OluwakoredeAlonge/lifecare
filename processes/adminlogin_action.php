<?php
    session_start();
    require_once "../hash.php";
    require_once "../classes/sanitize.php";
    require_once "../classes/Admin.php";
    if(isset($_POST["loginbtn"])){
        $username = sanitize($_POST["email"]);
        $password = $_POST["password"];
        if(empty($username) || empty($password)){
            $_SESSION["errormsg"] = "E-mail or password field cannot be empty";
            header("location: ../admin_login.php");
        }else{
            $a = new Admin;
            $app = $a->admin_login($username, $password);
            if($app){
                $_SESSION["Admin_id"] = $app;
                header("location: ../patients.php");exit();
            }else{
                $_SESSION["errormsg"] = "Wrong e-mail or password";
                header("location: ../admin_login.php");
            }
        }
    }else{
    $_SESSION["errormsg"] = "Please login the proper way";
    header("location: ../patients.php");exit();
    }
?>