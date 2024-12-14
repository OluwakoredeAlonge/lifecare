<?php

    session_start();
    require_once "../classes/sanitize.php";
    require_once "../classes/Staff.php";
    if(isset($_POST["updatebtn"])){
        $fullname = $_POST["fullname"];
        $gender = $_POST["gender"];
        $address = $_POST["address"];
        $phone = $_POST["phone"];
        $filename = $_FILES['proimg'];
        echo "<pre>";
        print_r($filename);
        echo "</pre>";
        if($filename['error'] == 0){
            $ext = pathinfo($filename['name'], PATHINFO_EXTENSION);
            $allowed = ["jpg", "png", "jpeg"];
            if(!in_array(strtolower($ext), $allowed)){
                $_SESSION['errormsg'] = "This type of file is not allowed";
                header("location: ../staff_profile.php");exit();
            }
        }elseif(trim($fullname)  == ""|| trim($gender) == "" || trim($address) =="" || trim($phone) == ""){
            $_SESSION['errormsg'] = "Please complete all fields.";
            header('location:../staff_profile.php');exit();
        }else{
            $a = new Staff;
            $a->update_staffdetails($filename,$fullname,$phone,$address,$gender,$_SESSION["User_id"]);
            $_SESSION['feedback'] = 'Profile Updated...';
            header('location: ../staff_profile.php');exit();
        }
    }else{
        $_SESSION["errormsg"] = "You have to be logged in to access this page";
        header("location: ../staff_login.php");exit();
    }
?>