<!-- <div class="container">
<h1>EDIT LIST IMG</h1>
  <p><?php if(isset($_GET['tb'])){    
    if($_GET['tb'] == 1){echo "Update img thành công";}
    else{echo "Update img thất bại";}};?>
  </p>
<form action="#" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <labe><h5>ID_img</h5></label>
      <input type="text" name="id_img" class="form-control" value="<?=$data['img_select_sp']["id_img"]?>" readonly>
    </div>
    <div class="form-group">
      <labe><h5>Img 1</h5></label>
      <input type="file" name="img1" class="form-control" value="<?=$data['img_select_sp']["img1"]?>">
      <br>
      <img class="hinh_ad" src="/upload_img/<?=$data['img_select_sp']["img1"]?>" alt="">
    </div>
    <div class="form-group">
      <labe><h5>Img 2</h5></label>
      <input type="file" name="img2" class="form-control" value="<?=$data['img_select_sp']["img2"]?>">
      <br>
      <img class="hinh_ad" src="/upload_img/<?=$data['img_select_sp']["img2"]?>" alt="">
    </div>
    <div class="form-group">
      <labe><h5>Img 3</h5></label>
      <input type="file" name="img3" class="form-control" value="<?=$data['img_select_sp']["img3"]?>">
      <br>
      <img class="hinh_ad" src="/upload_img/<?=$data['img_select_sp']["img3"]?>" alt="">
    </div>
    <div class="form-group">
      <labe><h5>Img 4</h5></label>
      <input type="file" name="img4" class="form-control" value="<?=$data['img_select_sp']["img4"]?>">
      <br>
      <img class="hinh_ad" src="/upload_img/<?=$data['img_select_sp']["img4"]?>" alt="">
    </div>
    <div class="form-group">
      <labe><h5>Mã sản phẩm</h5></label>
      <select name="ma_sp" class="form-control" id="">
        <?php foreach($data['load_sp'] as $key):?>
          <option <?= $data['img_select_sp']['ma_sp'] === $key['ma_sp'] ? 'selected' : ''?>
          value="<?=$key['ma_sp']?>"><?=$key['ten_sp']?></option>
        <?php endforeach ; ?>
      </select>
    </div>
    <div class="form-group">
      <input type="submit" name="btn" class="btn btn-primary" value="Sửa">
      <a href="/admin/img/danh_sach" class="btn btn-primary" >Danh Sách</a>
    </div>
</form>
</div> -->
<h1>CHỨC NĂNG ĐANG PHÁT TRIỂN</h1>