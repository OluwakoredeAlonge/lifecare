<?php
    require_once "Db.php";
    class Rejection extends Db
    {
        private $dbcon;
        public function __construct()
        {
            $this->dbcon = $this->connect();
        }
        public function rejection_reason($reason,$appointment_id){
            $sql = "INSERT INTO rejection_reasons SET reason = ? , appointment_id = ?";
            $stmt = $this->dbcon->prepare($sql);
            $stmt->execute([$reason,$appointment_id]);  
        }
        public function get_rejection_reason($id) {
            $sql = "SELECT reason FROM rejection_reasons WHERE appointment_id = ?";
            $stmt = $this->dbcon->prepare($sql);
            $stmt->execute([$id]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }
        public function get_rej_id($id){
            $sql = "SELECT reason FROM rejection_reasons WHERE id = ?";
            $stmt = $this->dbcon->prepare($sql);
            $stmt->execute([$id]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }
    }
?>