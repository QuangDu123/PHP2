<div class="container">
    <h1>DANH SÁCH IMG</h1>
    <p><?php if(isset($_GET['tb'])){    
      if($_GET['tb'] == 1){echo "Xoá thành công";}
      else{echo "Xoá thất bại";}};?>
    </p>
    <table class="table table-bordered table-striped">
   <thead>
      <tr>
         <th>Mã Sản Phẩm</th>
         <th>Img 1</th>
         <th>Img 2</th>
         <th>Img 3</th>
         <th>Img 4</th>
         <th>Sửa</th>
         <th>Xoá</th>
   </thead>
   <tbody>
   <?php foreach($data['xuatImg'] as $key):?>
      <tr>
         <td><?=$key['ma_sp']?></td>
         <td><img src="/upload_img/<?=$key['img1']?>" class="hinh_ad"></td>
         <td><img src="/upload_img/<?=$key['img2']?>" class="hinh_ad"></td>
         <td><img src="/upload_img/<?=$key['img3']?>" class="hinh_ad"></td>
         <td><img src="/upload_img/<?=$key['img4']?>" class="hinh_ad"></td>
         <td><a class="btn btn-primary" href="/admin/img/edit?id_img=<?=$key['id_img']?>&ma_sp=<?=$key['ma_sp']?>">Sửa</a></td>
         <td><a class="btn btn-primary" href="/admin/img/delete?id_img=<?=$key['id_img']?>">Xoá</a></td>
      </tr>
      <?php endforeach ; ?>
   </tbody>
</table>
<div class="form-group">
      <!-- <input type="submit" name="btn" class="btn btn-primary" value="Thêm"> -->
      <!-- <a href="/admin/img" class="btn btn-primary" >Danh Sách</a> -->
    </div>
</div>