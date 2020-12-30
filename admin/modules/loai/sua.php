<?php 


if (isset($_POST['btnSua'])) 
{
  # code...
  $maloaisp = $_GET['id'];
 
  $tenloaisp = $_POST['tenloaisp'];

  $query = $pdo->prepare('UPDATE loaisp SET tenloaisp=:tenloaisp WHERE  maloaisp=:id');
          $query->bindParam(':id',$maloaisp);
          
          $query->bindParam(':tenloaisp',$tenloaisp);

          $query ->execute();

          $success = "Sửa Thành Công";
}

if(isset($_GET['id']))
{
	$query = $pdo->prepare('SELECT * FROM loaisp WHERE  maloaisp=:id');
	$query->bindParam(':id',$_GET['id']);
	$query ->execute();
	$dong=$query->fetch(PDO::FETCH_ASSOC);
}


 ?>
 <div class="row">
  <div class="col-md-12">
    <div class="card card-table">
      <div class="card-header">
        <div class="title">Sửa Loại</div>
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
            <label for="  maloaisp" class="col-sm-2 col-form-label">Mã Loại</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="  maloaisp"  name=" maloaisp" readonly value="<?php echo $dong['maloaisp'] ?>">
            </div>
          </div>
		
		    <!-- <div class="form-group row">
            <label for="mancc" class="col-sm-2 col-form-label">Ma NCC</label>
            <div class="col-sm-8">
              <select class="form-control" id="mancc" placeholder="Ma ncc" name="mancc">
                <option value="">Moi ban chon mancc</option>
               
                <?php 
                  $sql="select * from ncc";
                  $query=$pdo->prepare($sql);
                  $query->execute();
                  while($row=$query->fetch(PDO::FETCH_ASSOC))
                  {
                ?>
                <option value="<?php echo $row['mancc']; ?>" <?php if($row['mancc'] == $_GET['id']) echo 'selected'?>   ><?php echo $row['tenncc']; ?></option>

              <?php } ?>
              </select>
            </div>
          </div> -->
  


          <div class="form-group row">
            <label for="tenloaisp" class="col-sm-2 col-form-label">Tên Loại</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="tenloaisp"  name="tenloaisp" value="<?php echo $dong['tenloaisp'] ?>">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-secondary btn-lg btn-block" name="btnSua">Luu</button>
            </div>
          </div>  
        </form>
      