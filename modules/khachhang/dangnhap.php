<?php
if(isset($_POST['btndangnhap']))
{

  $sql="select count(*) from khachhang where taikhoan=:taikhoan and matkhau=md5(:matkhau) and tinhtrang=0";
  $stmt=$pdo->prepare($sql);
  $para=array("taikhoan"=>$_POST['taikhoan'],"matkhau"=>$_POST['matkhau']);
  $stmt->execute($para);
  
if($stmt->fetchColumn(0)>0)
{
  $_SESSION['khachhang']=$_POST['taikhoan'];
  //echo "Dang nhap  thanh cong";
?>
<script language="javascript">
  alert("Đăng nhập thành công");
  location.href="index.php";
</script>
<?php
}
else
  $error = "Đăng nhập không thành công";

}
?>
<div class="content_top">
  <div class="heading">
    <h3>Đăng nhập</h3>
  </div>
  
  <div class="clear"></div>
</div>
<div class="section group">
  <div class="col span_2_of_3">
    <div class="contact-form">
      <?php if (isset($error)): ?>
      <div class="row">
        <div class="col-md-10">
          <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Lỗi</strong><?php echo $error ?>
          </div>
        </div>
      </div>
      <?php endif ?>
      
      <form action="" method="POST" enctype="multipart/form-data">
        
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="taikhoan">Tài khoản</label>
            <input type="text" class="form-control" id="taikhoan" placeholder="Nhập Tài khoản" name="taikhoan">
          </div>
          
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="matkhau">Mật khẩu</label>
            <input type="password" class="form-control" id="matkhau" placeholder="Nhập Mật khẩu" name="matkhau">
          </div>
        </div>
        <div class="form-row">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-secondary btn-lg btn-block" name="btndangnhap">Đăng Nhập</button>
          </div>
        </div>
        
      </form>
    </div>
  </div>
</div>