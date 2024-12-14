<?php
    //a class that connects to database
    require_once "config.php";
    class Db
    {
        private $dbhost = DB_HOST;
        private $dbname = DB_NAME;
        private $dbuser = DB_USER;
        private $dbpass = DB_PASSWORD;
        //a method that connects to the database
        public function connect(){
            $dsn = "mysql:dbhost =$this->dbhost; dbname=$this->dbname";
            $option = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];
            try{
                $con = new PDO($dsn, $this->dbuser, $this->dbpass, $option);
                return $con;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
    // $test1 = new Db;
    // $result = $test1->connect();
    // print_r($result);
?>