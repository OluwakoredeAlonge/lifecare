<?php
require_once "classes/Staff.php";
$cust1 = new Staff;
$newid = $_GET['id'];
$staff = $cust1->get_staffbyid($newid)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 mt-5">
                <table class="table table-striped">
                    <tr>
                        <td>Name</td>
                        <td> <?php echo $staff["name"]; ?> </td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td> <?php echo $staff["phone"]; ?> </td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td> <?php echo $staff["address"]; ?> </td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td> <?php echo $staff["gender"]; ?> </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td> <?php echo $staff["email"]; ?> </td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td> <?php echo $staff["status"] ?> </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>