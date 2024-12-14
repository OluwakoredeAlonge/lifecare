<?php
require_once "classes/Feedback.php";
$app = new Feedback;
$newid = $_GET['id'];
$feedback = $app->get_feedback_by_id($newid);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <title>Single Feedback</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 mt-5">
                <table class="table table-striped">
                    <tr>
                        <td>Name</td>
                        <td> <?php echo $feedback["sender_name"]; ?> </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td> <?php echo $feedback["sender_email"]; ?> </td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td> <?php echo $feedback["sender_phone"]; ?> </td>
                    </tr>
                    <tr>
                        <td>Mesage</td>
                        <td> <?php echo $feedback["message"]; ?> </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>