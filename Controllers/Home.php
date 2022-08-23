<?php
namespace app\Controllers;
use app\model\danh_muc;
use app\model\san_pham;
use app\model\loai_kh;
use app\model\khach_hang;
use app\model\img;
use app\model\don_hang;
    class Home{
        // ------------ khai báo DB
        private $DM;
        private $SP;
        private $LKH;
        private $KH;
        private $IMG;
        private $DH;

        function __construct(){
            $this->DM = new danh_muc();
            $this->SP = new san_pham();
            $this->LKH = new loai_kh();
            $this->KH = new khach_hang();
            $this->IMG = new img();
            $this->DH = new don_hang();
        }
        public function index(){
            $load_SP_home = $this->SP->SP_selectAll();
            $load_DM_home = $this->DM->DM_selectAll();
            view('trang_chu', 'layouts/master1',[
                'arr'=>$load_SP_home,
                'arr1'=>$load_DM_home,
            ]);
        }
        public function loc_index(){
            $ma_dm = $_GET['ma_dm'];
            $load_DM_home = $this->DM->DM_selectAll();
            $loc_DM = $this->SP->SP_loc_DM($ma_dm);
            view('loc_index', 'layouts/master1',[
                'arr1'=>$load_DM_home,    
                'loc_SP'=>$loc_DM]);
        }
        public function shop(){
            $load_DM_home = $this->DM->DM_selectAll();
            $load_SP_home = $this->SP->SP_selectAll();
            view('shop', 'layouts/master1',[
                'arr'=>$load_SP_home,
                'arr1'=>$load_DM_home]);       
        }
        public function loc_DM(){
            $ma_dm = $_GET['ma_dm'];
            $load_DM_home = $this->DM->DM_selectAll();
            $loc_DM = $this->SP->SP_loc_DM($ma_dm);
            view('loc_sp', 'layouts/master1',[
                'arr1'=>$load_DM_home,    
                'loc_SP'=>$loc_DM]);
        }
        public function contact(){
            view('contact', 'layouts/master1');
        }
        public function ca_nhan(){
            $username =  $_SESSION['khach_hang']['username'];
            $load_kh = $this->KH->KH_selectAll();
            $select_KH = $this->KH->KH_select_username($username);
            view('ca_nhan', 'layouts/master1',[
                'arr'=>$select_KH,'arr1'=>$load_kh
            ]);
            if(isset($_POST['btn'])){
                $username =  $_SESSION['khach_hang']['username'];
                $this->username= $_POST['username'];
                $this->password = $_POST['pw'];
                $this->fullname = $_POST['fullname'];
                $this->dia_chi = $_POST['dia_chi'];
                $this->email = $_POST['email'];
                $upL = $this->KH->KH_Upload_user($this->password,$this->fullname,$this->dia_chi,$this->email,$username);
                if($upL){
                    view('/ca_nhan?username=$username&tb=1', 'layouts/master1');  
                }else{
                    view('/ca_nhan?username=$username&tb=2', 'layouts/master1');
                } 
            } 
        }
        public function blog(){
            view('blog', 'layouts/master1');  
        }
        public function cart(){
            // if(isset($_SESSION['khach_hang'])){
                view('cart', 'layouts/master1');
            // }else{
                // view('login', 'layouts/master3');
            // }
            
        }
        public function order(){
             if(isset($_SESSION['khach_hang'])){
                view('order', 'layouts/master1');
            }else{
                view('login', 'layouts/master3');
            }            
        }
        public function ctsp(){
            $ma_sp = $_GET['ma_sp'];
            $ma_dm = $_GET['ma_dm'];
            $load_ctsp = $this->SP->SP_select_ma_sp($ma_sp);
            $SP_load_Lienquan = $this->SP->SP_loc_DM($ma_dm);
            $img_ctsp = $this->IMG->IMG_select_maSP($ma_sp);
            view('ctsp', 'layouts/master1',[
                'load_ctsp'=>$load_ctsp,
                'a'=>$SP_load_Lienquan,
                'b'=>$img_ctsp
            ]);
        }
        public function getApi(){
            $ma_sp = $_GET['ma_sp'];
            $SP_cart = $this->SP->SP_select_ma_sp($ma_sp);
            $dataCT = [
                "ma_sp"=>$SP_cart['ma_sp'],
                "ten_sp"=>$SP_cart['ten_sp'],
                "gia_sp"=>$SP_cart['gia_sp'],
                "img_sp"=>$SP_cart['img_sp']
            ];
            echo json_encode($dataCT);
        }
        public function postApi(){
            $postdata = file_get_contents("php://input"); // nhận đầu vào input
            $req = json_decode($postdata);
            $id = mt_rand(10, 99999);
            $dataOder = [
                "username"=>$_SESSION['khach_hang']['username'],
                "ma_hd"=>$id
            ];
            $data = $req->dataOder;
            $DH_Oder = $this->DH->DH_insert($dataOder);
            // var_dump($data);
            // die;
            if($DH_Oder){
                // $DHCT = $req->cart;
                foreach($data as $val){
                    // extract($val);
                    $dataDH = [
                        "ma_hd" => $id,
                        "ma_sp" => $val->ma_sp,
                        "so_luong" => $val->Soluong,
                        "gia_pro" => $val->tTien
                    ];
                    $this->DH->DH_InsertCT($dataDH);
                    
                }
            }
            echo 'Thanh toán thành công';

        }
        
       
    }
?>