<?php
    require_once "Db.php";
    class Admin extends Db
    {
        private $dbcon;
        public function __construct(){
            $this->dbcon = $this->connect();
        }
        public function admin_login($username, $password){
            $sql = "SELECT * FROM admin WHERE Admin_email = ? LIMIT 1";
            $stmt = $this->dbcon->prepare($sql);
            $stmt->execute([$username]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if($result){
                $hashed = $result['Admin_password'];
                $check = password_verify($password, $hashed);
                if($check){
                    return $result['Admin_id'];
                }
                else{
                    $_SESSION['errormsg'] = "Incorrect Password";
                    return false;
                }
            }
            else{
                $_SESSION['errormsg'] = "Incorrect Email";
                return false;
            }
        }
        public function logout(){
            session_destroy();
        }
        }  
?>