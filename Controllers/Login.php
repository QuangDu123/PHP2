<?php
    namespace app\Controllers;
    use app\model\khach_hang;
    use app\model\danh_muc;
    class Login {
        protected $username;
        protected $password;
        protected $login;
        protected $DM;
        function __construct(){
            $this->login = new khach_hang();
            $this->DM = new danh_muc();
        }
        public function login(){
            if(isset($_POST['btn'])){
                $this->username = $_POST['username1'];
                $this->password = $_POST['password1'];
                $this->loginUser();
            }
            if(isset($_SESSION['khach_hang'])){
                $fullname = $_SESSION['khach_hang']['full_name'];
                header('location:/');
            }
            view('login', 'layouts/master3');
        }
        public function loginUser(){
            if(empty($this->username) || empty($this->password)){
                header("location:/login?error=Nhập đủ thông tin");
                exit();
            }
            $this->login->getUser($this->username, $this->password);
        }
            
        public function logOut(){
            session_unset();
            session_destroy();
            header("location:/");
        }
        
        public function register(){
            if(isset($_POST['btn'])){
                $this->username= $_POST['username'];
                $this->password = $_POST['pw'];
                $this->fullname = $_POST['fullname'];
                $this->dia_chi = $_POST['dia_chi'];
                $this->email = $_POST['email'];
                $this->ma_loai = "kh";
                $this->check_rgt();
            }else{
                view('register', 'layouts/master3');
            }   
        }
    
        public function check_rgt(){
            if($this->emptyInput_rgt()){
                header("location:/register?error= Nhập đủ thông tin");
                return;
            }     
            if($this->login->KH_tt($this->username)){
                header("location:/register?error= Username đã tồn tại");
                return;
            }
            $check = $this->login->KH_Insert($this->username,$this->password,$this->fullname,$this->dia_chi,$this->email,$this->ma_loai);
            if($check){
                header("location:/register?thongbao=Đăng kí thành công");
            }else{
                header("location:/register?error=Đăng kí thất bại");
            }  
        }
        public function emptyInput_rgt(){
            if(empty($this->username || $this->password || $this->fullname || $this->dia_chi || $this->email)){
                return true;
            }else{
                return false;
            }
            view('register', 'layouts/master3');
        }
        
    }
?>