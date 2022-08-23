<div class="container">
    <h1>DANH SÁCH ĐƠN HÀNG</h1>
    <table class="table table-bordered table-striped">
   <thead>
      <tr>
         <th>Mã hoá đơn</th>
         <th>Ngày tạo hoá đơn</th>
         <th>Username</th>
         <th>Chi tiết</th>
   </thead>
   <tbody>
      <?php foreach($data['arr'] as $key):?>
      <tr>
         <td><?=$key['ma_hd']?></td>
         <td><?=$key['ngay_tao_hd']?></td>
         <td><?=$key['username']?></td>
         <td><a class="btn btn-primary" href="/admin/don_hang/ct?ma_hd=<?=$key['ma_hd']?>">Chi tiết</a></td>
      </tr>
      <?php endforeach ; ?>
   </tbody>
</table>
</div>