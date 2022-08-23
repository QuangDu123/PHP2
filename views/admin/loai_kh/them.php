<div class="container">
<h1>THÊM NHÓM KHÁCH HÀNG</h1>
<form action="" method="post">
    <div class="form-group">
      <labe><h4>Mã nhóm khách hàng</h4></label>
      <input type="text" name="ma_lkh" class="form-control" placeholder="Mã nhóm khách hàng">
    </div>
    <div class="form-group">
      <labe><h4>Tên nhóm khách hàng</h4></label>
      <input type="text" name="ten_lkh" class="form-control" placeholder="Tên nhóm khách hàng">
    </div>
    <div class="form-group">
      <input type="submit" name="btn" class="btn btn-primary" value="Thêm">
      <a href="/admin/loai_kh/danh_sach" class="btn btn-primary" >Danh Sách</a>
    </div>
</form>
    <p><?=(isset($_GET['error'])?$_GET['error']:'')?></p>
    <p><?=(isset($_GET['thongbao'])?$_GET['thongbao']:'')?></p>
    <p><?=(isset($_GET['thongbao'])?'<script>cho("'.$_GET['thongbao'].'");</script>':'')?></p>
</div>