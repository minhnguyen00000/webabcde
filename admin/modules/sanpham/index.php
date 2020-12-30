<script type="text/javascript">
function deleteCat(id)
{
  an=confirm("Bạn có chắc muốn xóa không?");
  if(an)
  {
    location.href="index.php?mod=sanpham&ac=xoa&id="+id;
  }
  
}
  
</script>



          <div class="row">
            <div class="col-md-12">
              <div class="card card-table">
                <div class="row">
                  <div class="col-md-7">
                  <h1 class="page-header">
                    Quản lý Sản Phẩm
                    <a href="index.php?mod=sanpham&ac=them" class="btn btn-danger">Thêm Mới</a>

                  </h1>
                   
                </div>
                  
               


                <form class="form-inline my-2 my-lg-0 mr-lg-2" action="" method="post">
                  <div class="input-group">
                    <input  type="text" id="timkiemf" name="timkiemt" placeholder="Tìm kiếm...">
                    <input type="submit" value="Tìm kiếm" id="timkiembtn" name="timkiem">
                  </div>
                </form>


                  <form class="form-inline my-2 my-lg-0 mr-lg-2" action="" method="post">
                  <div class="input-group">
                    <select class="form-group" id="tinhtrangf" name="tinhtrangt">
                      <option value="">Mời bạn chọn...</option>
                      <option value="0">Còn hàng</option>
                      <option value="1">Tạm hết</option>
                    </select>
                    
                        <input type="submit" value="Lọc" id="timkiemtrangthai" name="timkiemtrangthai">
                  </div>
                </form>
                
              </div>
            </div>

                </div>
              <div class="card-body table-responsive">
                  <table class="table table-striped table-borderless">
                    <thead>
                      <tr>
                        <th style="width:5%;">Mã SP</th>
                        <th style="width:8%;">Tên Sản Phấm</th>
                        <th style="width:5%;">Loại sản phẩm</th>                       
                        <th style="width:5%;">Nhà cung cấp</th>
                        <th style="width:5%;">Quản trị viên</th>
                        
                                              
                        <th style="width:10%;">Mô tả</th>                       
                        <th style="width:10%;">Chi tiết SP</th>
                        <th style="width:5%;">Giá Bán</th>                      
                        <th style="width:15%;">Hình ảnh</th>
                        <th style="width:5%;">Ngày đăng</th>
                        <th style="width:5%;">Tình Trạng</th>
                        

                                              
                        
                        <th style="width:10%;" class="actions">Quản lý</th>

                      </tr>
                    </thead>
                    <tbody class="no-border-x">
                    <?php 

                      

                      $sql="select * from sanpham";
                      $stmt=$pdo->prepare($sql);
                      $stmt->execute();
                      // dem so sp
                      $sosp=$stmt->rowCount();
                      
                      // dem so sp
                      $page=1;
                      if(isset($_GET['page']))
                        $page=$_GET['page'];
                      $bd=($page-1)*$so1trang;
                      if(isset($_GET['masanpham']))
                      {
                        
                        $sql="select * from sanpham where masanpham=:ma limit $bd,$so1trang";
                        $stmt=$pdo->prepare($sql);
                        $stmt->bindParam('ma',$masanpham);
                        $masanpham=$_GET['masanpham'];
                        }else
                        {
                          $sql="select * from sanpham order by masanpham desc limit $bd,$so1trang";
                          $stmt=$pdo->prepare($sql);
                        }
                        
                        $stmt->execute();

                      while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                      {

                    ?>                   
                      <tr>
                        <td><?php echo $row['masanpham']; ?></td>

                        <td><?php echo $row['tensanpham']; ?></td>

                        <td><?php echo $row['maloaisp']; ?></td>

                        <td><?php echo $row['manhacungcap']; ?></td>

                        <td><?php echo $row['manhanvien']; ?></td>

                        


                        <td><textarea><?php echo $row['motatomtat']; ?></textarea></td>

                        <td><textarea><?php echo $row['motachitiet']; ?></textarea></td>

                        <td><?php echo number_format($row['giaban'],0,",",".") ?></td>

                        <td><img src="<?php echo $row['hinh']; ?>" width=150px; height=100px></td>
                        
                        <td><?php echo $row['ngaytao']; ?></td>

                        <td>
                          <?php if ($row['tinhtrang'] == 0): ?>
                            <button  class="btn btn-xs btn-warning">Còn hàng</button>
                          <?php endif ?>
                          <?php if ($row['tinhtrang'] == 1): ?>
                            <button class="btn btn-xs btn-success">Hết hàng</button>
                          <?php endif ?>
                           
                        </td>
                        <td>
                          <a class="btn btn-primary" href="index.php?mod=sanpham&ac=sua&id=<?php echo $row['masanpham']; ?>"">Sửa</a>
                          <a class="btn btn-danger" href="#" onclick="deleteCat('<?php echo $row['masanpham']; ?>')">Xóa</a>
                        </td>
                      </tr>
                    <?php } ?>
                    </tbody>


                  </table>

              <!--   phan trang -->

              

                <!--   phan trang -->

                
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                      <?php
                      $sotrang=ceil($sosp/$so1trang);
                      if($sotrang>1)
                      {
                        for($i=1;$i<=$sotrang;$i++)
                        if(isset($sanpham))
                        {
                          if($page==$i)
                            echo '<li class="page-item"><a class="page-link">'.$i.'</a></li>';
                          else  
                            echo '<li class="page-item"><a class="page-link" href="index.php?mod=sanpham&masanpham='.$masanpham.'&page='.$i.'">'.$i.'</a></li>';

                        }
                        else
                        {
                          if($page==$i)
                            echo '<li class="page-item"><a class="page-link">'.$i.'</a></li>';
                          else
                            echo '<li class="page-item"><a class="page-link" href="index.php?mod=sanpham&page='.$i.'">'.$i.'</a></li>';
                        
                        }
                        
                      
                      }
                      ?>
                    </ul>
              </nav>
              </div>

            </div>
          </div>