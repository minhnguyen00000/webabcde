<script type="text/javascript">
function deleteCat(id)
{
  an=confirm("Bạn có chắc muốn xóa?");
  if(an)
  {
    location.href="index.php?mod=nhanvien&ac=xoa&id="+id;
  }
  
}
</script>
<div class="row">
            <div class="col-md-12">
              <div class="card card-table">
               
                <div class="card-header">
                   <div class="row">
                  <div class="col-md-9">
                  <h3 class="page-header">
                   Kết quả tìm kiếm
                    
                  </h3>
                </div>
              </div>
            </div>



                </div>
                <div class="card-body table-responsive">
                  <table class="table table-striped table-borderless">
                    <thead>
                      <tr>
                        <th style="width:5%;">Mã</th>                       
                        
                        <th style="width:5%;">Tên</th>

                        <th style="width:5%;">Tài khoản</th>                       
                        
                        <th style="width:5%;">Mật khẩu</th>

                        <th style="width:5%;">Địa chỉ</th>                       
                        
                        <th style="width:5%;">SĐT</th>

                        <th style="width:5%;">Email</th>                       
                        
                        <th style="width:5%;">Ngày đăng ký</th>
                        
                        <th style="width:5%;">Trạng thái</th>

                                             
                                           
                        
                        <th style="width:10%;" class="actions">Quản lý</th>

                      </tr>
                    </thead>
                    <tbody class="no-border-x">
                    <?php 

                      

                      if (isset($_POST['timkiem'])) {
                        # code...
                        $timkiem = $_POST['timkiemt'];
                        $sql="select * from nhanvien where tennhanvien LIKE '%$timkiem%' or taikhoan LIKE '%$timkiem%'";
                        $stmt=$pdo->prepare($sql);
                        $stmt->execute();
                      }

                     
                        // dem so sp
                      if ($sousers=$stmt->rowCount()==0) {
                        # code...
                        echo '<div class="alert alert-danger" role="alert">
                          Không có sản phẩm nào được tìm thấy với từ khóa:'.$timkiem.
                        '</div>';
                        
                      }else{                  
                      
                      while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                      {

                    ?>                   
                      <tr>
                        <td><?php echo $row['manhanvien']; ?></td>

                        <td><?php echo $row['tennhanvien']; ?></td>

                        <td><?php echo $row['taikhoan']; ?></td>

                        <td><?php echo $row['matkhau']; ?></td>

                        <td><?php echo $row['diachi']; ?></td>

                        <td><?php echo $row['sodienthoai']; ?></td>
                        
                        <td><?php echo $row['email']; ?></td>

                        <td><?php echo $row['ngaytao']; ?></td>

                        <td>
                          <?php if ($row['tinhtrang'] == 0): ?>
                            <button  class="btn btn-xs btn-warning">Đang hoạt động</button>
                          <?php endif ?>
                          <?php if ($row['tinhtrang'] == 1): ?>
                            <button class="btn btn-xs btn-success">Đang khóa</button>
                          <?php endif ?>
                           
                        </td>
                        <td>
                          <a class="btn btn-primary" href="index.php?mod=nhanvien&ac=sua&id=<?php echo $row['manhanvien']; ?>"">Sửa</a>
                          <a class="btn btn-danger" href="#" onclick="deleteCat('<?php echo $row['manhanvien']; ?>')">Xóa</a>
                        </td>
                      </tr>
                    <?php } }?>
                    </tbody>


                  </table>


                  
                </div>
              </div>
            </div>