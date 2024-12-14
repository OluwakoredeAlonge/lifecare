<?php
require_once "classes/Patient.php";
$app = new Patient;
$newid = $_GET['id'];
$patient = $app->get_patientbyid($newid);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <title>Single Patient</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 mt-5">
                <table class="table table-striped">
                    <tr>
                        <td>Name</td>
                        <td> <?php echo $patient["patient_name"]; ?> </td>
                    </tr>
                    <tr>
                        <td>DOB</td>
                        <td> <?php echo $patient["patient_dob"]; ?> </td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td> <?php echo $patient["patient_phone"]; ?> </td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td> <?php echo $patient["patient_address"]; ?> </td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td> <?php echo $patient["patient_gender"]; ?> </td>
                    </tr>
                    <tr>
                        <td>Weight</td>
                        <td> <?php echo $patient["patient_weight"]; ?> </td>
                    </tr>
                    <tr>
                        <td>Height</td>
                        <td> <?php echo $patient["patient_height"]; ?> </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td> <?php echo $patient["patient_email"]; ?> </td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td> <?php echo $patient["patient_status"] ?> </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>