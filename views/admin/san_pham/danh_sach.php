<div class="container">
    <h1>DANH SÁCH SẢN PHẨM</h1>
    <p><?php if(isset($_GET['tb'])){    
      if($_GET['tb'] == 1){echo "Xoá thành công";}
      else{echo "Xoá thất bại";}};?>
    </p>
    <table class="table table-bordered table-striped">
   <thead>
      <tr>
         <th>Tên sản phẩm</th>
         <th>Giá sản phẩm</th>
         <th>Img sản phẩm</th>
         <th>Chi tiết sản phẩm</th>
         <th>Mã danh mục</th>
         <th>Sửa</th>
         <th>Xoá</th>
   </thead>
   <tbody>
   <?php foreach($data['arr'] as $key):?>
      <tr>
         <td><?=$key['ten_sp']?></td>
         <td><?=$key['gia_sp']?></td>
         <td><img src="/upload_file/<?=$key['img_sp']?>" class="hinh_ad"></td>
         <td><?=$key['ctsp']?></td>
         <td><?=$key['ma_dm']?></td>
         <td><a class="btn btn-primary" href="/admin/san_pham/edit?ma_sp=<?=$key['ma_sp']?>">Sửa</a></td>
         <td><a class="btn btn-primary" href="/admin/san_pham/delete?ma_sp=<?=$key['ma_sp']?>">Xoá</a></td>
      </tr>
      <?php endforeach ; ?>
   </tbody>
</table>
<div class="form-group">
      <!-- <input type="submit" name="btn" class="btn btn-primary" value="Thêm"> -->
      <a href="/admin/san_pham" class="btn btn-primary" >Danh Sách</a>
    </div>
</div>