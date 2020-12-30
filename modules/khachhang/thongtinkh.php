<?php
if(!isset($_SESSION['khachhang']))
{
echo "<script>alert('Bạn chưa đăng nhập vào hệ thống!');
location.href='index.php?ac=dangnhap'
</script>";
}
if(isset($_POST['btncapnhat']))
{
  $makhachhang         = $_POST['makhachhang'];
  $tenkhachhang        = $_POST['tenkhachhang'];
  $taikhoan        = $_POST['taikhoan'];
  $matkhau         = $_POST['matkhau'];
  $diachi          = $_POST['diachi'];
  $sodienthoai       = $_POST['sodienthoai'];
  $email            = $_POST['email'];
if(empty($tenkhachhang))
{
  $error = "Họ và tên không được để trống!";
}
if(empty($taikhoan))
{
  $error = "Tên tài khoản không được để trống";
}
else
{
  if(strlen($taikhoan) < 4 or strlen($taikhoan) > 40)
{
  $error = "Tài khoản phải từ 4-40 kí tự!";
}
}
  if(empty($matkhau))
{
  $error = "Mật khẩu không được để trống";
}
  else
{
  if(strlen($matkhau) < 4 or strlen($matkhau) > 40)
{
  $error = "Mật khẩu phải từ 4-40 kí tự!";
}
}

$query = $pdo->prepare('UPDATE khachhang SET tenkhachhang=:tenkhachhang, taikhoan=:taikhoan, matkhau=md5(:matkhau), diachi=:diachi, sodienthoai=:sodienthoai, email=:email WHERE mathanhvien=:mathanhvien');
$query->bindParam(':mathanhvien',$mathanhvien);
$query->bindParam(':tenkhachhang',$tenkhachhang);
$query->bindParam(':taikhoan',$taikhoan);
$query->bindParam(':matkhau',$matkhau);
$query->bindParam(':diachi',$diachi);
$query->bindParam(':sodienthoai',$sodienthoai);
$query->bindParam(':email',$email);


$query ->execute();
$success = "Cập nhật thành công.";

}

if(isset($_SESSION['khachhang']))
{
  $khachhang=$_SESSION['khachhang'];

  $query = $pdo->prepare('SELECT * FROM khachhang WHERE taikhoan=:khachhang');
  $query->bindParam(':khachhang',$khachhang);
  $query ->execute();

  $dong=$query->fetch(PDO::FETCH_ASSOC);
}
?>
<div class="content_top">
  <div class="heading">
    <h3>Thông tin khách hàng</h3>
  </div>
  <div class="see">
    <p><a href="index.php?ac=thongtingiohang">Quản lý đơn hàng</a></p>
  </div>
  
  <div class="clear"></div>
</div>
<div class="section group">
  <div class="col span_2_of_3">
    <div class="contact-form">
      <?php if (isset($success)): ?>
      <div class="row">
        <div class="col-md-10">
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong><?php echo $success ?></strong>
          </div>
        </div>
      </div>
      <?php endif ?>
      
      <form action="" method="POST" enctype="multipart/form-data">
        
        
        <div class="form-group">
          
          <input type="hidden" class="form-control" id="makhachhang" placeholder="Nhập Họ và Tên" name="makhachhang" value="<?php echo $dong['makhachhang'] ?>">
        </div>
        <div class="form-group">
          <label for="tenkhachhang">Họ và Tên</label>
          <input type="text" class="form-control" id="tenkhachhang" placeholder="Nhập Họ và Tên" name="tenkhachhang" value="<?php echo $dong['tenkhachhang'] ?>">
        </div>
        
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="taikhoan">Tài khoản</label>
            <input type="text" class="form-control" id="taikhoan" placeholder="Nhập Tài khoản" name="taikhoan" value="<?php echo $dong['taikhoan'] ?>" readonly>
          </div>
          <div class="form-group col-md-6">
            <label for="matkhau">Mật khẩu</label>
            <input type="password" class="form-control" id="matkhau" placeholder="Nhập Mật khẩu" name="matkhau" value="<?php echo $dong['matkhau'] ?>">
          </div>
        </div>
        
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="diachi">Địa chỉ</label>
            <input type="text" class="form-control" id="diachi"  placeholder="Nhập Địa chỉ" name="diachi" value="<?php echo $dong['diachi'] ?>">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-7">
            <label for="inputState">Email</label>
            <input type="text" class="form-control" id="email" placeholder="Nhập Email" name="email" value="<?php echo $dong['email'] ?>">
          </div>
          <div class="form-group col-md-5">
            <label for="inputState">Số Điện Thoại</label>
            <input type="text" class="form-control" id="sodienthoai" placeholder="Nhập Số Điện Thoại" name=" sodienthoai" value="<?php echo $dong['sodienthoai'] ?>">
          </div>
        </div>
        <div class="form-row">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-secondary btn-lg btn-block" name="btncapnhat">Cập Nhật</button>
          </div>
        </div>
        <div class="form-group row">
          
          
        </form>
      </div>
    </div>
  </div>