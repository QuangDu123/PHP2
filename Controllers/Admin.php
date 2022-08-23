<?php 
    namespace app\Controllers;
    use app\model\danh_muc;
    use app\model\san_pham;
    use app\model\loai_kh;
    use app\model\khach_hang;
    use app\model\img;
    use app\model\don_hang;
    class Admin{
        private $ten_dm;
        private $ma_dm;
        // ------------ loại kh
        private $ma_lkh;
        private $ten_lkh;
        // ------------ SP
        private $ma_sp;
        // ------------ IMG
        private $id_img;
         // ------------ KH
        private $username;
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
        public function admin(){
            if(isset($_SESSION['khach_hang'])){
                if($_SESSION['khach_hang']['ma_loai'] == 'ad'){
                    view('admin/admin', 'layouts/master2');
                }else{
                    header("location:/");
                    exit();
                }
            }else{
                view('login', 'layouts/master3');
            }
        }
// ---DM----------------------------------------------------------------------------------
        // DM  
        public function dm(){
            if(isset($_POST['btn'])){
                $this->ten_dm = $_POST['ten_dm'];
                $this->checkDM();
            }else{
            view('admin/danh_muc/them', 'layouts/master2'); 
            }
        }
        public function checkDM(){
            if($this->emptyInput()){
                header("location:/admin/danh_muc?error= Nhập đủ thông tin");
                return;
            }     
            if($this->DM->check_DM($this->ma_dm)){
                header("location:/admin/danh_muc?error=Danh mục đã tồn tại");
                return;
            }
            $check = $this->DM->Insert_DM($this->ten_dm);
            if($check){
                header("location:/admin/danh_muc?thongbao=Thêm danh mục thành công");
            }else{
                header("location:/admin/danh_muc?error=Thêm danh mục thất bại");
            }  
        }
        private function emptyInput(){
            if(empty($this->ten_dm)){
                return true;
            }
            else{
                return false;
            }
        }
        // end thêm DM 
        // DM_DS 
        public function dm_ds(){
            $xuat = $this->DM->DM_selectAll();
            view('admin/danh_muc/danh_sach', 'layouts/master2',[
                'arr'=>$xuat
            ]); 
        }
        // end DM_DS 
        // DM_EDIT 
        public function dm_edit(){
            $ma_dm = $_GET['ma_dm'];
            $edit_DM = $this->DM->DM_select_ma_dm($ma_dm);
            view('admin/danh_muc/sua', 'layouts/master2',[
                'arr'=>$edit_DM
            ]);
            if(isset($_POST['btn'])){
                $this->$ma_dm = $_GET['ma_dm'];
                $this->ma_dm = $_POST['ma_dm'];
                $this->ten_dm = $_POST['ten_dm'];
            $upL = $this->DM->DM_Upload($this->ten_dm,$this->ma_dm);
                if($upL){
                    header("location:/admin/danh_muc/edit?ma_dm=$ma_dm&tb=1");
                }else{
                    header("location:/admin/danh_muc/edit?ma_dm=$ma_dm&tb=2");
                }  
            }
             
        }
        // end DM_EDIT
        // DM_DELETE
        public function dm_delete(){
            $ma_dm = $_GET['ma_dm'];
            $delete_DM= $this->DM->DM_xoa($ma_dm);
            if($delete_DM){
                header("location:/admin/danh_muc/danh_sach?tb=1");
            }else{
                header("location:/admin/danh_muc/danh_sach?tb=2");
            } 
        }
        // end DM_DELETE
// ----SP---------------------------------------------------------------------------------

        // SP
        public function sp(){
            $load_dm = $this->DM->DM_selectAll();
            if(isset($_POST['btn'])){
                $this->ten_sp = $_POST['ten_sp'];
                $this->gia_sp = $_POST['gia_sp'];
                $this->img_sp = upload($_FILES['img_sp'], './upload_file');
                $this->ctsp = $_POST['ctsp'];
                $this->ma_dm = $_POST['ma_dm']; 
                $this->checkSP();
            }else{
                view('admin/san_pham/them', 'layouts/master2',[
                'arr'=>$load_dm
                ]);
            }    
        }
   
        public function checkSP(){
            if($this->emptyInput_SP()){
                header("location:/admin/san_pham?error= Nhập đủ thông tin");
                return;
            }     
            if($this->SP->SP_tt($this->ma_sp)){
                header("location:/admin/san_pham?error= Mã sản phẩm đã tồn tại");
                return;
            }
            $check = $this->SP->SP_Insert($this->ten_sp,$this->gia_sp,$this->img_sp,$this->ctsp,$this->ma_dm);
            if($check){
                header("location:/admin/san_pham?thongbao=Thêm sản phẩm thành công");
            }else{
                header("location:/admin/san_pham?error=Thêm sản phẩm thất bại");
            }  
        }
        private function emptyInput_SP(){
            if(empty($this->ten_sp || $this->gia_sp || $this->ctsp)){
                return true;
            }else{
                return false;
            }
        }
        // end SP

        // SP_DS
        public function sp_ds(){
            $xuat = $this->SP->SP_selectAll();
            view('admin/san_pham/danh_sach', 'layouts/master2',[
                'arr'=>$xuat
            ]);
        }
        // end SP_DS

        // SP_EDIT
        public function sp_edit(){
            $ma_sp = $_GET['ma_sp'];
            $load_dm = $this->DM->DM_selectAll();
            $select_SP = $this->SP->SP_select_ma_sp($ma_sp);

            view('admin/san_pham/sua', 'layouts/master2',[
                'arr'=>$select_SP,
                'arr1'=>$load_dm
            ]);
            if(isset($_POST['btn'])){
                $this->$ma_sp = $_GET['ma_sp'];
                $this->ten_sp = $_POST['ten_sp'];
                $this->gia_sp = $_POST['gia_sp'];
                $this->ctsp = $_POST['ctsp'];
                $this->ma_dm = $_POST['ma_dm'];
                if($_FILES['img_sp']['name'] === ''){
                    $this->img_sp = '';
                }else{
                    $this->img_sp = upload($_FILES['img_sp'],'./upload_file');
                }
                
                $upL = $this->SP->SP_Upload($this->ten_sp,$this->gia_sp,$this->img_sp,$this->ctsp,$this->ma_dm,$this->$ma_sp);
                if($upL){
                    header("location:/admin/san_pham/edit?ma_sp=$ma_sp&tb=1");
                }else{
                    header("location:/admin/san_pham/edit?ma_sp=$ma_sp&tb=2");
                } 
            } 
        }
        // end SP_EDIT
        // SP_DELETE
        public function sp_delete(){
            $ma_sp = $_GET['ma_sp'];
            $delete_SP= $this->SP->SP_xoa($ma_sp);
            if($delete_SP){
                header("location:/admin/san_pham/danh_sach?tb=1");
            }else{
                header("location:/admin/san_pham/danh_sach?tb=2");
            } 
        }
        // SP_DELETE
// ----IMG---------------------------------------------------------------------------------
        // IMG
        public function img(){
            $load_SP = $this->SP->SP_selectAll();
            if(isset($_POST['btn'])){
                $this->img_sp1 = upload($_FILES['img1'], './upload_img');
                $this->img_sp2 = upload($_FILES['img2'], './upload_img');
                $this->img_sp3 = upload($_FILES['img3'], './upload_img');
                $this->img_sp4 = upload($_FILES['img4'], './upload_img');
                $this->ma_sp = $_POST['ma_sp'];
                $this->checkImg();
            }else{
                view('admin/img/them', 'layouts/master2', [
                    'load_SP'=>$load_SP
                ]);
            }
        }
        public function checkImg(){     
            $check = $this->IMG->IMG_Insert($this->img_sp1,$this->img_sp2,$this->img_sp3,$this->img_sp4,$this->ma_sp);
            if($check){
                header("location:/admin/img?thongbao=Thêm list img thành công");
            }else{
                header("location:/admin/img?error=Thêm list img thất bại");
            }  
        }
        // END IMG
        //IMG DS
        public function img_ds(){
            $xuatImg = $this->IMG->IMG_selectAll();
            view('admin/img/danh_sach', 'layouts/master2',[
                'xuatImg'=>$xuatImg
            ]);
        }
        public function img_edit(){
            $id_img = $_GET['id_img'];
            $load_SP = $this->SP->SP_selectAll();
            $IMG_select_SP = $this->IMG->IMG_select_SP($id_img);
            view('admin/img/sua', 'layouts/master2',[
                'load_sp'=>$load_SP,
                'img_select_sp'=>$IMG_select_SP
            ]);
        }
        //     $id_img = $_GET['id_img'];
        //     $load_SP = $this->SP->SP_selectAll();
        //     $IMG_select_SP = $this->IMG->IMG_select_SP($id_img);

        //     view('admin/img/sua', 'layouts/master2',[
        //         'load_sp'=>$load_SP,
        //         'img_select_sp'=>$IMG_select_SP
        //     ]);
        //     if(isset($_POST['btn'])){
        //         $id_img = $_GET['id_img'];
        //         $this->ma_sp = $_POST['ma_sp'];
        //         if($_FILES['img1']['name'] === ''){
        //             $this->img1 = '';
        //         }else{
        //             $this->img1 = upload($_FILES['img1'],'./upload_img');
        //         }
        //         if($_FILES['img2']['name'] === ''){
        //             $this->img2 = '';
        //         }else{
        //             $this->img2 = upload($_FILES['img2'],'./upload_img');
        //         }
        //         if($_FILES['img3']['name'] === ''){
        //             $this->img3 = '';
        //         }else{
        //             $this->img3 = upload($_FILES['img3'],'./upload_img');
        //         }
        //         if($_FILES['img4']['name'] === ''){
        //             $this->img4 = '';
        //         }else{
        //             $this->img4 = upload($_FILES['img4'],'./upload_img');
        //         }
                
        //         $upL = $this->IMG->IMG_Upload($this->img1,$this->img2,$this->img3,$this->img4,$this->ma_sp,$id_img);
        //         if($upL){
        //             header("location:/admin/img/edit?id_img=$id_img&tb=1");
        //         }else{
        //             header("location:/admin/img/edit?id_img=$id_img&tb=2");
        //         } 
        //     } 
        // }
        // END IMG DS
        public function img_delete(){
            $id_img = $_GET['id_img'];
            $delete_img= $this->IMG->img_xoa($id_img);
            if($delete_img){
                header("location:/admin/img/danh_sach?tb=1");
            }else{
                header("location:/admin/img/danh_sach?tb=2");
            } 
        }
        // IMG DELETE
        // ENG IMG DELETE
// ---THÊM KHÁCH HÀNG----------------------------------------------------------------------------------
        // THÊM KHÁCH HÀNG
        public function kh(){
            $load_lkh = $this->LKH->LKH_selectAll();
            if(isset($_POST['btn'])){
                $this->username= $_POST['username'];
                $this->password = $_POST['pw'];
                $this->fullname = $_POST['fullname'];
                $this->dia_chi = $_POST['dia_chi'];
                $this->email = $_POST['email'];
                $this->ma_loai = $_POST['ma_loai'];
                $this->check_KH();
            }
            view('admin/khach_hang/them', 'layouts/master2',[
                'arr'=>$load_lkh]);
        }

        public function check_KH(){
            if($this->emptyInput_KH()){
                header("location:/admin/khach_hang?error= Nhập đủ thông tin");
                return;
            }     
            if($this->KH->KH_tt($this->username)){
                header("location:/admin/khach_hang?error= Mã khách hàng đã tồn tại");
                return;
            }
            $check = $this->KH->KH_Insert($this->username,$this->password,$this->fullname,$this->dia_chi,$this->email,$this->ma_loai);
            if($check){
                header("location:/admin/khach_hang?thongbao=Thêm khách hàng thành công");
            }else{
                header("location:/admin/khach_hang?error=Thêm khách hàng thất bại");
            }  
        }
        public function emptyInput_KH(){
            if(empty($this->username || $this->password || $this->fullname || $this->dia_chi || $this->email)){
                return true;
            }else{
                return false;
            }
        }
        // END THÊM KHÁCH HÀNG
        //DANH SÁCH KHÁCH HÀNG
        public function kh_ds(){
            $load_kh = $this->KH->KH_selectAll();
            view('admin/khach_hang/danh_sach', 'layouts/master2',[
                'arr'=>$load_kh
            ]);
        }
        // END DANH SÁCH KHÁCH HÀNG
        // EDIT KHÁCH HÀNG
        public function kh_edit(){
            $username = $_GET['username'];
            $load_kh = $this->KH->KH_selectAll();
            $select_KH = $this->KH->KH_select_username($username);
            view('admin/khach_hang/sua', 'layouts/master2',[
                'arr'=>$select_KH,'arr1'=>$load_kh
            ]);
            if(isset($_POST['btn'])){
                $this->$username = $_GET['username'];
                $this->username= $_POST['username'];
                $this->password = $_POST['pw'];
                $this->fullname = $_POST['fullname'];
                $this->dia_chi = $_POST['dia_chi'];
                $this->email = $_POST['email'];
                $this->ma_loai = $_POST['ma_loai'];
                $upL = $this->KH->KH_Upload($this->password,$this->fullname,$this->dia_chi,$this->email,$this->ma_loai,$this->$username);
                if($upL){
                    header("location:/admin/khach_hang/edit?username=$username&tb=1");
                }else{
                    header("location:/admin/khach_hang/edit?username=$username&tb=2");
                } 
            } 
            view('admin/khach_hang/sua', 'layouts/master2'); 
        }
        // END EDIT KHÁCH HÀNG
        // DELETE KHÁCH HÀNG
        public function kh_delete(){
            $username = $_GET['username'];
            $delete_KH = $this->KH->KH_xoa($username);
            if($delete_KH){
                header("location:/admin/khach_hang/danh_sach?tb=1");
            }else{
                header("location:/admin/khach_hang/danh_sach?tb=2");
            } 
        }
        // END DELETE KHÁCH HÀNG
        
// ---LOẠI KHÁCH HÀNG----------------------------------------------------------------------------------
        //LOẠI KHÁCH HÀNG
        public function loai_kh(){
            if(isset($_POST['btn'])){
                $this->ma_lkh = $_POST['ma_lkh'];
                $this->ten_lkh = $_POST['ten_lkh'];
                $this->check_LKH();
            }else{
            view('admin/loai_kh/them', 'layouts/master2'); 
            }
        }

        public function check_LKH(){
            if($this->empty_LKH()){
                header("location:/admin/loai_kh?error= Nhập đủ thông tin");
                return;
            }  
            if($this->LKH->LKH_tt($this->ma_lkh)){
                header("location:/admin/loai_kh?error=Loại khách hàng đã tồn tại");
                return;
            }  
            $check_LKH = $this->LKH->Insert_LKH($this->ma_lkh,$this->ten_lkh);
            if($check_LKH){
                header("location:/admin/loai_kh?thongbao=Thêm loại khách hàng thành công");
            }else{
                header("location:/admin/loai_kh?error=Thêm loại khách hàng thất bại");
            } 
        }

        public function empty_LKH(){
            if(empty($this->ten_lkh)){
                return true;
            }else{
                return false;
            }
        }
        // END LOẠI KHÁCH HÀNG
        //LOẠI KHÁCH HÀNG DS
        public function loai_kh_DS(){
            $xuat = $this->LKH->LKH_selectAll();
            view('admin/loai_kh/danh_sach', 'layouts/master2',[
                'load_lkh'=>$xuat
            ]); 
        }
        public function loai_kh_edit(){
            $ma_lkh = $_GET['ma_lkh'];
            $update_LKH = $this->LKH->LKH_select_ma_lkh($ma_lkh);
            view('admin/loai_kh/sua', 'layouts/master2',[
                'arr'=> $update_LKH
            ]); 
            if(isset($_POST['btn'])){
                $this->$ma_lkh = $_GET['ma_lkh'];
                $this->ma_lkh = $_POST['ma_lkh'];
                $this->ten_lkh = $_POST['ten_lkh'];
                $up_LKH = $this->LKH->LKH_Upload($this->ten_lkh,$this->$ma_lkh);
                if($up_LKH){
                    header("location:/admin/loai_kh/edit?ma_lkh=$ma_lkh&tb=1");
                }else{
                    header("location:/admin/loai_kh/edit?ma_lkh=$ma_lkh&tb=2");
                }  
            }
        }
        // END LOẠI KHÁCH HÀNG DS
        // LOẠI KHÁCH HÀNG XOÁ
        public function loai_kh_delete(){
            $ma_lkh = $_GET['ma_lkh'];
            $delete_LKH = $this->LKH->LKH_xoa($ma_lkh);
            if($delete_LKH){
                header("location:/admin/loai_kh/danh_sach?tb=1");
            }else{
                header("location:/admin/loai_kh/danh_sach?tb=2");
            } 
        }
        // END LOẠI KHÁCH HÀNG XOÁ
// ---ĐƠN HÀNG------------------------------------------------------------------------------------
        public function dh(){
            $xuatDH = $this->DH->DH_selectAll();
            view('admin/don_hang/danh_sach', 'layouts/master2',[
                'arr'=>$xuatDH
            ]);
        }
        public function dh_ct(){
            $this->ma_hd = $_GET['ma_hd'];
            $CTDH = $this->DH->CTDH_select_maHD($this->ma_hd);
            view('admin/don_hang/chi_tiet_dh', 'layouts/master2', [
                'arrCT'=>$CTDH
            ]); 
        }
// -------------------------------------------------------------------------------------
    }
?>