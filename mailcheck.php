<?php
require_once "Classes/Patient.php";
header('Content-Type: application/json');
try {
    $email = isset($_GET["email"]) ? trim($_GET["email"]) : '';
    if (empty($email)) {
        echo json_encode([
            "status" => "error",
            "message" => "Invalid email format."
        ]);
        exit;
    }
    $mail = new Patient;
    $email_exist = $mail->check_email($email);

    if ($email_exist == true) {
        echo json_encode([
            "status" => "exists",
            "message" => "Email is already registered."
        ]);
    } else {
        echo json_encode([
            "status" => "available",
            "message" => "Email is available for registration."
        ]);
    }
} catch (Exception $e) {
    echo json_encode([
        "status" => "error",
        "message" => "An error occurred while processing your request. Please try again later."
    ]);
}
