<div class="container">
    <h1>DANH SÁCH DANH MỤC</h1>
    <p><?php if(isset($_GET['tb'])){    
      if($_GET['tb'] == 1){echo "Xoá thành công";}
      else{echo "Xoá thất bại";}};?>
    </p>
    <table class="table table-bordered table-striped">
   <thead>
      <tr>
         <th>Mã danh mục</th>
         <th>Tên danh mục</th>
         <th>Sửa</th>
         <th>Xoá</th>
      </tr>
   </thead>
  
   <tbody>
   <?php foreach($data['arr'] as $key):?>
      <tr>
         <td><?=$key['ma_dm']?></td>
         <td><?=$key['ten_dm']?></td>
         <td><a class="btn btn-primary" href="/admin/danh_muc/edit?ma_dm=<?=$key['ma_dm']?>">Sửa</a></td>
         <td><a class="btn btn-primary" href="/admin/danh_muc/delete?ma_dm=<?=$key['ma_dm']?>">Xoá</a></td>
      </tr>
      <?php endforeach ; ?>
   </tbody>
</table>
</div>