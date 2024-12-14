<?php
session_start();
require_once "../classes/sanitize.php";
require_once "../classes/Staff.php";
if (isset($_POST["loginbtn"])) {
    $email = sanitize($_POST["email"]);
    $password = $_POST["password"];
    if (empty($email) || empty($password)) {
        $_SESSION["errormsg"] = "Email or Password cannot be empty";
        header("location: ../staff_login.php");
        exit();
    } else {
        $sta = new Staff();
        $sql = "SELECT * FROM user_account WHERE email = ? LIMIT 1";
        $stmt = $sta->connect()->prepare($sql);
        $stmt->execute([$email]);
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($res) {
            $hashed = $res['password'];
            $check = password_verify($password, $hashed);
            if ($check) {
                if ($res['status'] == 'Active') {
                    $_SESSION["User_id"] = $res['User_id'];
                    $_SESSION["feedback"] = "Login Successful, Please update your profile";
                    header("location: ../staff_profile.php");
                    exit();
                } else {
                    $_SESSION["errormsg"] = "Account is inactive. Please contact support.";
                    header("location: ../staff_login.php");
                    exit();
                }
            } else {
                $_SESSION["errormsg"] = "Incorrect Password";
                header("location: ../staff_login.php");
                exit();
            }
        } else {
            $_SESSION["errormsg"] = "No account found with this email.";
            header("location: ../staff_login.php");
            exit();
        }
    }
} else {
    $_SESSION["errormsg"] = "Please login the proper way";
    header("location: ../staff_login.php");
    exit();
}
