<?php
    require_once "Db.php";
    class Appointment extends Db
    {
        private $dbcon;
        public function __construct(){
            $this->dbcon = $this->connect();
        }
        public function book_appointment($name, $phone, $email, $date, $time, $message){
            $sql = "SELECT COUNT(*) FROM appointment WHERE patient_id = ? AND appointment_status = 'Pending'";
            $stmt = $this->dbcon->prepare($sql);
            $stmt->execute([$_SESSION['patient_id']]);
            $pendingCount = $stmt->fetchColumn();
            if ($pendingCount > 0) {
                return "You already have a pending appointment.";
            }
            $sql = "INSERT INTO appointment SET patient_name = ?, patient_phone = ?, patient_email = ?, appointment_date = ?, appointment_time = ?, illness = ?, patient_id = ?";
            $stmt = $this->dbcon->prepare($sql);
            $stmt->execute([$name, $phone, $email, $date, $time, $message, $_SESSION['patient_id']]);
            return $this->dbcon->lastInsertId();
        }

        public function fetch_appointment(){
            $sql = "SELECT * FROM appointment";
            $stmt = $this->dbcon->prepare($sql);
            $stmt->execute();
            $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $records;
        }
        public function get_appointment_by_id($id){
            $sql = "SELECT * FROM appointment WHERE appointment_id = ?";
            $stmt = $this->dbcon->prepare($sql);
            $stmt->execute([$id]);
            $records = $stmt->fetch(PDO::FETCH_ASSOC);
            return $records;
        }
        public function get_status($status,$id){
            $sql = "UPDATE appointment SET appointment_status = ? WHERE appointment_id = ?";
            $stmt = $this->dbcon->prepare($sql);
            $stmt->execute([$status,$id]);  
        }
        public function getUserAppointments($userId) {
            try {
                $sql = "SELECT * FROM appointment WHERE patient_id = ?";
                $stmt = $this->dbcon->prepare($sql);
                $stmt->execute([$userId]);
                $appointments = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if ($appointments) {
                    return $appointments;
                } else {
                    return []; 
                }
            } catch (PDOException $e) {
                error_log("Error fetching appointments: " . $e->getMessage());
                return [];
            }
        }
        
    }
?>