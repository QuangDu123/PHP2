<div class="container">
<h1>Thêm Danh Mục</h1>
<form action="" method="post">
    <div class="form-group">
      <labe><h4>Tên danh mục</h4></label>
      <input type="text" name="ten_dm" class="form-control" placeholder="Tên danh mục">
    </div>
    <div class="form-group">
      <input type="submit" name="btn" class="btn btn-primary" value="Thêm">
      <a href="/admin/danh_muc/danh_sach" class="btn btn-primary" >Danh Sách</a>
    </div>
</form>
    <p><?=(isset($_GET['error'])?$_GET['error']:'')?></p>
    <p><?=(isset($_GET['thongbao'])?$_GET['thongbao']:'')?></p>
    <p><?=(isset($_GET['thongbao'])?'<script>cho("'.$_GET['thongbao'].'");</script>':'')?></p>
</div>