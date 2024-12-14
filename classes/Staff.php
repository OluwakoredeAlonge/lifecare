<?php
    require_once "Db.php";
    class Staff extends Db
    {
        private $dbcon;
        public function __construct(){
            $this->dbcon = $this->connect();
        }
        // public function staff_login($username, $password){
        //     $sql = "SELECT * FROM user_account WHERE email = ? LIMIT 1";
        //     $stmt = $this->dbcon->prepare($sql);
        //     $stmt->execute([$username]);
        //     $res = $stmt->fetch(PDO::FETCH_ASSOC);
        //     if  ($res){
        //         $hashed = $res['password'];
        //         $check = password_verify($password, $hashed);
        //         if($check){//password is correct
        //             return $res['User_id'];
        //         }
        //         else{//password is incorrect
        //             $_SESSION['errormsg'] = "Incorrect Password";
        //             return false;
        //         }
        //     }
        //     else{//invalid email
        //         $_SESSION['errormsg'] = "Incorrect Email";
        //         return false;
        //     }
        // }
        public function update_staffdetails($pix,$fullname,$phone,$address,$gender, $id){
            $filename = $pix['proimg']['name'];
            if($filename != ''){
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                $newname = uniqid(). ".$ext";
                $temp = $pix['proimg']['tmp_name'];
                move_uploaded_file($temp, "../newuploads/$newname");
                $sql = "UPDATE user_account SET name = ?, gender = ?, address = ?, phone = ?, user_image = ? WHERE User_id = ?";
                $stmt = $this->dbcon->prepare($sql);
                $stmt->execute([$fullname,$phone,$address,$gender,$newname, $id]);
                return true;
            }else{
                $sql = "UPDATE user_account SET name = ?, phone = ?,address = ?, gender = ? WHERE User_id = ?";
                $stmt = $this->dbcon->prepare($sql);
                $stmt->execute([$fullname,$phone,$address,$gender, $id]);
                return true;
            }
        }
        public function get_staffbyid($id){
            $sql = "SELECT * FROM user_account WHERE User_id = ?";
            $stmt = $this->dbcon->prepare($sql);
            $stmt->execute([$id]);
            $records = $stmt->fetch(PDO::FETCH_ASSOC);
            return $records;
        }
        public function get_staff($id){
            $sql = "SELECT * FROM user_account WHERE User_id = ?";
            $stmt = $this->dbcon->prepare($sql);
            $stmt->execute([$id]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }
        public function fetch_staff(){
            $sql = "SELECT * FROM user_account";
            $stmt = $this->dbcon->prepare($sql);
            $stmt->execute();
            $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $records;
        }
        public function register_staff($fullname, $email, $phone, $password){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO user_account SET name = ?, email = ?, phone = ?, password = ?";
            $stmt = $this->dbcon->prepare($sql);
            $stmt->execute([$fullname, $email, $phone,$hash]);
            return $this->dbcon->lastInsertId();
        }
        public function get_status($status,$id){
            $sql = "UPDATE user_account SET status = ? WHERE User_id = ?";
            $stmt = $this->dbcon->prepare($sql);
            $stmt->execute([$status,$id]);  
        }
        public function check_email($email){
            $sql = "SELECT * FROM user_account WHERE email = ?";
            $stmt = $this->dbcon->prepare($sql);
            $stmt->execute([$email]);
            $numofemail = $stmt->rowCount();
            if($numofemail > 0){
                return true;
            }else{
                return false;
            }
        }
    }
?>