<div class="container">
<h1>THÊM KHÁCH HÀNG</h1>
<form action="#" method="post">
    <div class="form-group">
      <labe><h5>Username</h5></label>
      <input type="text" name="username" class="form-control" placeholder="Username">
    </div>
    <div class="form-group">
      <labe><h5>Password</h5></label>
      <input type="password" name="pw" class="form-control" placeholder="Password">
    </div>
    <div class="form-group">
      <labe><h5>Họ và tên</h5></label>
      <input type="text" name="fullname" class="form-control" placeholder="Họ và tên">
    </div>
    <div class="form-group">
      <labe><h5>Địa chỉ</h5></label>
      <input type="text" name="dia_chi" class="form-control" placeholder="Địa chỉ">
    </div>
    <div class="form-group">
      <labe><h5>Email</h5></label>
      <input type="email" name="email" class="form-control" placeholder="Email">
    </div>
    <div class="form-group">
      <labe><h5>Loại khách hàng</h5></label>
      <!-- <input type="text" name="loai_kh" class="form-control"> -->
      <select name="ma_loai" class="form-control" id="">
      <?php foreach($data['arr'] as $key):?>
        <option value="<?=$key['ma_loai']?>"><?=$key['ten_loai']?></option>
      <?php endforeach ; ?>
      </select>
    </div>
    
    <div class="form-group">
      <input type="submit" name="btn" class="btn btn-primary" value="Thêm">
      <a href="/admin/khach_hang/danh_sach" class="btn btn-primary">Danh Sách</a>
    </div>
</form>
    <p><?=(isset($_GET['error'])?$_GET['error']:'')?></p>
    <p><?=(isset($_GET['thongbao'])?$_GET['thongbao']:'')?></p>
    <p><?=(isset($_GET['thongbao'])?'<script>cho("'.$_GET['thongbao'].'");</script>':'')?></p>
</div>