
<div class="row">
  <div class="col-md-12">
    <div class="card card-table">
      <div class="card-header">
        <h3 class="page-header">
        Chi tiết đơn đặt hàng
        </h3>
      </div>
      <div class="card-body table-responsive">
        <table class="table table-dark">
          <thead>
            <tr>
              <th>Mã ddh</th>
              <th>Tên Sản phẩm</th>
              <th>Hình ảnh</th>
              <th>Số lượng</th>
              <th>Giá bán</th>
              <th>Tổng tiền</th>
              
            </tr>
          </thead>
          <tbody>
            <?php
            
            if(isset($_GET['id']))
            {
            
            $query = $pdo->prepare('SELECT * FROM ct_dondathang WHERE madondathang=:id');
            $query->bindParam(':id',$_GET['id']);
            $query ->execute();
            foreach ($query as $dong_ct_ddh)
            {
            ?>
            <tr>
              <td><?php echo $dong_ct_ddh['madondathang'] ?></td>
              <?php
              if(isset($dong_ct_ddh['masanpham']))
              {
              
              $query = $pdo->prepare('SELECT * FROM sanpham WHERE masanpham=:masanpham');
              $query->bindParam(':masanpham',$dong_ct_ddh['masanpham']);
              $query ->execute();
              $dong_sp=$query->fetch(PDO::FETCH_ASSOC);
              $total = 0;
              $tota=0;
              }
              ?>
              
              <td><?php echo $dong_sp['tensanpham']?></a></td>
              <td><img src="<?php echo $dong_sp['hinh']; ?>" width=150px; height=100px></td>
              <td><?php echo $tota+= $dong_ct_ddh['soluong'] ?></td>
              <td><?php echo number_format($dong_ct_ddh['giaban'],0,",",".") ?></td>
              
              <td><?php 
              
               echo  number_format( $total =$dong_ct_ddh['soluong']*$dong_ct_ddh['giaban'] );

                ?>
              </td>

              
              <?php } } ?>
              
            </tbody>
              <tr>
                <td  colspan="5"><button type="button" class="btn btn-info">Số Lượng</button></td>
        <td><button type="button" class="btn btn-info"><?php  echo 3 ?></button></td>
        
      </tr>
       
          </table>
        </div>
      </div>
    </div>
    
  </div>
  <!--  ------------------------------------------------------------------------ -->
  
  <div class="row">
    <div class="col-md-12">
      <div class="card card-table">
        <div class="card-header">
          <h3 class="page-header">
          Thông tin đơn đặt hàng
          </h3>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-dark">
            <thead>
              <tr>
                <th>Tên khách hàng Nhận</th>
                <th>Đại Chỉ Nhận Hàng</th>
                <th>SĐT người nhận</th>
                <th>Email người nhận</th>
                <th>Ngày Lập</th>
                <th>Tổng tiền</th>
                <th>Tình trạng</th>
                
              </tr>
            </thead>
            <tbody>
              <?php
              if(isset($_GET['id']))
              {
              
              $query = $pdo->prepare('SELECT * FROM dondathang WHERE madondathang=:id');
              $query->bindParam(':id',$_GET['id']);
              $query ->execute();
              $dong_ddh=$query->fetch(PDO::FETCH_ASSOC);
              
              }
              ?>
              <tr>
                
                <?php
                if(isset($dong_ddh['makhachhang']))
                {
                
                $query = $pdo->prepare('SELECT * FROM khachhang WHERE makhachhang=:makhachhang');
                $query->bindParam(':makhachhang',$dong_ddh['makhachhang']);
                $query ->execute();
                $dong_khnhan=$query->fetch(PDO::FETCH_ASSOC);
                
                }
                ?>
                
                <td>
                  <?php if(empty($dong_ddh['tennguoinhan'])){
                  
                  echo $dong_khnhan['tenusers'];
                  }else{
                  echo $dong_ddh['tennguoinhan'];
                  }
                  ?>
                </td>
                <td>
                  <?php if(empty($dong_ddh['diachinguoinhan'])){
                  
                  echo $dong_khnhan['diachi'];
                  }else{
                  echo $dong_ddh['diachinguoinhan'];
                  }
                  ?>
                </td>
                <td>
                  <?php if(empty($dong_ddh['sodienthoainguoinhan'])){
                  
                  echo $dong_khnhan['sodienthoai'];
                  }else{
                  echo $dong_ddh['sodienthoainguoinhan'];
                  }
                  ?>
                </td>
                <td>
                  <?php if(empty($dong_ddh['emailnguoinhan'])){
                  
                  echo $dong_khnhan['email'];
                  }else{
                  echo $dong_ddh['emailnguoinhan'];
                  }
                  ?>
                </td>
                <td><?php echo $dong_ddh['ngaytao'] ?></td>
                <td><?php echo number_format($dong_ddh['tongtien'],0,",",".") ?></td>
                <td>
                  
                  <?php if ($dong_ddh['tinhtrang'] == 0): ?>
                  <button class="btn btn-xs btn-primary">Đang chờ xử lý</button>
                  
                  <?php endif ?>
                  <?php if ($dong_ddh['tinhtrang'] == 1): ?>
                  <button class="btn btn-xs btn-success">Đang vận chuyển</button>
                  
                  <?php endif ?>
                  <?php if ($dong_ddh['tinhtrang'] == 2): ?>
                  <button class="btn btn-xs btn-danger">Hủy đơn hàng</button>
                  
                  <?php endif ?>
                </td>
              </tr>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card card-table">
        <div class="card-header">
          <h3 class="page-header">
          Thông tin khách hàng
          </h3>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-dark">
            <thead>
              <tr>
                
                <th>Tên Khách hàng</th>
                <th>Địa chỉ</th>
                <th>SĐT</th>
                <th>Email</th>
                <th>Ngày Đăng ký</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if(isset($dong_ddh['makhachhang']))
              {
              
              $query = $pdo->prepare('SELECT * FROM khachhang WHERE makhachhang=:makhachhang');
              $query->bindParam(':makhachhang',$dong_ddh['makhachhang']);
              $query ->execute();
              $dong_kh=$query->fetch(PDO::FETCH_ASSOC);
              
              }
              ?>
              <tr>
                
                <td><?php echo $dong_kh['tenkhachhang']?></a></td>
                <td><?php echo $dong_kh['diachi'] ?></td>
                <td><?php echo $dong_kh['sodienthoai'] ?></td>
                <td><?php echo $dong_kh['email'] ?></td>
                <td><?php echo $dong_kh['ngaytao'] ?></td>
              </tr>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!--  ------------------------------------------------------------------------ -->
  <!-- <div class="row">
    <div class="col-md-12">
      <div class="card card-table">
        <div class="card-header">
          <h3 class="page-header">
          Xử lý đơn đặt hàng
          </h3>
        </div>
        <div class="card-body table-responsive"> -->
          <?php
          // if (isset($_POST['btnLuu'])){
          //   $don_dat_hang = $_GET['id'];
          //   $tinhtrang = $_POST['tinhtrang'];
          
          //   if($tinhtrang != 2) {
          //     # code...
          //     $error = "Lỗi xử lý đơn hàng!ádasd";
          //   }else{
          
          //   if($tinhtrang == 2 && $tinhtrang != 2) {
          //     # code...
          //     $error = "Lỗi xử lý đơn hàng!aaaa";
          //   }
          //   }
          //   if(!isset($error))
          //   {
          //   $query = $pdo->prepare('UPDATE don_dat_hang SET tinhtrang=:tinhtrang WHERE maddh=:id');
          //   $query->bindParam(':id',$don_dat_hang);
          //   $query->bindParam(':tinhtrang',$tinhtrang);
          //   $query ->execute();
          //   $success = "Xử lý đơn hàng thành công!";
          //             // upd so luong
          //   $sql = $pdo->prepare('SELECT Ma_san_pham,So_luong FROM ct_ddh WHERE maddh=:id');
          //   $sql->bindParam(':id',$_GET['id']);
          //   $sql ->execute();
          //   foreach ($sql as $row_ss) {
          //     # code...
          //     $Ma_san_pham = intval($row_ss['Ma_san_pham']);
          //     $sql_sp = $pdo->prepare('SELECT * FROM san_pham WHERE Ma_san_pham=:Ma_san_pham');
          //     $sql_sp->bindParam(':Ma_san_pham',$Ma_san_pham);
          //     $sql_sp ->execute();
          //     $dong_sp=$sql_sp->fetch(PDO::FETCH_ASSOC);
          //     $number = $dong_sp['So_luong'] - $row_ss['So_luong'];
          //     $query_sp = $pdo->prepare('UPDATE san_pham SET So_luong=:So_luong,dem=:dem + 1 WHERE Ma_san_pham=:Ma_san_pham');
          //     $query_sp->bindParam(':Ma_san_pham',$Ma_san_pham);
          //     $query_sp->bindParam(':So_luong',$number);
          //     $query_sp->bindParam(':dem',$dong_sp['dem']);
          //     $query_sp ->execute();
          
          //   }
          //   }
          // }
          ?>
          <!-- code xử lý đơn đặt hàng -->
          <!-- <?php
          if (isset($_POST['btnSua'])){
          $ct_dondathang = $_GET['id'];
          $Trang_thai = $_POST['Trang_thai'];
          if ($Trang_thai==0) {
          # code...
          $error = "Đang Xử Lý";
          }else{
          $query = $pdo->prepare('UPDATE ct_dondathang SET Trang_thai=:Trang_thai WHERE madondathang=:id');
          $query->bindParam(':id',$ct_dondathang);
          $query->bindParam(':Trang_thai',$Trang_thai);
          $query ->execute();
          $success = "Xử lý đơn hàng thành công!";
          }
          }
          ?>
          <?php if (isset($error)): ?>
          <div class="row">
            <div class="col-md-10">
              <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Lỗi! :</strong><?php echo $error ?>
              </div>
            </div>
          </div>
          <?php endif ?>
          <?php if (isset($success)): ?>
          <div class="row">
            <div class="col-md-10">
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo $success ?>
              </div>
            </div>
          </div>
          <?php endif ?> -->
          <!-- <form action="" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
            <div class="input-group col-sm-10">
              <select class="custom-select" id="inputGroupSelect02" name="tinhtrang">
                
                <option value="1">Mới</option>
                
                <option value="2">Đã xử lý</option>
                
                
              </select>
              <div class="input-group-append">
                <label class="input-group-text" for="inputGroupSelect02">Trạng thái</label>
              </div>
            </div>
            
            
            <div class="col-sm-10">
              <button type="submit" class="btn btn-secondary btn-lg btn-block" name="btnLuu">Lưu</button>
            </div>
          </form> -->
          <!-- <form action="" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
            <table class="table table-striped table-borderless">
              <thead>
                <tr>
                  
                  
                  
                  <th style="width:10%;">Tên Sản Phẩm</th>
                  <th style="width:15%;">Hình Ảnh</th>
                  
                  
                  
                  <th style="width:15%;" class="actions">Quản lý</th>
                  
                </tr>
              </thead>
              <tbody class="no-border-x">
                <?php
                
                if(isset($_GET['id']))
                {
                
                $query = $pdo->prepare('SELECT * FROM ct_dondathang WHERE madondathang=:id');
                $query->bindParam(':id',$_GET['id']);
                $query ->execute();
                foreach ($query as $dong_ct_ddh)
                {
                
                ?>
                <tr>
                  
                  <?php
                  if(isset($dong_ct_ddh['masanpham']))
                  {
                  
                  $query = $pdo->prepare('SELECT * FROM sanpham WHERE masanpham=:masanpham');
                  $query->bindParam(':masanpham',$dong_ct_ddh['masanpham']);
                  $query ->execute();
                  $dong_sp=$query->fetch(PDO::FETCH_ASSOC);
                  
                  }
                  ?>
                  
                  <td><?php echo $dong_sp['tensanpham']?></a></td>
                  <td><img src="<?php echo $dong_sp['hinh']; ?>" width=150px; height=100px></td>
                  <td>
                    <?php if ($dong_ct_ddh['tinhtrangdonhang']==0): ?>
                    <a href="modules/dondathang/xuly.php?id=<?php echo $dong_ct_ddh['masanpham'] ?> " class="btn btn-xs btn-danger">Chưa xử lý</a>
                    <?php else: ?>
                    <a href="modules/dondathang/xuly.php?id=<?php echo $dong_ct_ddh['masanpham'] ?>" class="btn btn-xs btn-info">Đã xử lý</a>
                    <?php endif ?>
                  </td>
                  
                </tr>
                <?php } }?>
              </tbody>
            </table>
          </form> -->
          
        </div>
      </div>
    </div>
  </div>