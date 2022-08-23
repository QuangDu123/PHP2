<div class="container">
<h1>Edit Danh Mục</h1>
<p><?php if(isset($_GET['tb'])){    
      if($_GET['tb'] == 1){echo "Edit thành công";}
      else{echo "Edit thất bại";}};?>
    </p>
<form action="#" method="post">
    <div class="form-group">
      <labe><h4>Mã danh mục</h4></label>
      <input type="text" name="ma_dm" class="form-control" value="<?=$data['arr']["ma_dm"]?>" readonly>
    </div>
    <div class="form-group">
      <labe><h4>Tên danh mục</h4></label>
      <input type="text" name="ten_dm" class="form-control" value="<?=$data['arr']["ten_dm"]?>">
    </div>
    <div class="form-group">
      <input type="submit" name="btn" class="btn btn-primary" value="Sửa">
      <a href="/admin/danh_muc/danh_sach" class="btn btn-primary" >Danh Sách</a>
    </div>
  </form>
  
</div>