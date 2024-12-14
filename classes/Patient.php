<?php
    require_once "Db.php";
    class Patient extends Db
    {
        private $dbcon;
            public function __construct(){
                $this->dbcon = $this->connect();
        }
            public function register_patient($fullname, $email, $phone, $password){
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO patient SET patient_name = ?, patient_email = ?, patient_phone = ?, patient_password = ?";
                $stmt = $this->dbcon->prepare($sql);
                $stmt->execute([$fullname, $email, $phone,$hash]);
                return $this->dbcon->lastInsertId();
        } 
        // public function patient_login($username, $password){
        //         $sql = "SELECT * FROM patient WHERE patient_email = ? LIMIT 1";
        //         $stmt = $this->dbcon->prepare($sql);
        //         $stmt->execute([$username]);
        //         $res = $stmt->fetch(PDO::FETCH_ASSOC);
        //     if  ($res){
        //         $hashed = $res['patient_password'];
        //         $check = password_verify($password, $hashed);
        //         if($check){//password is correct
        //             return $res['patient_id'];
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
        public function get_patientbyid($id){
            $sql = "SELECT * FROM patient WHERE patient_id = ?";
            $stmt = $this->dbcon->prepare($sql);
            $stmt->execute([$id]);
            $records = $stmt->fetch(PDO::FETCH_ASSOC);
            return $records;
        }
        public function fetch_patient(){
            $sql = "SELECT * FROM patient";
            $stmt = $this->dbcon->prepare($sql);
            $stmt->execute();
            $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $records;
        }
        public function update_patientdetails($pix, $fullname, $dob, $phone, $address, $gender, $weight, $height, $id) {
            $newname = null;
            if (!empty($pix['profilepic']['name'])) {
                $filename = $pix['profilepic']['name'];
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                $newname = uniqid() . "." . $ext; 
                $uploadDir = "../uploads/"; 
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);  
                }
                $temp = $pix['profilepic']['tmp_name'];
                if (!move_uploaded_file($temp, $uploadDir . $newname)) {
                    return "Error: Unable to upload the file.";
                }
            }
            if ($newname == null) {
                $sql = "UPDATE patient SET patient_name = ?, patient_dob = ?, patient_phone = ?, patient_address = ?, patient_gender = ?, patient_weight = ?, patient_height = ? WHERE patient_id = ?";
                $stmt = $this->dbcon->prepare($sql);
                $stmt->execute([$fullname, $dob, $phone, $address, $gender, $weight, $height, $id]);
            } else {
                $sql = "UPDATE patient SET patient_name = ?, patient_dob = ?, patient_phone = ?, patient_address = ?, patient_gender = ?, patient_weight = ?, patient_height = ?, patient_image = ? WHERE patient_id = ?";
                $stmt = $this->dbcon->prepare($sql);
                $stmt->execute([$fullname, $dob, $phone, $address, $gender, $weight, $height, $newname, $id]);
            }
            return true;  
        } 
        public function get_status($status,$id){
            $sql = "UPDATE patient SET patient_status = ? WHERE patient_id = ?";
            $stmt = $this->dbcon->prepare($sql);
            $stmt->execute([$status,$id]);  
        }
        public function check_email($email){
            $sql = "SELECT * FROM patient WHERE patient_email = ?";
            $stmt = $this->dbcon->prepare($sql);
            $stmt->execute([$email]);
            $numofemail = $stmt->rowCount();
            if($numofemail > 0){
                return true;
            }else{
                return false;
            }
        }
        public function logout(){
            session_destroy();
        }
    }
?>  