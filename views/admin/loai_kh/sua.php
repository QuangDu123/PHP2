<div class="container">
<h1>EDIT NHÓM KHÁCH HÀNG</h1>
<form action="" method="post">
    <div class="form-group">
      <labe><h4>Mã nhóm khách hàng</h4></label>
      <input type="text" name="ma_lkh" class="form-control" value="<?=$data['arr']["ma_loai"]?>" readonly>
    </div>
    <div class="form-group">
      <labe><h4>Tên nhóm khách hàng</h4></label>
      <input type="text" name="ten_lkh" class="form-control" value="<?=$data['arr']["ten_loai"]?>">
    </div>
    <div class="form-group">
      <input type="submit" name="btn" class="btn btn-primary" value="Sửa">
      <a href="/admin/loai_kh/danh_sach" class="btn btn-primary" >Danh Sách</a>
    </div>
</form>
    <p><?php if(isset($_GET['tb'])){
      if($_GET['tb'] == 1){echo "Update thành công";}
      else{echo "Update thất bại";}};?>
    </p>
        
      
        
      
    
</div>