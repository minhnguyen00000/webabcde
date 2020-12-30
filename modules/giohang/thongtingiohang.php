<div class="content_top">
  <div class="row">
    <div class="col-md-9">
      <h1 class="page-header">
      Quản Lý Đơn Đặt Hàng
      </h1>
    </div>
    <form class="form-inline my-2 my-lg-0 mr-lg-2" action="" method="post">
      <div class="input-group">
        <select class="form-group" id="tinhtrangf" name="tinhtrangt">
          <option value="">Mời bạn chọn...</option>
          <option value="0">Đang chờ xử lý</option>
          <option value="1">Đang vận chuyển</option>
          <option value="2">Đơn hàng đã được gửi</option>
          <option value="3">Hủy đơn hàng</option>
        </select>
        
        <input type="submit" value="Lọc" id="timkiemtinhtrang" name="timkiemtinhtrang">
      </div>
    </form>
    <div class="clear"></div>
    
    
    <div class="clear"></div>
  </div>
  <?php
  if(isset($_SESSION['khachhang'])){
  $khachhang=$_SESSION['khachhang'];
  
  
  $sql = $pdo->prepare('SELECT  makhachhang FROM khachhang WHERE taikhoan=:khachhang');
  $sql->bindParam(':khachhang',$khachhang);
  $sql ->execute();
  $dong=$sql->fetch(PDO::FETCH_ASSOC);
  }
  
  ?>
  <?php
  if (isset($dong['makhachhang'])) {
  # code...
  $query = $pdo->prepare('SELECT * FROM dondathang WHERE makhachhang=:makhachhang');
  $query->bindParam(':makhachhang',$dong['makhachhang']);
  $query ->execute();
  $soddh=$query->rowCount();
  
  // dem so sp
  $page=1;
  if(isset($_GET['page']))
  $page=$_GET['page'];
  $bd=($page-1)*$so1trang;
  if(isset($dong['makhachhang']))
  {
  
  $sql="select * from dondathang where makhachhang=:ma limit $bd,$so1trang";
  $query=$pdo->prepare($sql);
  $query->bindParam('ma',$makhachhang);
  $makhachhang=$dong['makhachhang'];
  }else
  {
  $sql="select * from dondathang order by madondathang desc limit $bd,$so1trang";
  $query=$pdo->prepare($sql);
  }
  
  $query->execute();
  
  $i=0;
  foreach ($query as $row_dong) {
  $i++;
  ?>
  
  
  
  
  
  
  
  <div class="card-body table-responsive">
    <table class="table table-striped table-borderless">
      <tr>
        <td><b>STT</b> <?php echo  $i ?></td>
        <td><b>Trạng thái:</b> <?php if ($row_dong['tinhtrang'] == 0): ?>
          <button class="btn btn-xs btn-primary">Đang chờ xử lý</button>
          
          <?php endif ?>
          <?php if ($row_dong['tinhtrang'] == 1): ?>
          <button class="btn btn-xs btn-success">Đang vận chuyển</button>
          
          <?php endif ?>
          <?php if ($row_dong['tinhtrang'] == 2): ?>
          <button class="btn btn-xs btn-info">Đơn hàng đã được gửi</button>
          
          <?php endif ?>
          <?php if ($row_dong['tinhtrang'] == 3): ?>
          <button class="btn btn-xs btn-danger">Hủy đơn hàng</button>
          
          <?php endif ?>
          <td><b>Ngày tạo:</b> <?php echo  $row_dong['ngaytao'] ?></td>
          <td>Quản lý</td>
        </tr>
        <tr>
          
          <td><b>Tên sản phẩm:</b> </td>
          <td><b>Số lượng:</b> </td>
          <td><b>Đơn giá:</b> </td>
          <td>
            <?php if ($row_dong['tinhtrang'] == 0): ?>
            <a href="modules/giohang/xulydonhang.php?id=<?php echo $row_dong['madondathang'] ?> " class="btn btn-xs btn-danger">Hủy đơn hàng.</a>
            <?php endif ?>
            <?php if ($row_dong['tinhtrang'] == 3): ?>
            <button>Đơn đặt hàng đã hủy bỏ!</button>
            <?php endif ?>
            <?php
            if($row_dong['tinhtrang'] != 3 && $row_dong['tinhtrang'] != 0)
            echo "<button>Đơn đặt hàng đã đã được duyệt không thể hủy!</button>"
            ?>
          </td>
          <?php
          if (isset($row_dong['madondathang'])){
          # code...
          $query_ct_ddh = $pdo->prepare('SELECT * FROM ct_dondathang WHERE madondathang=:madondathang');
          $query_ct_ddh->bindParam(':madondathang',$row_dong['madondathang']);
          $query_ct_ddh ->execute();
          
          foreach ($query_ct_ddh as $row_ct_ddh) {
          
          ?>
          <?php
          if (isset($row_ct_ddh['masanpham'])) {
          # code...
          
          $query_masp = $pdo->prepare('SELECT * FROM sanpham WHERE masanpham=:masanpham');
          $query_masp->bindParam(':masanpham',$row_ct_ddh['masanpham']);
          $query_masp ->execute();
          
          foreach ($query_masp as $row_ct_sp) {
          
          ?>
          
        </tr>
        <tr>
          
          <td><?php echo  $row_ct_sp['tensanpham'] ?></td>
          <td><?php echo  $row_ct_ddh['soluong'] ?></td>
          <td><?php echo  $row_ct_sp['giaban'] ?></td>
          <td>
            <!-- <?php if($row_dong['tinhtrang'] == 1): ?>
            <button>Đơn đặt hàng đã xử lý thành công!</button>
            <?php endif ?>
            <?php if ($row_dong['tinhtrang'] == 2): ?>
            <button>Đơn đặt hàng đã xử lý thành công!</button>
            <?php endif ?> -->
            
            
          </td>
          <?php } } ?>
          <?php } } ?>
          
        </tr>
        <tr>
          <td  colspan="2"><button type="button" class="btn btn-info">Tổng tiền</button></td>
          <td><button type="button" class="btn btn-info"><?php echo  ($row_ct_ddh['soluong'])*$row_ct_sp['giaban'] ?>VND</button></td>
          
        </tr>
        <?php } } ?>
        
        
      </table>
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <?php
          $sotrang=ceil($soddh/$so1trang);
          if($sotrang>1)
          {
          for($i=1;$i<=$sotrang;$i++)
          if(isset($dondathang))
          {
          if($page==$i)
          echo '<li class="page-item"><a class="page-link">'.$i.'</a></li>';
          else
          echo '<li class="page-item"><a class="page-link" href="index.php?ac=thongtingiohang&madondathang='.$madondathang.'&page='.$i.'">'.$i.'</a></li>';
          }
          else
          {
          if($page==$i)
          echo '<li class="page-item"><a class="page-link">'.$i.'</a></li>';
          else
          echo '<li class="page-item"><a class="page-link" href="index.php?ac=thongtingiohang&page='.$i.'">'.$i.'</a></li>';
          
          }
          
          
          }
          ?>
        </ul>
      </nav>
    </div>
    <!-- <div class="content_top">
      <div class="heading">
        <h3>Đơn đặt hàng</h3>
      </div>
      <div class="see">
        <form class="form-inline my-3 my-lg-0 mr-lg-3" action="" method="post">
          <div class="input-group">
            
            <select class="form-control" id="timkiemddhf" name="timkiemddht">
              <option id="trangthai"  value="0">Đang Chờ Xử Lý</option>
              <option id="trangthai"  value="1">Đang Vận Chuyển</option>
              <option id="trangthai"  value="2">Hủy Đơn Hàng</option>
            </select>
            <input type="submit" value="Tìm kiếm" id="timkiemddhbtn" name="timkiemddh">
            
            
          </div>
        </form>
      </div>
      
      <div class="clear"></div>
      
    </div>
    <?php
    if(isset($_SESSION['users'])){
    $users=$_SESSION['users'];
    
    
    $sql = $pdo->prepare('SELECT  mauser FROM users WHERE taikhoan=:users');
    $sql->bindParam(':users',$users);
    $sql ->execute();
    $dong=$sql->fetch(PDO::FETCH_ASSOC);
    
    ?>
    <?php
    if (isset($dong['mauser'])) {
    # code...
    $query = $pdo->prepare('SELECT * FROM dondathang WHERE mauser=:mauser');
    $query->bindParam(':mauser',$dong['mauser']);
    $query ->execute();
    $i=0;
    foreach ($query as $row_dong) {
    $i++;
    ?>
    
    <table class="table table-hover">
      <thead>
        <div class="progress">
          <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        
        <tr>
          <th style="width:10%;">STT Đơn hàng</th>
          <th style="width:10%;">STT Sản phẩm</th>
          <th style="width:15%;">Tên sản phẩm</th>
          <th style="width:15%;">Hình ảnh</th>
          <th>Giá</th>
          <th style="width:10%;">Số lượng</th>
          <th>Thành Tiền</th>
          <th>Tình Trạng</th>
          
          
          
        </tr>
      </thead>
      <tbody>
        <?php
        if (isset($row_dong['maddh'])) {
        # code...
        $query_ct_ddh = $pdo->prepare('SELECT * FROM ct_ddh WHERE maddh=:maddh');
        $query_ct_ddh->bindParam(':maddh',$row_dong['maddh']);
        $query_ct_ddh ->execute();
        $ii=0;
        foreach ($query_ct_ddh as $row_ct_ddh) {
        $ii++;
        ?>
        
        <?php
        if (isset($row_ct_ddh['masp'])) {
        # code...
        
        $query_masp = $pdo->prepare('SELECT * FROM sanpham WHERE masp=:masp');
        $query_masp->bindParam(':masp',$row_ct_ddh['masp']);
        $query_masp ->execute();
        
        foreach ($query_masp as $row_sp) {
        
        ?>
        <tr>
          
          <td><?php echo $i ?></td>
          <td><?php echo $ii ?></td>
          <td><?php echo $row_sp['tensp'] ?></td>
          <td><img src="admin/<?php echo $row_sp['hinhanh'] ?>" alt="" width=150px; height=100px></td>
          <td><?php echo $row_sp['giaban'] ?></td>
          <td><?php echo $row_ct_ddh['soluong'] ?></td>
          <td><?php echo ($row_ct_ddh['soluong'])*$row_sp['giaban'] ?></td>
          <td>
            <?php if ($row_ct_ddh['trangthai'] == 0): ?>
            <button  class="btn btn-xs btn-warning">Đang Chờ Xử Lý</button>
            <?php endif ?>
            <?php if ($row_ct_ddh['trangthai'] == 1): ?>
            <button class="btn btn-xs btn-success">Đang Vận Chuyển</button>
            <?php endif ?>
            <?php if ($row_ct_ddh['trangthai'] == 2): ?>
            <button class="btn btn-xs btn-danger">Hủy Đơn Hàng</button>
            <?php endif ?>
            
            
            
          </td>
          
          
          <?php } }?>
          
          <?php } }?>
          <?php } }?>
        </tr>
        
      </tbody>
    </table>
    <?php }  ?> -->