<?php 


if (isset($_POST['btnThem'])) 
{
  # code...
  
  $tenloaisp = $_POST['tenloaisp'];
  

  $query = $pdo->prepare('INSERT INTO loaisp(tenloaisp) VALUES(:tenloaisp)');
       
          
          $query->bindParam(':tenloaisp',$tenloaisp);
         

          $query ->execute();

          $success = "Thêm Mới Thành Công";
}

 ?>
 <div class="row">
  <div class="col-md-12">
    <div class="card card-table">
      <div class="card-header">
        <div class="title">Thêm Loại</div>
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
            <label for="tenloaisp" class="col-sm-2 col-form-label">Tên Loại</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="tenloaisp" placeholder="Nhập Tên Loại" name="tenloaisp" value="">
            </div>
          </div>

          

          

          <div class="form-group">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-secondary btn-lg btn-block" name="btnThem">Luu</button>
            </div>
          </div>  
        </form>
      