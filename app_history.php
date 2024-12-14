<?php
session_start();
$userid = $_SESSION['patient_id'];
require_once "patient_guard.php";
require_once "classes/Appointment.php";
require_once "classes/Rejection.php";
$a = new Appointment;
$appointments = $a->getUserAppointments($userid);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Appointments</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
        }

        #sidebar {
            width: 250px;
            background-color: #343a40;
            color: white;
            min-height: 100vh;
        }

        #sidebar a {
            color: white;
            text-decoration: none;
        }

        #main-content {
            flex-grow: 1;
            padding: 20px;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }
    </style>
</head>

<body>
<?php require_once "partials/patient_menu.php"; ?>
<div id="main-content">
<?php require_once "partials/patient_nav.php"; ?>
<div class="container mt-4">
<h2 class="mb-4">Your Appointments</h2>
<?php if (!empty($appointments)): ?>
<table class="table table-bordered table-striped">
    <thead class="thead-dark">
        <tr>
            <th>S/N</th>
            <th>Patient Name</th>
            <th>Appointment Date</th>
            <th>Appointment Time</th>
            <th>Nature of Illness</th>
            <th>Appointment Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sn = 1;
        foreach ($appointments as $appointment): ?>
            <tr>
                <td class="text-center"><?php echo $sn++; ?></td>
                <td class="text-capitalize"><?php echo $appointment['patient_name']; ?></td>
                <td><?php echo date('l, d M Y', strtotime($appointment['appointment_date'])); ?></td>
                <td><?php echo date('h:i A', strtotime($appointment['appointment_time'])); ?></td>
                <td class="text-wrap"><?php echo $appointment['illness']; ?></td>
                <td>
                    <span class="badge 
                <?php
            echo ($appointment['appointment_status'] == 'Rejected') ? 'bg-danger' : (($appointment['appointment_status'] == 'Pending') ? 'bg-warning text-dark' : 'bg-success');
                ?>">
                        <?php echo $appointment['appointment_status']; ?>
                    </span>
                    <?php if ($appointment['appointment_status'] == "Rejected") { ?>
                        <a href="rejection_reason.php?app_id=<?php echo $appointment['appointment_id']; ?>"
                            class="btn btn-sm btn-outline-dark ms-2">
                            View Reason
                        </a>
                    <?php } ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php else: ?>
<div class="alert alert-info text-center" role="alert">
    No appointments found. Book an appointment with us today!
</div>
<?php endif; ?>
</div>
</div>
<script src="bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>