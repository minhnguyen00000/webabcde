<div class="row">
  <div class="col-md-12">
    <div class="card card-table">
      <div class="row">
        
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-table">
              <div class="row">
                <div class="col-md-9">
                  <h1 class="page-header">
                  Đơn đặt hàng mới
                  <!-- <a href="index.php?mod=thongke&ac=bieudosp" class="btn btn-danger">Xem biểu đồ</a> -->
                  
                  </h1>
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
                      <!-- <th style="width:1%;">Tình trạng</th> -->
                      
                      
                      
                      
                      
                      
                      <th style="width:1%;" class="actions">Quản lý</th>
                      
                    </tr>
                  </thead>
                  <tbody class="no-border-x">
                    <?php
                    
                    $sql="select * from dondathang";
                    $stmt=$pdo->prepare($sql);
                    $stmt->execute();
                    // dem so sp
                    $sotk=$stmt->rowCount();
                    $page=1;
                    if(isset($_GET['page']))
                    $page=$_GET['page'];
                    $bd=($page-1)*$so1trang;
                    if(isset($_GET['madondathang']))
                    {
                    
                    $sql="select * from dondathang where madondathang=:ma limit $bd,$so1trang";
                    $stmt=$pdo->prepare($sql);
                    $stmt->bindParam('ma',$madondathang);
                    $madondathang=$_GET['madondathang'];
                    }else
                    {
                    $sql="select * from dondathang where tinhtrang=0 order by madondathang desc limit $bd,$so1trang";
                    $stmt=$pdo->prepare($sql);
                    }
                    
                    $stmt->execute();
                    // dem so sp
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
                      <!-- <td>
                        
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
                      </td> -->
                      
                      
                      <td>
                        <a class="btn btn-secondary" href="index.php?mod=dondathang&ac=ct_ddh&id=<?php echo $row['madondathang']; ?>"">Xem chi tiết</a>
                        
                      </td>
                      
                    </tr>
                    <?php } ?>
                  </tbody>
                </form>
              </table>
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                  <?php
                  $sotrang=ceil($sotk/$so1trang);
                  if($sotrang>1)
                  {
                  for($i=1;$i<=$sotrang;$i++)
                  if(isset($madondathang))
                  {
                  if($page==$i)
                  echo '<li class="page-item"><a class="page-link">'.$i.'</a></li>';
                  else
                  echo '<a href="index.php?mod=thongkeddh&madondathang='.$madondathang.'&page='.$i.'">'.$i.'</a>';
                  }
                  else
                  {
                  if($page==$i)
                  echo '<li class="page-item"><a class="page-link">'.$i.'</a></li>';
                  else
                  echo '<a class="page-link" href="index.php?mod=thongkeddh&page='.$i.'">'.$i.'</a>';
                  
                  }
                  }
                  ?>
                </ul>
              </nav>
              
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-table">
              <div class="row">
                <div class="col-md-9">
                  <h1 class="page-header">
                  Đơn đặt hàng đã duyệt
                  <!-- <a href="index.php?mod=thongke&ac=bieudosp" class="btn btn-danger">Xem biểu đồ</a> -->
                  
                  </h1>
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
                      <!-- <th style="width:1%;">Tình trạng</th> -->
                      
                      
                      
                      
                      
                      
                      <th style="width:1%;" class="actions">Quản lý</th>
                      
                    </tr>
                  </thead>
                  <tbody class="no-border-x">
                    <?php
                    
                    $sql="select * from dondathang where tinhtrang = 1 order by madondathang desc";
                    $stmt=$pdo->prepare($sql);
                    $stmt->execute();
                    // dem so sp
                    $soddh=$stmt->rowCount();
                    $page=1;
                    if(isset($_GET['page']))
                    $page=$_GET['page'];
                    $bd=($page-1)*$so1trang;
                    if(isset($_GET['madondathang']))
                    {
                    
                    $sql="select * from dondathang where madondathang=:ma limit $bd,$so1trang";
                    $stmt=$pdo->prepare($sql);
                    $stmt->bindParam('ma',$madondathang);
                    $madondathang=$_GET['madondathang'];
                    }else
                    {
                    $sql="select * from dondathang where tinhtrang=1 order by madondathang desc limit $bd,$so1trang";
                    $stmt=$pdo->prepare($sql);
                    }
                    
                    $stmt->execute();
                    //dem so sp
                    
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
                      <!--  <td>
                        
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
                      </td> -->
                      
                      
                      <td>
                        <a class="btn btn-secondary" href="index.php?mod=dondathang&ac=ct_ddh&id=<?php echo $row['madondathang']; ?>"">Xem chi tiết</a>
                        
                      </td>
                      
                    </tr>
                    <?php } ?>
                  </tbody>
                </form>
              </table>
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                  <?php
                  $sotrang=ceil($sotk/$so1trang);
                  if($sotrang>1)
                  {
                  for($i=1;$i<=$sotrang;$i++)
                  if(isset($madondathang))
                  {
                  if($page==$i)
                  echo '<li class="page-item"><a class="page-link">'.$i.'</a></li>';
                  else
                  echo '<a href="index.php?mod=thongkeddh&madondathang='.$madondathang.'&page='.$i.'">'.$i.'</a>';
                  }
                  else
                  {
                  if($page==$i)
                  echo '<li class="page-item"><a class="page-link">'.$i.'</a></li>';
                  else
                  echo '<a class="page-link" href="index.php?mod=thongkeddh&page='.$i.'">'.$i.'</a>';
                  
                  }
                  }
                  ?>
                </ul>
              </nav>
              
              
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-table">
                <div class="row">
                  <div class="col-md-9">
                    <h1 class="page-header">
                    Đơn đặt hàng đã được gửi
                    <!-- <a href="index.php?mod=thongke&ac=bieudosp" class="btn btn-danger">Xem biểu đồ</a> -->
                    
                    </h1>
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
                        <!--  <th style="width:1%;">Tình trạng</th> -->
                        
                        
                        
                        
                        
                        
                        <th style="width:1%;" class="actions">Quản lý</th>
                        
                      </tr>
                    </thead>
                    <tbody class="no-border-x">
                      <?php
                      
                      $sql="select * from dondathang where tinhtrang=2 order by madondathang desc";
                      $stmt=$pdo->prepare($sql);
                      $stmt->execute();
                      // dem so sp
                      $soddh=$stmt->rowCount();
                      
                      // dem so sp
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
                        <!--  <td>
                          
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
                        -->
                        
                        <td>
                          <a class="btn btn-secondary" href="index.php?mod=dondathang&ac=ct_ddh&id=<?php echo $row['madondathang']; ?>"">Xem chi tiết</a>
                          
                        </td>
                        
                      </tr>
                      <?php } ?>
                    </tbody>
                  </form>
                </table>
                
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-table">
                <div class="row">
                  <div class="col-md-9">
                    <h1 class="page-header">
                    Đơn đặt hàng đã hủy bỏ
                    <!-- <a href="index.php?mod=thongke&ac=bieudosp" class="btn btn-danger">Xem biểu đồ</a> -->
                    
                    </h1>
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
                        <!-- <th style="width:1%;">Tình trạng</th> -->
                        
                        
                        
                        
                        
                        
                        <th style="width:1%;" class="actions">Quản lý</th>
                        
                      </tr>
                    </thead>
                    <tbody class="no-border-x">
                      <?php
                      
                      $sql="select * from dondathang where tinhtrang = 3 order by madondathang desc";
                      $stmt=$pdo->prepare($sql);
                      $stmt->execute();
                      // dem so sp
                      $soddh=$stmt->rowCount();
                      
                      //dem so sp
                      
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
                        <!-- <td>
                          
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
                        -->
                        
                        <td>
                          <a class="btn btn-secondary" href="index.php?mod=dondathang&ac=ct_ddh&id=<?php echo $row['madondathang']; ?>"">Xem chi tiết</a>
                          
                        </td>
                        
                      </tr>
                      <?php } ?>
                    </tbody>
                  </form>
                </table>
                
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>