<?php
    namespace app\model;
    use mysqli;
    use app\Core\Database;
    class loai_kh extends Database {
        public function Insert_LKH($ma_loai,$ten_loai){
            $stmt = $this->connect()->query("INSERT INTO `loai_kh`(`ma_loai`,`ten_loai`) VALUES ('{$ma_loai}','{$ten_loai}')");
            if ($stmt->rowCount == 0) {
                return true;
            } else {
                return false;
            }
        }
        public function LKH_tt($ma_loai){
            $stmt = $this->connect()->query("SELECT * FROM `loai_kh` WHERE ma_loai = '{$ma_loai}'");
            if ($stmt->num_rows == 0) {
                $stmt = null;
                return false;
            } else {
                return true;
            }
        }

        public function LKH_selectAll(){
            $stmt = $this->connect()->query("SELECT * FROM loai_kh");
            return $stmt -> fetch_all(MYSQLI_ASSOC);
        }
        public function LKH_select_ma_lkh($ma_loai){
            $stmt = $this->connect()->query("SELECT * FROM `loai_kh` WHERE ma_loai = '{$ma_loai}'");
            return $stmt -> fetch_array();
        }
        public function LKH_Upload($ten_loai,$ma_loai){
            $stmt = $this->connect()->query("UPDATE `loai_kh` SET `ten_loai`='{$ten_loai}' WHERE `ma_loai` = '{$ma_loai}'");
            if($stmt){
                return true;
            }
            else{
                return false;
            }
        }
        public function LKH_xoa($ma_loai){
            $stmt = $this->connect()->query("DELETE FROM `loai_kh` WHERE `ma_loai` = '{$ma_loai}'");
            if($stmt){
                return true;
            }
            else{
                return false;
            }
        }

    }
?>