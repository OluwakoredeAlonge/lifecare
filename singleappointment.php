<?php
require_once "classes/Appointment.php";
$app = new Appointment;
$newid = $_GET['id'];
$appointment = $app->get_appointment_by_id($newid);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <title>Single Appointment</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 mt-5">
                <table class="table table-striped">
                    <tr>
                        <td>Name</td>
                        <td> <?php echo $appointment["patient_name"]; ?> </td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td> <?php echo $appointment["patient_phone"]; ?> </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td> <?php echo $appointment["patient_email"]; ?> </td>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td> <?php echo $appointment["appointment_date"]; ?> </td>
                    </tr>
                    <tr>
                        <td>Time</td>
                        <td> <?php echo $appointment["appointment_time"]; ?> </td>
                    </tr>
                    <tr>
                        <td>Illness</td>
                        <td> <?php echo $appointment["illness"]; ?> </td>
                    </tr>
                    <tr>
                        <td>Patient Id</td>
                        <td> <?php echo $appointment["patient_id"]; ?> </td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td> <?php echo $appointment["appointment_status"] ?> </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>