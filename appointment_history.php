<?php
session_start();
require_once "partials/header.php";
require_once "patient_guard.php";
require_once "classes/Appointment.php";
$id = $_SESSION['patient_id'];
$a = new Appointment;
$rec = $a->get_appointment_by_id($id);
?>
<div class="container-fluid ms-0 ps-0">
  <div class="row">
    <div class="col-md-3">
      <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="min-width: 300px;min-height: 900px;">
        <?php
        require_once "partials/patient_menu.php";
        ?>
      </div>
    </div>
    <div class="col-md-9 p-4">
      <table class="table table-striped">
        <h4 class="text-center"> All requested appointments <span><?php echo count($rec) ?></span></h4>
        <thead>
          <tr>
            <th>S/N</th>
            <th>Patient Name</th>
            <th>Requested date</th>
            <th>Requested time</th>
            <th>Appointment Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sn = 1;
          foreach ($rec as $r) {
          ?>
            <tr>
              <td><?php echo $sn++; ?></td>
              <td><?php echo $r["patient_name"]; ?></td>
              <td><?php echo $r["appointment_date"]; ?></td>
              <td><?php echo $r["appointment_time"]; ?></td>
              <td><?php echo $r["appointment_status"]; ?></td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>