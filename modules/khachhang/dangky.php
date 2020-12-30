<?php 
include('config/config.php');


if (isset($_POST['btnThem'])) 
{
  # code...
  
  $tenkhachhang        = $_POST['tenkhachhang'];
  $taikhoan            = $_POST['taikhoan'];
  $matkhau             = $_POST['matkhau'];
  $diachi              = $_POST['diachi'];
  $sodienthoai         = $_POST['sodienthoai'];
  $email               = $_POST['email'];

  $pattern = '#^[a-z][a-z0-9\._]{2,31}@[a-z0-9\-]{3,}(\.[a-z]{2,4}){1,2}$#';
  

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
      $error = "Tài khoản phải từ 4-50 kí tự!";
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
      $error = "Tài khoản phải từ 4-50 kí tự!";
    }
  }

  if(empty($email))
  {
    $error = "email không được để trống";
  }
  if(preg_match($pattern, $email, $match) != 1)
  {
    $error = "Địa chỉ email không hợp lợi!";
  }
  
  if(is_numeric($tenkhachhang))
  {
    $error = "Tên không hợp lệ";
  }
  if(!isset($error))
  {
    $query = "SELECT taikhoan FROM khachhang WHERE taikhoan = :taikhoan";
    $stmt = $pdo -> prepare($query);
    $stmt->bindValue(':taikhoan', $taikhoan);
    $stmt -> execute();

    $admin = $stmt->fetch(PDO::FETCH_ASSOC);

    if($admin)
    {
      $error = "Tài khoảng này đã tồn tại!";
      
    }
    else
      {
      
       $matkhau = md5($matkhau);// Mã hoá mật khẩu để lưu lên DATABASE
        $query = $pdo->prepare('INSERT INTO khachhang(tenkhachhang,taikhoan,matkhau,diachi,sodienthoai,email,tinhtrang) VALUES(:tenkhachhang,:taikhoan,:matkhau,:diachi,:sodienthoai,:email,:tinhtrang)');
       
          $query->bindParam(':tenkhachhang',$tenkhachhang);
          $query->bindParam(':taikhoan',$taikhoan);
          $query->bindParam(':matkhau',$matkhau);
          $query->bindParam(':diachi',$diachi);
          $query->bindParam(':sodienthoai',$sodienthoai);
          $query->bindParam(':email',$email);
          $query->bindParam(':tinhtrang',$tinhtrang);
          $tinhtrang=0;
          
          //Tạo giá trị mặc định của quyền. Mặc đình là thành viên thường

          $query ->execute();
          ?>

          <script language="javascript">
          alert("Đăng ký thành công");
          location.href="index.php?ac=dangnhap";
          </script>
  <?php
      }
  }
  
}
 ?>
  <div class="row">
  <div class="col-md-12">
    <div class="card card-table">
      <div class="card-header">
        <div class="title">Đăng ký</div>
      </div>
    </div>
  </div>
</div>
        <?php if (isset($error)): ?>
          <div class="row">
          <div class="col-md-10">
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong>Lỗi!!!</strong> <?php echo $error ?>
            </div>
          </div>
        </div>
        <?php endif ?>
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
    <label for="tenkhachhang">Họ và Tên</label>
    <input type="text" class="form-control" id="tenkhachhang" placeholder="Nhập Họ và Tên" name="tenkhachhang">
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="taikhoan">Tài khoản</label>
      <input type="text" class="form-control" id="taikhoan" placeholder="Nhập Tài khoản" name="taikhoan">
    </div>
    <div class="form-group col-md-6">
      <label for="matkhau">Mật khẩu</label>
      <input type="password" class="form-control" id="matkhau" placeholder="Nhập Mật khẩu" name="matkhau">
    </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="diachi">Địa chỉ</label>
      <input type="text" class="form-control" id="diachi"  placeholder="Nhập Địa chỉ" name="diachi">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-7">
      <label for="inputState">Email</label>
      <input type="text" class="form-control" id="email" placeholder="Nhập Email" name="email">
    </div>

    <div class="form-group col-md-5">
      <label for="inputState">Số Điện Thoại</label>
      <input type="text" class="form-control" id="sodienthoai" placeholder="Nhập Số Điện Thoại" name="sodienthoai">
    </div>
  </div>
  <div class="form-row">
    <div class="col-sm-12">
      <button type="submit" class="btn btn-secondary btn-lg btn-block" name="btnThem">Đăng ký</button>
    </div>
  </div>  
  
</form>