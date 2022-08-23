<?php
    namespace app\model;
    use mysqli;
    use app\Core\Database;
    class san_pham extends Database {
        public function SP_Insert($ten_sp,$gia_sp,$img_sp,$ctsp,$ma_dm){
            $stmt = $this->connect()->query("INSERT INTO `san_pham`(`ten_sp`, `gia_sp`, `img_sp`, `ctsp`, `ma_dm`) 
                                            VALUES ('{$ten_sp}','{$gia_sp}','{$img_sp}','{$ctsp}','{$ma_dm}')");
            if ($stmt->rowCount == 0) {
                return true;
            } else {
                return false;
            }
        }
        public function SP_tt($ma_sp){
            $stmt = $this->connect()->query("SELECT * FROM `san_pham` WHERE ma_sp = '{$ma_sp}'");
            if ($stmt->num_rows == 0) {
                $stmt = null;
                return false;
            } else {
                return true;
            }
        }

        public function SP_selectAll(){
            $stmt = $this->connect()->query("SELECT * FROM `san_pham`");
            return $stmt -> fetch_all(MYSQLI_ASSOC);
        }
        public function SP_select_ma_sp($ma_sp){
            $stmt = $this->connect()->query("SELECT * FROM `san_pham` WHERE ma_sp = '{$ma_sp}'");
            return $stmt -> fetch_array();
        }
        // public function SP_load_DM($ma_dm){
        //     $stmt = $this->connect()->query("SELECT * FROM `san_pham` WHERE ma_dm = '{$ma_dm}'");
        //     if($stmt){
        //         return true;
        //     } else{
        //         return false;
        //     }  
        // }
        public function SP_Upload($ten_sp,$gia_sp,$img_sp,$ctsp,$ma_dm,$ma_sp){
            if($img_sp == ''){
                $stmt = $this->connect()->query("UPDATE `san_pham` SET `ten_sp`='{$ten_sp}',
                `gia_sp`='{$gia_sp}',`ctsp`='{$ctsp}',`ma_dm`='{$ma_dm}' WHERE ma_sp = '{$ma_sp}'");
                if($stmt){
                    return true;
                } else{
                    return false;
                }  
            }else{
                $stmt = $this->connect()->query("UPDATE `san_pham` SET `ten_sp`='{$ten_sp}',
                `gia_sp`='{$gia_sp}',`img_sp`='{$img_sp}',`ctsp`='{$ctsp}',`ma_dm`='{$ma_dm}' WHERE ma_sp = '{$ma_sp}'");
                if($stmt){
                    return true;
                } else{
                    return false;
                }  
            }
            
        }
        public function SP_xoa($ma_sp){
            $stmt = $this->connect()->query("DELETE FROM `san_pham` WHERE `ma_sp` = '{$ma_sp}'");
            if($stmt){
                return true;
            }
            else{
                return false;
            }
        }

        public function SP_loc_DM($ma_dm){
            $stmt = $this->connect()->query("SELECT * FROM `san_pham` WHERE ma_dm = {$ma_dm}");
            return $stmt -> fetch_all(MYSQLI_ASSOC);
        }


    }
?>