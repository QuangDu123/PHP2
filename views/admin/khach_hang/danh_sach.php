<div class="container">
    <h1>DANH SÁCH KHÁCH HÀNG</h1>
    <p><?php if(isset($_GET['tb'])){    
      if($_GET['tb'] == 1){echo "Xoá thành công";}
      else{echo "Xoá thất bại";}};?>
    </p>
    <table class="table table-bordered table-striped">
   <thead>
      <tr>
         <th>Username</th>
         <th>Fullname</th>
         <th>Địa chỉ</th>
         <th>Email</th>
         <th>Loại khách hàng</th>
         <th>Sửa</th>
         <th>Xoá</th>
   </thead>
   <tbody>
   <?php foreach($data['arr'] as $key):?>
      <tr>
         <td><?=$key['username']?></td>
         <td><?=$key['fullname']?></td>
         <td><?=$key['dia_chi']?></td>
         <td><?=$key['email']?></td>
         <td><?=$key['ma_loai']?></td>
         <td><a class="btn btn-primary" href="/admin/khach_hang/edit?username=<?=$key['username']?>">Sửa</a></td>
         <td><a class="btn btn-primary" href="/admin/khach_hang/delete?username=<?=$key['username']?>">Xoá</a></td>
      </tr>
      <?php endforeach ; ?>
   </tbody>
   </tbody>
</table>
</div>