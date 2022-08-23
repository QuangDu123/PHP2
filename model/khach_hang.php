<?php
    namespace app\model;
    use mysqli;
    use app\Core\Database;
    class khach_hang extends Database {
        public function getUser($username, $password){
            $stmt = $this->connect()->query("SELECT * FROM khach_hang WHERE username='{$username}'");
            if($stmt->num_rows == 0){
                $stmt = null;
                header("location:login?error=Không có tài khoản này");
                exit();
            }
            $khach_hang = $stmt->fetch_array(MYSQLI_ASSOC);
            $check_pw = password_verify($password,$khach_hang['password']);
            if($check_pw === false){
                $stmt = null;
                header("location:login?error=password không đúng");
                exit();
            }else{
                $_SESSION['khach_hang'] = $khach_hang;
            }
        }

        public function KH_tt($username){
            $stmt = $this->connect()->query("SELECT * FROM khach_hang WHERE username='{$username}'");
            if ($stmt->num_rows == 0) {
                $stmt = null;
                return false;
            } else {
                return true;
            }
        }
        public function KH_Insert($username,$password,$fullname,$dia_chi,$email,$ma_loai){
            $hashPassword = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $this->connect()->query("INSERT INTO `khach_hang`(`username`, `password`, `fullname`, `dia_chi`, `email`, `ma_loai`)  
                VALUES ('{$username}','{$hashPassword}','{$fullname}','{$dia_chi}','{$email}','{$ma_loai}')");
            if ($stmt->rowCount == 0) {
                return true;
            } else {
                return false;
            }                               
        }
        public function KH_selectAll(){
            $stmt = $this->connect()->query("SELECT * FROM `khach_hang`");
            return $stmt -> fetch_all(MYSQLI_ASSOC);
        }
        public function KH_select_username($username){
            $stmt = $this->connect()->query("SELECT * FROM `khach_hang` WHERE username = '{$username}'");
            return $stmt -> fetch_array();
        }
        public function KH_Upload($password,$fullname,$dia_chi,$email,$ma_loai,$username){
            $hashPassword = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $this->connect()->query("UPDATE `khach_hang` SET `password`='{$hashPassword}',`fullname`='{$fullname}',
            `dia_chi`='{$dia_chi}',`email`='{$email}',`ma_loai`='{$ma_loai}' WHERE username = '{$username}'");
            if($stmt){
                return true;
            } else{
                return false;
            } 
        }
        public function KH_Upload_user($password,$fullname,$dia_chi,$email,$username){
            $hashPassword = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $this->connect()->query("UPDATE `khach_hang` SET `password`='{$hashPassword}',`fullname`='{$fullname}',
            `dia_chi`='{$dia_chi}',`email`='{$email}' WHERE username = '{$username}'");
            if($stmt){
                return true;
            } else{
                return false;
            } 
        }
        public function KH_xoa($username){
            $stmt = $this->connect()->query("DELETE FROM `khach_hang` WHERE `username` = '{$username}'");
            if($stmt){
                return true;
            }
            else{
                return false;
            }
        }
    }
?>