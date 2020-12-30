<?php 
session_start();
include('../config/config.php');

if(isset($_POST['btnSubmit']))
  {
    
    $sql="select count(*) from nhanvien where taikhoan=:taikhoan and matkhau=md5(:matkhau) and tinhtrang=0";
    $stmt=$pdo->prepare($sql);
    $para=array("taikhoan"=>$_POST['taikhoan'],"matkhau"=>$_POST['matkhau']);
    $stmt->execute($para);
    
    if($stmt->fetchColumn(0)>0)
    {
      $_SESSION['nhanvien']=$_POST['taikhoan'];
      
      header('location:index.php');
    }

    $error = 'Đăng Nhập không thành công';
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Đăng Nhập</title>
  <!-- Bootstrap core CSS-->
  <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="public/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Đăng Nhập</div>
      <div class="card-body">

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
       
        <form id="form" action="dangnhap.php" method="post">

            
        
          <div class="form-group">
            <label for="taikhoan">Tài Khoản</label>
            <input class="form-control" id="taikhoan" type="text"  placeholder="Nhập tài khoản" name="taikhoan">
          </div>
          <div class="form-group">
            <label for="matkhau">Mật Khẩu</label>
            <input class="form-control" id="matkhau" type="password" placeholder="Nhập mật khẩu" name="matkhau">
          </div>
          
          <input class="btn btn-primary btn-block" name="btnSubmit"  type="submit" value="Đăng nhập">
          
        </form>
        
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../public/vendor/jquery/jquery.min.js"></script>
  <script src="../public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../public/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>