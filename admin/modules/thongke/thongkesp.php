<div class="row">
  <div class="col-md-12">
    <div class="card card-table">
      <div class="row">
        <div class="col-md-9">
          <h1 class="page-header">
          Quản lý Thống kê
          <!-- <a href="index.php?mod=thongke&ac=bieudosp" class="btn btn-danger">Xem biểu đồ</a> -->
          
          </h1>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        
        <div class="card-body table-responsive">
          <table class="table table-striped table-borderless">
            <thead>
              <tr>
                <th style="width:5%;">Mã SP</th>
                <th style="width:8%;">Tên Sản Phấm</th>
                <th style="width:5%;">Giá Bán</th>
                <th style="width:5%;">Hình ảnh</th>
                <th style="width:5%;">Ngày đăng</th>
                <th style="width:5%;">Tình Trạng</th>
                <th style="width:5%;">Số lượt mua</th>
              </tr>
            </thead>
            <tbody class="no-border-x">
              <?php
              
              $sql="select * from sanpham ";
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
              $sql="select * from sanpham order by dem desc limit $bd,$so1trang";
              $stmt=$pdo->prepare($sql);
              }
              
              $stmt->execute();
              while($row=$stmt->fetch(PDO::FETCH_ASSOC))
              {
              ?>
              <tr>
                <td><?php echo $row['masanpham']; ?></td>
                <td><?php echo $row['tensanpham']; ?></td>
                
                <td><?php echo number_format($row['giaban'],0,",","."); ?></td>
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
                <td><?php echo $row['dem'] ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
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
                    echo '<li class="page-item"><a class="page-link" href="index.php?mod=thongke&masanpham='.$masanpham.'&page='.$i.'">'.$i.'</a></li>';
                }
                else
                {
                  if($page==$i)
                    echo '<li class="page-item"><a class="page-link">'.$i.'</a></li>';
                  else
                    echo '<li class="page-item"><a class="page-link" href="index.php?mod=thongke&page='.$i.'">'.$i.'</a></li>';
                }
              }
              ?>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>