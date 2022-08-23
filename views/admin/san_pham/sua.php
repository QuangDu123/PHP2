<div class="container">
<h1>EDIT SẢN PHẨM</h1>
  <p><?php if(isset($_GET['tb'])){    
      if($_GET['tb'] == 1){echo "Update sản phẩm thành công";}
      else{echo "Update sản phẩm thất bại";}};?>
    </p>
<form action="#" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <labe><h5>Mã sản phẩm</h5></label>
      <input type="text" name="ma_sp" class="form-control" value="<?=$data['arr']["ma_sp"]?>" readonly>
    </div>
    <div class="form-group">
      <labe><h5>Tên sản phẩm</h5></label>
      <input type="text" name="ten_sp" class="form-control" value="<?=$data['arr']["ten_sp"]?>">
    </div>
    <div class="form-group">
      <labe><h5>Giá sản phẩm</h5></label>
      <input type="number" name="gia_sp" class="form-control" value="<?=$data['arr']["gia_sp"]?>">
    </div>
    <div class="form-group">
      <labe><h5>Hình sản phẩm</h5></label>
      <input type="file" name="img_sp" class="form-control" value="<?=$data['arr']["img_sp"]?>">
      <br>
      <img class="hinh_ad" src="/upload_file/<?=$data['arr']["img_sp"]?>" alt="">
    </div>
    <div class="form-group">
      <labe><h5>Chi tiết sản phẩm</h5></label>
      <input type="text" name="ctsp" class="form-control" value="<?=$data['arr']["ctsp"]?>">
    </div>
    <div class="form-group">
      <labe><h5>Mã danh mục</h5></label>
      <select name="ma_dm" class="form-control" id="">
        <?php foreach($data['arr1'] as $key):?>
          <option <?= $data['arr']['ma_dm'] === $key['ma_dm'] ? 'selected' : ''?>
          value="<?=$key['ma_dm']?>"><?=$key['ten_dm']?></option>
        <?php endforeach ; ?>
      </select>
    </div>
    <div class="form-group">
      <input type="submit" name="btn" class="btn btn-primary" value="Sửa">
      <a href="/admin/san_pham/danh_sach" class="btn btn-primary" >Danh Sách</a>
    </div>
</form>
    <p><?=(isset($_GET['error'])?$_GET['error']:'')?></p>
    <p><?=(isset($_GET['thongbao'])?$_GET['thongbao']:'')?></p>
    <p><?=(isset($_GET['thongbao'])?'<script>cho("'.$_GET['thongbao'].'");</script>':'')?></p>
</div>