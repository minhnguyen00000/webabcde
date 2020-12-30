<?php 


if (isset($_POST['btnSua'])) 
{
  # code...
  $manhacungcap = $_GET['id'];
  $tennhacungcap = $_POST['tennhacungcap'];
  $diachinhacungcap = $_POST['diachinhacungcap'];
  
 


  $query = $pdo->prepare('UPDATE nhacungcap SET tennhacungcap=:tennhacungcap,diachinhacungcap=:diachinhacungcap WHERE manhacungcap=:id');

  $query->bindParam(':id',$manhacungcap);
  $query->bindParam(':tennhacungcap',$tennhacungcap);
  $query->bindParam(':diachinhacungcap',$diachinhacungcap);
  
          
                   
          

  $query ->execute();

  $success = "Sửa Thành Công";
}

if(isset($_GET['id']))
{
  
	$query = $pdo->prepare('SELECT * FROM nhacungcap WHERE manhacungcap=:id');
	$query->bindParam(':id',$_GET['id']);
	$query ->execute();
	$dong=$query->fetch(PDO::FETCH_ASSOC);
}


 ?>
 <div class="row">
  <div class="col-md-12">
    <div class="card card-table">
      <div class="card-header">
        <div class="title">Sửa Nhà Cung Cấp</div>
      </div>
    </div>
  </div>
</div>
        <?php if (isset($error)): ?>
          <div class="row">
          <div class="col-md-10">
            <div class="alert alert-success">
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
            <label for="manhacungcap" class="col-sm-2 col-form-label">Mã Nhà Cung Cấp</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="manhacungcap" placeholder="Nhập Tên NCC" name="manhacungcap" readonly value="<?php echo $dong['manhacungcap'] ?>">
            </div>
          </div>
		
		    <div class="form-group row">
            <label for="tennhacungcap" class="col-sm-2 col-form-label">Tên Nhà Cung Cấp</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="tennhacungcap" placeholder="Nhập Tên NCC" name="tennhacungcap" value="<?php echo $dong['tennhacungcap'] ?>">
            </div>
          </div>
           <div class="form-group row">
            <label for="diachinhacungcap" class="col-sm-2 col-form-label">Đại Chỉ Nhà Cung Cấp</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="diachinhacungcap" placeholder="Nhập Đại Chỉ Nhà Cung Cấp" name="diachinhacungcap" value="<?php echo $dong['diachinhacungcap'] ?>">
            </div>
          </div>

          

         

          

          

          <div class="form-group">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-secondary btn-lg btn-block" name="btnSua">Lưu</button>
            </div>
          </div>  
        </form>
      