<?php 


if (isset($_POST['btnluu'])) 
{
  # code...
  $makhachhang         = $_GET['id'];
  $tenkhachhang        = $_POST['tenkhachhang'];
  $taikhoan        = $_POST['taikhoan'];
  $matkhau         = $_POST['matkhau'];
  $diachi          = $_POST['diachi'];
  $sodienthoai       = $_POST['sodienthoai'];
  $email            = $_POST['email'];
  $tinhtrang            = $_POST['tinhtrang'];

  
      

       
       $matkhau = md5($matkhau);// Mã hoá mật khẩu để lưu lên DATABASE
       $query = $pdo->prepare('UPDATE khachhang SET tenkhachhang=:tenkhachhang,taikhoan=:taikhoan,matkhau=:matkhau,diachi=:diachi,sodienthoai=:sodienthoai,email=:email,tinhtrang=:tinhtrang WHERE makhachhang=:id');

          $query->bindParam(':id',$makhachhang);
          $query->bindParam(':tenkhachhang',$tenkhachhang);
          $query->bindParam(':taikhoan',$taikhoan);
          $query->bindParam(':matkhau',$matkhau);
          $query->bindParam(':diachi',$diachi);
          $query->bindParam(':sodienthoai',$sodienthoai);
          $query->bindParam(':email',$email);
          $query->bindParam(':tinhtrang',$tinhtrang);
          
          
                   
          

          $query ->execute();

          $success = "Sửa Thành Công";
          
          
     
 


  
}

if(isset($_GET['id']))
{
	$query = $pdo->prepare('SELECT * FROM khachhang WHERE makhachhang=:id');
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
            <label for="makhachhang" class="col-sm-2 col-form-label">Mã</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="makhachhang"  name="makhachhang" readonly value="<?php echo $dong['makhachhang'] ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="tenkhachhang" class="col-sm-2 col-form-label">Họ và Tên</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="tenkhachhang"  name="tenkhachhang" readonly value="<?php echo $dong['tenkhachhang'] ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="taikhoan" class="col-sm-2 col-form-label">Tài khoản</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="taikhoan"  name="taikhoan" readonly value="<?php echo $dong['taikhoan'] ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="matkhau" class="col-sm-2 col-form-label">Mật khẩu</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="matkhau"  name="matkhau" readonly value="<?php echo $dong['matkhau'] ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="diachi" class="col-sm-2 col-form-label">Địa chỉ</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="diachi"  name="diachi" readonly value="<?php echo $dong['diachi'] ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="sodienthoai" class="col-sm-2 col-form-label">SĐT</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="sodienthoai" readonly  name="sodienthoai" value="<?php echo $dong['sodienthoai'] ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="email"  name="email" readonly value="<?php echo $dong['email'] ?>">
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
      