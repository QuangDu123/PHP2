<div class="container">
<h1>EDIT KHÁCH HÀNG</h1>
    <p><?php if(isset($_GET['tb'])){    
      if($_GET['tb'] == 1){echo "Update khách hàng thành công";}
      else{echo "Update khách hàng thất bại";}};?>
    </p>
<form action="#" method="post">
    <div class="form-group">
      <labe><h5>Username</h5></label>
      <input type="text" name="username" class="form-control" value="<?=$data['arr']["username"]?>" readonly>
    </div>
    <div class="form-group">
      <labe><h5>Password</h5></label>
      <input type="password" name="pw" class="form-control" value="<?=$data['arr']["password"]?>">
    </div>
    <div class="form-group">
      <labe><h5>Fullname</h5></label>
      <input type="text" name="fullname" class="form-control" value="<?=$data['arr']["fullname"]?>">
    </div>
    <div class="form-group">
      <labe><h5>Địa chỉ</h5></label>
      <input type="text" name="dia_chi" class="form-control" value="<?=$data['arr']["dia_chi"]?>">
    </div>
    <div class="form-group">
      <labe><h5>Email</h5></label>
      <input type="email" name="email" class="form-control" value="<?=$data['arr']["email"]?>">
    </div>
    <div class="form-group">
      <labe><h5>Mã loại</h5></label>
      <input type="text" name="ma_loai" class="form-control" value="<?=$data['arr']["ma_loai"]?>" >
    </div>
    <div class="form-group">
      <input type="submit" name="btn" class="btn btn-primary" value="Sửa">
      <a href="/admin/khach_hang/danh_sach" class="btn btn-primary">Danh Sách</a>
    </div>
</form>
    <p><?=(isset($_GET['error'])?$_GET['error']:'')?></p>
    <p><?=(isset($_GET['thongbao'])?$_GET['thongbao']:'')?></p>
    <p><?=(isset($_GET['thongbao'])?'<script>cho("'.$_GET['thongbao'].'");</script>':'')?></p>
</div>