<?php 


if (isset($_POST['btnSua'])) 
{
  # code...
  $masanpham  = $_GET['id'];
  $maloaisp       = $_POST['maloaisp'];
  $manhacungcap        = $_POST['manhacungcap'];
  $manhanvien       = $_POST['manhanvien'];
  $tensanpham        = $_POST['tensanpham'];
  
  $giaban       = $_POST['giaban'];
  $motatomtat         = $_POST['motatomtat'];
  $motachitiet      = $_POST['motachitiet'];
  $tinhtrang    = $_POST['tinhtrang'];
  
  $target_dir="public/upload/sanpham/";//Thu muc chua file 
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); //đường dẫn + tên file sau khi upload len

  $uploadOk =1; //Bien xac dinh dieu kien co cho upload ko
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION); //lấy phần mở rộng
  //// Kiểm tra có phải là file hình hay ko
      //Chỉ thêm phần này nếu dùng để upload ảnh
      //Bien check de lay thong tin cua file ẢNH
          $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
       if($check) {
           // Kiểm tra file có tồn tại chưa
           if (file_exists($target_file)) {
               echo "File này đã tồn tại.";
               $uploadOk = 0;
           }// Kiểm tra kích thước. Tinh bang Byte
           if ($_FILES["fileToUpload"]["size"] > 500000) {
               echo "File quá lớn";
               $uploadOk = 0;
           }// Kiểm tra định dạng
           if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
               echo "Chỉ có JPG, JPEG, PNG & GIF được phép";
               $uploadOk = 0;
           }// Nếu không thỏa các điều kiện
           if ($uploadOk == 0) {
               echo "File upload bị lỗi";// Thỏa hết điều kiện
           }if (!isset($target_file)) {
               echo "File Hình chưa được chọn!";// Thỏa hết điều kiện
           }else {
               if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                 if($target_file!='')
                  {
                    $query = $pdo->prepare('UPDATE sanpham SET tensanpham=:tensanpham,maloaisp=:maloaisp,manhacungcap=:manhacungcap,manhanvien=:manhanvien,motatomtat=:motatomtat,motachitiet=:motachitiet,giaban=:giaban,hinh=:hinh,tinhtrang=:tinhtrang WHERE masanpham=:id');
                    $query->bindParam(':id',$masanpham);
                    $query->bindParam(':maloaisp',$maloaisp);
                    $query->bindParam(':manhacungcap',$manhacungcap);
                    $query->bindParam(':manhanvien',$manhanvien);
                    $query->bindParam(':tensanpham',$tensanpham);
                    
                    $query->bindParam(':motatomtat',$motatomtat);
                    $query->bindParam(':motachitiet',$motachitiet);
                    $query->bindParam(':giaban',$giaban);      
                    $query->bindParam(':hinh',$target_file);
                    $query->bindParam(':tinhtrang',$tinhtrang);
                    
                  }
                  else
                  {
                    $query = $pdo->prepare('UPDATE sanpham SET tensanpham=:tensanpham,maloaisp=:maloaisp,manhacungcap=:manhacungcap,manhanvien=:manhanvien,motatomtat=:motatomtat,motachitiet=:motachitiet,giaban=:giaban,tinhtrang=:tinhtrang WHERE masanpham=:id');
                    $query->bindParam(':id',$masanpham);
                    $query->bindParam(':maloaisp',$maloaisp);
                    $query->bindParam(':manhacungcap',$manhacungcap);
                    $query->bindParam(':manhanvien',$manhanvien);
                    $query->bindParam(':tensanpham',$tensanpham);
                    
                    $query->bindParam(':motatomtat',$motatomtat);
                    $query->bindParam(':motachitiet',$motachitiet);
                    $query->bindParam(':giaban',$giaban);
                    $query->bindParam(':tinhtrang',$tinhtrang);       
                    
                  }
                  $query ->execute();
                  
                  $success = "Sửa Thành Công";
               } else {
                   echo "Có lỗi khi upload.";
               }
           }
       }
      else
      {
          echo "Không phải file hình";
      }
  
  
}
if(isset($_GET['id']))
{
  
	$query = $pdo->prepare('SELECT * FROM sanpham WHERE masanpham=:id');
	$query->bindParam(':id',$_GET['id']);
	$query ->execute();
	$dong=$query->fetch(PDO::FETCH_ASSOC);
}


 ?>
 <div class="row">
  <div class="col-md-12">
    <div class="card card-table">
      <div class="card-header">
        <div class="title">Sửa Sản Phẩm</div>
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
            <label for="masanpham" class="col-sm-2 col-form-label">Mã Sản Phẩm</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="masanpham" placeholder="" name="masanpham" readonly value="<?php echo $dong['masanpham'] ?>">
            </div>
          </div>

          <div class="form-group row">
            <label for="tensanpham" class="col-sm-2 col-form-label">Tên Sản Phẩm</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="tensanpham" placeholder="" name="tensanpham" value="<?php echo $dong['tensanpham'] ?>">
            </div>
          </div>

		      <div class="form-group row">
            <label for="maloaisp" class="col-sm-2 col-form-label">Loại sản phẩm</label>
            <div class="col-sm-8">
              <select class="form-control" id="maloaisp" placeholder="" name="maloaisp">               
                <?php 
                  $sql="select * from loaisp";
                  $query=$pdo->prepare($sql);
                  $query->execute();
                  while($row_loai=$query->fetch(PDO::FETCH_ASSOC))
                  {
                    if($dong['maloaisp'] == $row_loai['maloaisp'])
                    {
                ?>
                <option selected="selected" value="<?php echo $row_loai['maloaisp']; ?>"><?php echo $row_loai['tenloaisp']; ?></option>

                <?php  
                }else{
                ?>
                <option value="<?php echo $row_loai['maloaisp']; ?>"><?php echo $row_loai['tenloaisp']; ?></option>
                <?php 
                    }
                  }

                ?>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="manhacungcap" class="col-sm-2 col-form-label">Nhà cung cấp</label>
            <div class="col-sm-8">
              <select class="form-control" id="manhacungcap" placeholder="" name="manhacungcap">               
                <?php 
                  $sql="select * from nhacungcap";
                  $query=$pdo->prepare($sql);
                  $query->execute();
                  while($row_mancc=$query->fetch(PDO::FETCH_ASSOC))
                  {
                    if($dong['manhacungcap'] == $row_mancc['manhacungcap'])
                    {
                ?>
                <option selected="selected" value="<?php echo $row_mancc['manhacungcap']; ?>"><?php echo $row_mancc['tennhacungcap']; ?></option>

                <?php  
                }else{
                ?>
                <option value="<?php echo $row_mancc['manhacungcap']; ?>"><?php echo $row_mancc['tennhacungcap']; ?></option>
                <?php 
                    }
                  }

                ?>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="manhanvien" class="col-sm-2 col-form-label">Nhân viên</label>
            <div class="col-sm-8">
              <select class="form-control" id="manhanvien" placeholder="" name="manhanvien">               
                <?php 
                  $sql="select * from nhanvien where tinhtrang=0";
                  $query=$pdo->prepare($sql);
                  $query->execute();
                  while($row_mauser=$query->fetch(PDO::FETCH_ASSOC))
                  {
                    if($dong['manhanvien'] == $row_mauser['manhanvien'])
                    {
                ?>
                <option selected="selected" value="<?php echo $row_mauser['manhanvien']; ?>"><?php echo $row_mauser['tennhanvien']; ?></option>

                <?php  
                }else{
                ?>
                <option value="<?php echo $row_mauser['manhanvien']; ?>"><?php echo $row_mauser['tennhanvien']; ?></option>
                <?php 
                    }
                  }

                ?>
              </select>
            </div>
          </div>
          
          
          
          
          
         <div class="form-group row">
            <label for="motatomtat" class="col-sm-2 col-form-label">Mô tả</label>
            <div class="col-sm-8">
              <textarea class="form-control" id="motatomtat" rows="3" placeholder="Mo ta" name="motatomtat"><?php echo $dong['motatomtat'] ?></textarea>
            </div>
          </div>

          <div class="form-group row">
            <label for="motachitiet" class="col-sm-2 col-form-label">Chi Tiết Sản Phẩm</label>
            <div class="col-sm-8">
              <textarea class="form-control" id="motachitiet" rows="5" placeholder="Mo ta" name="motachitiet"><?php echo $dong['motachitiet'] ?></textarea>
            </div>
          </div>

          <div class="form-group row">
            <label for="giaban" class="col-sm-2 col-form-label">Giá Bán</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="giaban" placeholder="Ten Tin Tuc" name="giaban" value="<?php echo $dong['giaban'] ?>">
            </div>
          </div>

          
          <div class="form-group row">
            <label for="hinh" class="col-sm-2 col-form-label">Hình ảnh</label>
            <div class="col-sm-8">
            <input type="file" name="fileToUpload" class="form-control-file" required="">
            <img src="<?php echo $dong['hinh'] ?>" width=150px; height=100px>
            </div>
          </div>

          

          <div class="form-group row">
            <label for="tinhtrang" class="col-sm-2 col-form-label">Tình Trạng</label>
            <div class="col-sm-8">
              <select class="form-control" id="exampleFormControlSelect1" name="tinhtrang">
              <option value="0">Còn Hàng</option>
              <option value="1">Hết Hàng</option>
              
            </select>
            </div>
          </div>

          

          <div class="form-group">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-secondary btn-lg btn-block" name="btnSua">Lưu</button>
            </div>
          </div>  
        </form>
      