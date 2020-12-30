<script type="text/javascript">
function deleteCat(id)
{
  an=confirm("Bạn có chắc muốn xóa?");
  if(an)
  {
    location.href="index.php?mod=dondathang&ac=xoa&id="+id;
  }
  
}
  
</script>



<div class="row">
            <div class="col-md-12">
              <div class="card card-table">
                <div class="row">
                  <div class="col-md-7">
                  <h1 class="page-header">
                    Kết quả tìm kiếm
                    
                  </h1>
                </div>



                  <!-- <form class="form-inline my-2 my-lg-0 mr-lg-2" action="" method="post">
                  <div class="input-group">
                    <input  type="text" id="timkiemf" name="timkiemt" placeholder="Tìm kiếm...">
                        <input type="submit" value="Tìm kiếm" id="timkiembtn" name="timkiem">
                  </div>
                </form> -->

                
                
              </div>
            </div>

                </div>
                <div class="card-body table-responsive">
                  <table class="table table-striped table-borderless">
                    <form action="" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
                    <thead>
                      <tr>
                        <th style="width:5%;">Mã DĐH</th>
                        <th style="width:5%;">Khách hàng</th>                       
                        <!-- <th style="width:5%;">Tên Khách hàng</th>
                        <th style="width:5%;">Địa chỉ</th>
                        <th style="width:8%;">SĐT</th>                       
                        
                        <th style="width:10%;">Email</th>           -->             
                        
                        <th style="width:5%;">Tổng tiền</th> 
                        <th style="width:10%;">Ngày Lập</th>
                        <th style="width:1%;">Tình trạng</th>
                        
                        
                         
                        
                                        
                        
                        <th style="width:1%;" class="actions">Quản lý</th>
                        <th style="width:15%;">Xử lý đơn đặt hàng</th>

                      </tr>
                    </thead>
                    <tbody class="no-border-x">
                    <?php 

                      

                      if (isset($_POST['timkiemtinhtrang'])) {
                        # code...
                        $tinhtrang = $_POST['tinhtrangt'];
                        $sql="select * from dondathang where tinhtrang=$tinhtrang";
                        $stmt=$pdo->prepare($sql);
                        $stmt->execute();
                      }
                     
                        // dem so sp
                      if ($soloai=$stmt->rowCount()==0) {
                        # code...
                        echo '<div class="alert alert-danger" role="alert">
                          Không có sản phẩm nào được tìm thấy với từ khóa:'.$tinhtrang.
                        '</div>';
                        
                      }else{

                      while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                      {

                    ?>                   
                      <tr>
                        <td><?php echo $row['madondathang']; ?></td>
                        
                        <?php  

                        if (isset($row['makhachhang'])) {
                          # code...
                          $sql = $pdo->prepare('SELECT tenkhachhang FROM khachhang WHERE makhachhang=:makhachhang');
                          $sql->bindParam(':makhachhang',$row['makhachhang']);
                          $sql ->execute();
                          $dong_kh=$sql->fetch(PDO::FETCH_ASSOC);
                        }

                        ?>
                        <td><?php echo $dong_kh['tenkhachhang']; ?></td>

                        

                        <td><?php echo number_format($row['tongtien'],0,",","."); ?></td>
                        <td><?php echo $row['ngaytao']; ?></td>
                        <td>
                          
                          <?php if ($row['tinhtrang'] == 0): ?>
                            <button class="btn btn-xs btn-primary">Đang chờ xử lý</button>
                            
                          <?php endif ?>
                          <?php if ($row['tinhtrang'] == 1): ?>
                            <button class="btn btn-xs btn-success">Đang vận chuyển</button>
                            
                          <?php endif ?>
                          <?php if ($row['tinhtrang'] == 2): ?>
                            <button class="btn btn-xs btn-info">Đơn hàng đã được gửi</button>
                            
                          <?php endif ?>
                          <?php if ($row['tinhtrang'] == 3): ?>
                            <button class="btn btn-xs btn-danger">Hủy đơn hàng</button>
                            
                          <?php endif ?>
                        </td>
                        
                        
                        <td>

                          <a class="btn btn-secondary" href="index.php?mod=dondathang&ac=ct_ddh&id=<?php echo $row['madondathang']; ?>"">Xem chi tiết</a>
                          
                        </td>

                        <td>
                          
                          <?php if ($row['tinhtrang'] == 0): ?>
                            <a href="modules/dondathang/xuly.php?id=<?php echo $row['madondathang'] ?> " class="btn btn-xs btn-light">Đang vận chuyển</a>
                             <a href="modules/dondathang/xulyhuy.php?id=<?php echo $row['madondathang'] ?> " class="btn btn-xs btn-danger">Hủy đơn đặt hàng.</a>
                          <?php endif ?>
                          <?php if ($row['tinhtrang'] == 1): ?>
                            <a href="modules/dondathang/xulyhuy.php?id=<?php echo $row['madondathang'] ?>" class="btn btn-xs btn-light">Đơn hàng đã được gửi.</a>
                            <a href="modules/dondathang/xulyhuy.php?id=<?php echo $row['madondathang'] ?>" class="btn btn-xs btn-danger">Hủy đơn đặt hàng.</a>
                          <?php endif ?>
                          <?php if ($row['tinhtrang'] == 2): ?>
                            <button>Đơn đặt hàng đã xử lý thành công!</button>
                          <?php endif ?>
                          <?php if ($row['tinhtrang'] == 3): ?>
                            <button>Đơn đặt hàng đã xử lý thành công!</button>
                            
                          <?php endif ?>
                        </td>

                      </tr>
                    <?php }  }?>
                    </tbody>

                  </form>
                  </table>

              <!--   phan trang -->

              

                <!--   phan trang -->

                </div>
              </div>
            </div>