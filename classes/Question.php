<?php
    require_once "Db.php";
    class Question extends Db
    {
        private $dbcon;
        public function __construct()
        {
            $this->dbcon = $this->connect();
        }
        public function insert_question($name, $email, $question){
            $sql = "INSERT INTO question SET sender_name = ?, sender_email = ?, question = ?";
            $stmt = $this->dbcon->prepare($sql);
            $stmt->execute([$name,$email, $question]);
            return $this->dbcon->lastInsertId();
        }
        public function fetch_question(){
            $sql = "SELECT * FROM question";
            $stmt = $this->dbcon->prepare($sql);
            $stmt->execute();
            $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $records;
        }
        public function get_question_by_id($id){
            $sql = "SELECT * FROM question WHERE question_id  = ?";
            $stmt = $this->dbcon->prepare($sql);
            $stmt->execute([$id]);
            $records = $stmt->fetch(PDO::FETCH_ASSOC);
            return $records;
        }
    }
   