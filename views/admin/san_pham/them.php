<div class="container">
<h1>THÊM SẢN PHẨM</h1>
<form action="#" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <labe><h5>Tên sản phẩm</h5></label>
      <input type="text" name="ten_sp" class="form-control" placeholder="Tên sản phẩm">
    </div>
    <div class="form-group">
      <labe><h5>Giá sản phẩm</h5></label>
      <input type="number" name="gia_sp" class="form-control" placeholder="Giá sản phẩm">
    </div>
    <div class="form-group">
      <labe><h5>Hình sản phẩm</h5></label>
      <input type="file" name="img_sp" class="form-control">
    </div>
    <div class="form-group">
      <labe><h5>Chi tiết sản phẩm</h5></label>
      <input type="text" name="ctsp" class="form-control" placeholder="Chi tiết sản phẩm">
    </div>
    <div class="form-group">
      <labe><h5>Mã danh mục</h5></label>
      <!-- <input type="text" name="ma_dm" class="form-control"> -->
      <select name="ma_dm" class="form-control" id="">
      <?php foreach($data['arr'] as $key):?>
        <option value="<?=$key['ma_dm']?>"><?=$key['ten_dm']?></option>
      <?php endforeach ; ?>
      </select>
    </div>
    <div class="form-group">
      <input type="submit" name="btn" class="btn btn-primary" value="Thêm">
      <a href="/admin/san_pham/danh_sach" class="btn btn-primary" >Danh Sách</a>
    </div>
</form>
    <p><?=(isset($_GET['error'])?$_GET['error']:'')?></p>
    <p><?=(isset($_GET['thongbao'])?$_GET['thongbao']:'')?></p>
    <p><?=(isset($_GET['thongbao'])?'<script>cho("'.$_GET['thongbao'].'");</script>':'')?></p>
</div>