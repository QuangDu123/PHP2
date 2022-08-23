<?php
    namespace app\model;
    use mysqli;
    use app\Core\Database;
    class don_hang extends Database {
        public function DH_insert($dataOder = []){
            extract($dataOder);
            $stmt = $this->connect()->query("INSERT INTO `hoa_don`(`username`,`ma_hd`) VALUES ('$username',$ma_hd)");                                 
                return $stmt;
        }

        public function DH_InsertCT($dataDH = []){
            extract($dataDH);
            $sql = "INSERT INTO `chi_tiet_hd`(`so_luong`, `gia_tung_sp`, `ma_hd`, `ma_sp`) 
            VALUES ($so_luong,$gia_pro,$ma_hd,$ma_sp)";
            // var_dump($sql);
            // die;
            $stmt = $this->connect()->query($sql);
            return $stmt;
        }

        

        public function DH_selectAll(){
            $stmt = $this->connect()->query("SELECT * FROM `hoa_don`");
            return $stmt -> fetch_all(MYSQLI_ASSOC);
        }
        public function CTDH_select_maHD($ma_hd){
            $stmt = $this->connect()->query("SELECT * FROM `chi_tiet_hd` WHERE `ma_hd` = {$ma_hd}");
            return $stmt -> fetch_all(MYSQLI_ASSOC);
        }

    }
?>