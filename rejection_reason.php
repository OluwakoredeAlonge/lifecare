<?php
$id = $_GET['app_id'];
require_once "classes/Rejection.php";
$rej = new Rejection;
$reject = $rej->get_rej_id($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reason for Rejection</title>
</head>

<body>
    <p><?php echo $reject['reason'] ?></p>
</body>
</html>