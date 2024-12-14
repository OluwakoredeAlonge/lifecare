<?php
session_start();
require_once "../classes/sanitize.php";
require_once "../classes/Patient.php";
if (isset($_POST["loginbtn"])) {
    $username = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);
    if (empty($username) || empty($password)) {
        $_SESSION["errormsg"] = "E-mail or password field cannot be empty";
        header("location: ../patient_login.php");
    } else {
        $pat = new Patient();
        $sql = "SELECT * FROM patient WHERE patient_email = ? LIMIT 1";
        $stmt = $pat->connect()->prepare($sql);
        $stmt->execute([$username]);
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($res) {
            $hashed = $res['patient_password'];
            $check = password_verify($password, $hashed);
            if ($check) {
                if ($res['patient_status'] == 'Active') {
                    $_SESSION["patient_id"] = $res['patient_id'];
                    $_SESSION["feedback"] = "Login Successful, Please update your profile";
                    header("location: ../pat_profile.php");
                    exit();
                } else {
                    $_SESSION["errormsg"] = "Account is inactive. Please contact support.";
                    header("location: ../patient_login.php");
                    exit();
                }
            } else {
                $_SESSION["errormsg"] = "Incorrect Password";
                header("location: ../patient_login.php");
                exit();
            }
        } else {
            $_SESSION["errormsg"] = "No account found with this email.";
            header("location: ../patient_login.php");
            exit();
        }
    }    
} else {
    $_SESSION["errormsg"] = "Please login the proper way";
    header("location: ../patient_login.php");
    exit();
}
