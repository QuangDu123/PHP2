<?php
    namespace app\model;
    use mysqli;
    use app\Core\Database;
    class img extends Database {
        

        public function IMG_tt($id_img){
            $stmt = $this->connect()->query("SELECT * FROM `list_img` WHERE  id_img='{$id_img}'");
            if ($stmt->num_rows == 0) {
                $stmt = null;
                return false;
            } else {
                return true;
            }
        }

        public function IMG_Insert($img1,$img2,$img3,$img4,$ma_sp){
            $stmt = $this->connect()->query("INSERT INTO `list_img`(`img1`, `img2`, `img3`, `img4`, `ma_sp`) 
                                    VALUES ('{$img1}','{$img2}','{$img3}','{$img4}','{$ma_sp}')");
            if ($stmt->rowCount == 0) {
                return true;
            } else {
                return false;
            }                               
        }
        public function IMG_selectAll(){
            $stmt = $this->connect()->query("SELECT * FROM `list_img`");
            return $stmt -> fetch_all(MYSQLI_ASSOC);
        }
        public function IMG_select_SP($id_img){
            $stmt = $this->connect()->query("SELECT * FROM `list_img` WHERE id_img = '{$id_img}'");
            return $stmt -> fetch_array();
        }
        public function IMG_select_maSP($ma_sp){
            $stmt = $this->connect()->query("SELECT * FROM `list_img` WHERE `ma_sp` = '{$ma_sp}'");
            return $stmt -> fetch_array();
        }
        public function IMG_Upload($img1,$img2,$img3,$img4,$ma_sp,$id_img){
            // check img1
                $stmt = $this->connect()->query("UPDATE `list_img` SET `img1`='{$img1}',
                `img2`='{$img2}',`img3`='{$img3}',`img4`='{$img4}',`ma_sp`='{$ma_sp}' WHERE `id_img` = '{$id_img}'");
                if($stmt){
                    return true;
                } else{
                    return false;
                }   
        }
            

        public function img_xoa($id_img){
            $stmt = $this->connect()->query("DELETE FROM `list_img` WHERE `id_img` = '{$id_img}'");
            if($stmt){
                return true;
            }
            else{
                return false;
            }
        }
    }
?>