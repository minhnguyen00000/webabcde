<?php 


if (isset($_POST['btnThem'])) 
{
  # code...
  $maloaisp       = $_POST['maloaisp'];
  $manhacungcap        = $_POST['manhacungcap'];
  $manhanvien       = $_POST['manhanvien'];
  $tensanpham        = $_POST['tensanpham'];
  $giaban       = $_POST['giaban'];
  $motatomtat         = $_POST['motatomtat'];
  $motachitiet      = $_POST['motachitiet'];
  
  
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
           if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "docx") {
               echo "Chỉ có JPG, JPEG, PNG & GIF được phép";
               $uploadOk = 0;
           }// Nếu không thỏa các điều kiện
           if ($uploadOk == 0) {
               echo "File upload bị lỗi";// Thỏa hết điều kiện
           } else {
               if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $query = $pdo->prepare('INSERT INTO sanpham(tensanpham,maloaisp,manhacungcap,manhanvien,motatomtat,motachitiet,giaban,hinh,tinhtrang,dem) 
                    VALUES(:tensanpham,:maloaisp,:manhacungcap,:manhanvien,:motatomtat,:motachitiet,:giaban,:hinh,:tinhtrang,:dem)');

                    $query->bindParam(':maloaisp',$maloaisp);
                    $query->bindParam(':manhacungcap',$manhacungcap);
                    $query->bindParam(':manhanvien',$manhanvien);
                    $query->bindParam(':tensanpham',$tensanpham);
                    $query->bindParam(':motatomtat',$motatomtat);
                    $query->bindParam(':motachitiet',$motachitiet);
                    $query->bindParam(':giaban',$giaban);      
                    $query->bindParam(':hinh',$target_file);
                    $query->bindParam(':tinhtrang',$tinhtrang);
                    $tinhtrang=0;
                    $query->bindParam(':dem',$dem);
                    $dem=0;

          $query ->execute();

          $success = "Thêm Mới Thành Công";
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

 ?>
 <div class="row">
  <div class="col-md-12">
    <div class="card card-table">
      <div class="card-header">
        <div class="title">Thêm Sản phẩm</div>
      </div>
    </div>
  </div>
</div>
        <?php if (isset($error)): ?>
          <div class="row">
          <div class="col-md-10">
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong>Lỗi</strong> <?php echo $error ?>
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
            <label for="tensanpham" class="col-sm-2 col-form-label">Tên Sản Phẩm</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="tensanpham" placeholder="Nhập Tên Sản Phẩm" name="tensanpham" value="">
            </div>
          </div>

          <div class="form-group row">
            <label for="maloaisp" class="col-sm-2 col-form-label">Loại sản phẩm</label>
            <div class="col-sm-8">
              <select class="form-control" id="maloaisp" placeholder="" name="maloaisp">
                <option value="">Mời bạn chọn...</option>
               
                <?php 
                  $sql="select * from loaisp";
                  $query=$pdo->prepare($sql);
                  $query->execute();
                  while($row=$query->fetch(PDO::FETCH_ASSOC))
                  {
                ?>
                <option value="<?php echo $row['maloaisp']; ?>"><?php echo $row['tenloaisp']; ?></option>

              <?php } ?>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="manhacungcap" class="col-sm-2 col-form-label">Nhà Cung Cấp</label>
            <div class="col-sm-8">
              <select class="form-control" id="manhacungcap" placeholder="" name="manhacungcap">
                <option value="">Mời bạn chọn...</option>
               
                <?php 
                  $sql="select * from nhacungcap";
                  $query=$pdo->prepare($sql);
                  $query->execute();
                  while($row=$query->fetch(PDO::FETCH_ASSOC))
                  {
                ?>
                <option value="<?php echo $row['manhacungcap']; ?>"><?php echo $row['tennhacungcap']; ?></option>

              <?php } ?>
              </select>
            </div>
          </div>



          <div class="form-group row">
            <label for="manhanvien" class="col-sm-2 col-form-label">Nhân viên</label>
            <div class="col-sm-8">
              <select class="form-control" id="manhanvien" placeholder="" name="manhanvien">
                <option value="">Mời bạn chọn...</option>
               
                <?php 
                  $sql="select * from nhanvien where tinhtrang=0";
                  $query=$pdo->prepare($sql);
                  $query->execute();
                  while($row=$query->fetch(PDO::FETCH_ASSOC))
                  {
                ?>
                <option value="<?php echo $row['manhanvien']; ?>"><?php echo $row['tennhanvien']; ?></option>

              <?php } ?>
              </select>
            </div>
          </div>


         <div class="form-group row">
            <label for="motatomtat" class="col-sm-2 col-form-label">Mô tả</label>
            <div class="col-sm-8">
              <textarea class="form-control" id="motatomtat" rows="3" placeholder="Nhập Mô tả" name="motatomtat"></textarea>
            </div>
          </div>

          <div class="form-group row">
            <label for="motachitiet" class="col-sm-2 col-form-label">Chi Tiết Sản Phẩm</label>
            <div class="col-sm-8">
              <textarea class="form-control" id="motachitiet" rows="5" placeholder="Nhập Chi Tiết" name="motachitiet"></textarea>
            </div>
          </div>

          <div class="form-group row">
            <label for="giaban" class="col-sm-2 col-form-label">Giá Bán</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="giaban" placeholder="Nhập Giá Bán" name="giaban" value="">
            </div>
          </div>
          
          <div class="form-group row">
            <label for="hinh" class="col-sm-2 col-form-label">Hình ảnh</label>
            <div class="col-sm-8">
            <input type="file" name="fileToUpload" class="form-control-file" required="">
            </div>
          </div>

          

          

          

          <div class="form-group">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-secondary btn-lg btn-block" name="btnThem">Lưu</button>
            </div>
          </div>  
        </form>
      