<?php
    namespace app\model;
    use mysqli;
    use app\Core\Database;
    class danh_muc extends Database {
        public function Insert_DM($ten_dm){
            $stmt = $this->connect()->query("INSERT INTO `danh_muc`(`ten_dm`) VALUES ('{$ten_dm}')");
            if ($stmt->rowCount == 0) {
                return true;
            } else {
                return false;
            }
        }
        public function check_DM($ma_dm){
            $stmt = $this->connect()->query("SELECT * FROM danh_muc WHERE ma_dm = '{$ma_dm}'");
            if ($stmt->num_rows == 0) {
                $stmt = null;
                return false;
            } else {
                return true;
            }
        }

        public function DM_selectAll(){
            $stmt = $this->connect()->query("SELECT * FROM danh_muc");
            return $stmt -> fetch_all(MYSQLI_ASSOC);
        }
        public function DM_select_ma_dm($ma_dm){
            $stmt = $this->connect()->query("SELECT * FROM danh_muc WHERE ma_dm = '{$ma_dm}'");
            return $stmt -> fetch_array();
        }
        public function DM_Upload($ten_dm,$ma_dm){
            $stmt = $this->connect()->query("UPDATE `danh_muc` SET `ten_dm`= '{$ten_dm}' WHERE `ma_dm` = '{$ma_dm}'");
            if($stmt){
                return true;
            } else{
                return false;
            }  
        }
        public function DM_xoa($ma_dm){
            $stmt = $this->connect()->query("DELETE FROM `danh_muc` WHERE `ma_dm` = '{$ma_dm}'");
            if($stmt){
                return true;
            }
            else{
                return false;
            }
        }



    }
?>