<div class="container">
    <h1>DANH SÁCH NHÓM KHÁCH HÀNG</h1>
    <p><?php if(isset($_GET['tb'])){    
      if($_GET['tb'] == 1){echo "Xoá thành công";}
      else{echo "Xoá thất bại";}};?>
    </p>
    <table class="table table-bordered table-striped">
   <thead>
      <tr>
         <th>Mã nhóm khách hàng</th>
         <th>Tên nhóm khách hàng</th>
         <th>Sửa</th>
         <th>Xoá</th>
      </tr>
   </thead>
  
   <tbody>
   <?php foreach($data['load_lkh'] as $key):?>
      <tr>
         <td><?=$key['ma_loai']?></td>
         <td><?=$key['ten_loai']?></td>
         <td><a class="btn btn-primary" href="/admin/loai_kh/edit?ma_lkh=<?=$key['ma_loai']?>">Sửa</a></td>
         <td><a class="btn btn-primary" href="/admin/loai_kh/delete?ma_lkh=<?=$key['ma_loai']?>">Xoá</a></td>
      </tr>
      <?php endforeach ; ?>
   </tbody>
</table>
    
<div class="form-group">
      <!-- <input type="submit" name="btn" class="btn btn-primary" value="Thêm"> -->
      <!-- <a href="/admin/danh_muc" class="btn btn-primary" >Danh Sách</a> -->
    </div>
</div>