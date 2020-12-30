<?php 


if (isset($_POST['btnluu'])) 
{
  # code...
  $manhanvien         = $_GET['id'];
  $tennhanvien        = $_POST['tennhanvien'];
  $taikhoan        = $_POST['taikhoan'];
  $matkhau         = $_POST['matkhau'];
  $diachi          = $_POST['diachi'];
  $sodienthoai       = $_POST['sodienthoai'];
  $email            = $_POST['email'];
  $tinhtrang            = $_POST['tinhtrang'];

  $pattern = '#^[a-z][a-z0-9\._]{2,31}@[a-z0-9\-]{3,}(\.[a-z]{2,4}){1,2}$#';
  

  if(empty($tennhanvien))
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
  
  if(is_numeric($tennhanvien))
  {
    $error = "Tên không hợp lệ";
  }
  if(!isset($error))
  {
    $query = "SELECT taikhoan FROM nhanvien WHERE taikhoan = :taikhoan";
    $stmt = $pdo -> prepare($query);
    $stmt->bindValue(':taikhoan', $taikhoan);
    $stmt -> execute();

    $admin = $stmt->fetch(PDO::FETCH_ASSOC);

      // header('location:index.php');
    if($admin)
    {
      $error = "Tài khoảng này đã tồn tại!";
      # code...
    }
    else
      {
      

       
       $matkhau = md5($matkhau);// Mã hoá mật khẩu để lưu lên DATABASE
       $query = $pdo->prepare('UPDATE nhanvien SET tennhanvien=:tennhanvien,taikhoan=:taikhoan,matkhau=:matkhau,diachi=:diachi,sodienthoai=:sodienthoai,email=:email,tinhtrang=:tinhtrang WHERE manhanvien=:id');

          $query->bindParam(':id',$manhanvien);
          $query->bindParam(':tennhanvien',$tennhanvien);
          $query->bindParam(':taikhoan',$taikhoan);
          $query->bindParam(':matkhau',$matkhau);
          $query->bindParam(':diachi',$diachi);
          $query->bindParam(':sodienthoai',$sodienthoai);
          $query->bindParam(':email',$email);
          $query->bindParam(':tinhtrang',$tinhtrang);
          
          
                   
          

          $query ->execute();

          $success = "Sửa Thành Công";
          
          
      }
    }
 


  
}

if(isset($_GET['id']))
{
	$query = $pdo->prepare('SELECT * FROM nhanvien WHERE manhanvien=:id');
	$query->bindParam(':id',$_GET['id']);
	$query ->execute();
	$dong=$query->fetch(PDO::FETCH_ASSOC);
}


 ?>
 <div class="row">
  <div class="col-md-12">
    <div class="card card-table">
      <div class="card-header">
        <div class="title">Sửa Admin</div>
      </div>
    </div>
  </div>
</div>
        <?php if (isset($error)): ?>
          <div class="row">
          <div class="col-md-10">
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong>Loi</strong> <?php echo $error ?>
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
        <form action="" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">

          <div class="form-group row">
            <label for="manhanvien" class="col-sm-2 col-form-label">Mã</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="manhanvien"  name="manhanvien" readonly value="<?php echo $dong['manhanvien'] ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="tennhanvien" class="col-sm-2 col-form-label">Họ và Tên</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="tennhanvien"  name="tennhanvien" value="<?php echo $dong['tennhanvien'] ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="taikhoan" class="col-sm-2 col-form-label">Tài khoản</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="taikhoan"  name="taikhoan" value="<?php echo $dong['taikhoan'] ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="matkhau" class="col-sm-2 col-form-label">Mật khẩu</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="matkhau"  name="matkhau" value="<?php echo $dong['matkhau'] ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="diachi" class="col-sm-2 col-form-label">Địa chỉ</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="diachi"  name="diachi" value="<?php echo $dong['diachi'] ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="sodienthoai" class="col-sm-2 col-form-label">SĐT</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="sodienthoai"  name="sodienthoai" value="<?php echo $dong['sodienthoai'] ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="email"  name="email" value="<?php echo $dong['email'] ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="tinhtrang" class="col-sm-2 col-form-label">Tình Trạng</label>
            <div class="col-sm-8">
              <select class="form-control" id="exampleFormControlSelect1" name="tinhtrang">
              <option value="0">Đang hoạt động</option>
              <option value="1">Đang khóa</option>
              
            </select>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-secondary btn-lg btn-block" name="btnluu">Lưu</button>
            </div>
          </div>  
        </form> 
      