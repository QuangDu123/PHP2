<div class="container">
    <h1>CHI TIẾT ĐƠN HÀNG</h1>
    <table class="table table-bordered table-striped">
   <thead>
      <tr>
         <th>Mã CTĐH</th>
         <th>Mã HĐ</th>
         <th>Số lượng</th>
         <th>Mã SP</th>
         <th>Giá SP</th>
   </thead>
   <tbody>
      <?php foreach($data['arrCT'] as $key):?>
      <tr>
         <td><?=$key['ma_hd']?></td>
         <td><?=$key['ma_cthd']?></td>
         <td><?=$key['so_luong']?></td>
         <td><?=$key['ma_sp']?></td>
         <td><?=$key['gia_tung_sp']?></td>
      </tr>
      <?php endforeach ;?>
   </tbody>
</table>
<div class="form-group">
      <a href="/admin/don_hang" class="btn btn-primary">Danh Sách</a>
</div>
</div>