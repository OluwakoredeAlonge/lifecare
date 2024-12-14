<?php
require_once "Db.php";
class Feedback extends Db
{
    private $dbcon;
    public function __construct()
    {
        $this->dbcon = $this->connect() ;       
    }
    public function insert_feedback($name, $email,$phone, $message){
        $sql = "INSERT INTO feedback SET sender_name = ?, sender_email = ?,sender_phone = ?, message = ?";
        $stmt = $this->dbcon->prepare($sql);
        $stmt->execute([$name, $email,$phone, $message]);
        return $this->dbcon->lastInsertId();
    }
    public function fetch_feedback(){
        $sql = "SELECT * FROM feedback";
        $stmt = $this->dbcon->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $records;
    }
    public function get_feedback_by_id($id){
        $sql = "SELECT * FROM feedback WHERE message_id  = ?";
        $stmt = $this->dbcon->prepare($sql);
        $stmt->execute([$id]);
        $records = $stmt->fetch(PDO::FETCH_ASSOC);
        return $records;
    }
}