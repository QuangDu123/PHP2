<div class="container">
<h1>THÊM LIST IMG</h1>
<form action="#" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <labe><h5>Img 1</h5></label>
      <input type="file" name="img1" class="form-control" required>
    </div>
    <div class="form-group">
      <labe><h5>Img 2</h5></label>
      <input type="file" name="img2" class="form-control" required>
    </div>
    <div class="form-group">
      <labe><h5>Img 3</h5></label>
      <input type="file" name="img3" class="form-control" required>
    </div>
    <div class="form-group">
      <labe><h5>Img 4</h5></label>
      <input type="file" name="img4" class="form-control" required>
    </div>
    <div class="form-group">
      <labe><h5>Mã sản phẩm</h5></label>
      <select name="ma_sp" class="form-control">
      <?php foreach($data['load_SP'] as $key):?>
        <option value="<?=$key['ma_sp']?>"><?=$key['ten_sp']?></option>
      <?php endforeach ; ?>
      </select>
    </div>
    <div class="form-group">
      <input type="submit" name="btn" class="btn btn-primary" value="Thêm">
      <a href="/admin/img/danh_sach" class="btn btn-primary" >Danh Sách</a>
    </div>
</form>
    <p><?=(isset($_GET['error'])?$_GET['error']:'')?></p>
    <p><?=(isset($_GET['thongbao'])?$_GET['thongbao']:'')?></p>
    <p><?=(isset($_GET['thongbao'])?'<script>cho("'.$_GET['thongbao'].'");</script>':'')?></p>
</div>