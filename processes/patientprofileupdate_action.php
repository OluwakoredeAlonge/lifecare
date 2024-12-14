<?php
    session_start();
    require_once "../classes/sanitize.php";
    require_once "../classes/Patient.php";
    if(isset($_POST["updatebtn"])){
        $fullname = sanitize($_POST["fullname"]);
        $dob = $_POST["dob"];
        $gender = $_POST["gender"];
        $weight = sanitize( $_POST["weight"]);
        $height = sanitize($_POST["height"]);
        $address = sanitize( $_POST["address"]);
        $phone = $_POST["phone"];
        $files = $_FILES['profilepic'];
        if((trim($fullname)  == ""||trim($dob) == "" || trim($gender) == "" ||trim($weight) =="" ||trim($height) =="" || trim($address) =="" || trim($phone) == "" || trim($email = "") || trim($files == ""))){
            $_SESSION['errormsg'] = "Please complete all fields.";
            header('location:../patient_profile.php');exit();
        }elseif ($_FILES['profilepic']['error'] == 0) {
            $ext = pathinfo($_FILES['profilepic']['name'], PATHINFO_EXTENSION);
            $allowed = ["jpg", "png", "jpeg"];
            if (!in_array(strtolower($ext), $allowed)) {
                $_SESSION['errormsg'] = "This type of file is not allowed";
                header('Location: ../pat_profile.php');
                exit();
            }
            $a = new Patient;
            $update = $a->update_patientdetails($_FILES, $fullname, $dob, $phone, $address, $gender, $weight, $height, $_SESSION['patient_id']);
            $_SESSION['feedback'] = 'Profile Updated Successfully';
            header('Location: ../pat_profile.php');
            exit();
        }else {
            // if ($_FILES['profilepic']['error'] != 0) {
            //     $_SESSION['errormsg'] = "Error uploading the file. Please try again.";
            //     header('Location: ../pat_profile.php');
            //     exit();
            // }
            $a = new Patient;
            $update = $a->update_patientdetails($_FILES, $fullname, $dob, $phone, $address, $gender, $weight, $height, $_SESSION['patient_id']);
            $_SESSION['feedback'] = 'Profile Updated Successfully without image update.';
            header('Location: ../pat_profile.php');
            exit();
        }
    }else{
        $_SESSION["errormsg"] = "You have to be logged in to access this page";
        header("location: ../patient_login.php");exit();
    }
?>