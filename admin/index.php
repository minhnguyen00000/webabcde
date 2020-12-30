<?php
session_start();
$so1trang=8;
include_once("../config/config.php");
if(!isset($_SESSION['nhanvien'])){
header("location:dangnhap.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Quản trị hệ thống</title>
    <!-- Bootstrap core CSS-->
    <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="public/css/sb-admin.css" rel="stylesheet">
    <c:set var="root" value="${pageContext.request.contextPath}"/>
    <link href="${root}/public/css/mos-style.css" rel='stylesheet' type='text/css' />
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
    // Load the Visualization API and the piechart package.
    google.load('visualization', '1', {'packages': ['columnchart']});
    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChart);
    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it.
    function drawChart() {
    // Create the data table.
    var data = google.visualization.arrayToDataTable([
    ['Country', 'Area(square km)'], ['iPhone X 256GB Gray', 30], ['Samsung Galaxy Note 8', 24], ['Samsung Galaxy S9+ 128GB Hoàng Kim', 20], ['Sony Xperia XA1 Ultra', 16], ['Huawei P20 Pro', 15], ['Asus Zenfone 5 (ZE620KL)', 10], ['iPhone 8 Plus 256GB', 6], ['HTC U Ultra', 5], [' Sony Xperia XZ2', 1], ['OPPO F5 6GB', 1]
    ]);
    //     <c:forEach var="item" items="${listItem}">['${item.name}',${item.value}],</c:forEach>
    // ]);
    // Set chart options
    var options = {
    'title': 'Thống kê top 10 sản phẩm bán chạy nhất',
    is3D: true,
    pieSliceText: 'label',
    tooltip: {showColorCode: true},
    'height': 500
    };
    // Instantiate and draw our chart, passing in some options.
    var chart = new google.visualization.PieChart(document.getElementById('chart'));
    chart.draw(data, options);
    }
    </script>
  </head>
  <body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="index.php">Xin Chào: <?php echo $_SESSION['nhanvien'] . ", " .Date("l F d, Y"); ?></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
          
          
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponentsdanhmuc" data-parent="#exampleAccordion" name="danhmuc">
              <i class="fa fa-fw fa-wrench"></i>
              <span class="nav-link-text">Quản lý danh mục</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseComponentsdanhmuc">
              <li>
                <a href="index.php?mod=loai">Loại sản phẩm</a>
              </li>
              <li>
                <a href="index.php?mod=ncc">Nhà Cung Cấp</a>
              </li>
              <li>
                <a href="index.php?mod=sanpham">Sản Phẩm</a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponentsusers" data-parent="#exampleAccordion" name="nhanvien">
              <i class="fa fa-fw fa-wrench"></i>
              <span class="nav-link-text">Quản lý người dùng</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseComponentsusers">
              <li>
                <a href="index.php?mod=nhanvien">Quản trị viên</a>
              </li>
              <li>
                <a href="index.php?mod=khachhang">Thành viên</a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponentsdodathang" data-parent="#exampleAccordion" name="users">
              <i class="fa fa-fw fa-wrench"></i>
              <span class="nav-link-text">Đơn đặt hàng</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseComponentsdodathang">
              <li>
                <a href="index.php?mod=dondathang">Danh sách đơn đặt hàng</a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponentsthongke" data-parent="#exampleAccordion" name="thongke">
              <i class="fa fa-fw fa-wrench"></i>
              <span class="nav-link-text">Thống kê</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseComponentsthongke">
              <li>
                <a href="index.php?mod=thongkesp">Thống kê sản phẩm bán chạy</a>
              </li>
              <li>
                <a href="index.php?mod=thongkeddh">Thống kê đơn đặt hàng</a>
              </li>
              
            </ul>
          </li>
          
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-envelope"></i>
              <span class="d-lg-none">Messages
                <span class="badge badge-pill badge-primary">12 New</span>
              </span>
              <span class="indicator text-primary d-none d-lg-block">
                <i class="fa fa-fw fa-circle"></i>
              </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="messagesDropdown">
              <h6 class="dropdown-header">New Messages:</h6>
              
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <strong>John Doe</strong>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
              </a>
              
            </li>
            
            <li class="nav-item">
              <?php
              if(isset($_SESSION['nhanvien']))
              {
              // echo "Xin chao ".$_SESSION['users'];
              echo '<a href="dangxuat.php">Đăng Xuất</a>';
              }
              else
              {
              ?>
              <a href="dangnhap.php" class="nav-link" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-fw fa-sign-out"></i>Đăng Xuất</a>
              <?php
              }
              ?>
            </li>
          </ul>
        </div>
      </nav>
      
      <!--                      Content                -->
      <div class="content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="row">
                <div class="col-md-12">
                  <div class="card card-table">
                    
                    <?php
                    $mod="dondathang";
                    if(isset($_REQUEST['mod']))
                    $mod=$_REQUEST['mod'];
                    if($mod=="tintuc")
                    {
                    if(isset($_POST['timkiem']))
                    include("modules/tintuc/timkiem.php");
                    
                    if(isset($_REQUEST['ac']))
                    { if($_REQUEST['ac']=='them')
                    include("modules/tintuc/them.php");
                    if($_REQUEST['ac']=='sua')
                    include("modules/tintuc/sua.php");
                    if($_REQUEST['ac']=='xoa')
                    include("modules/tintuc/xoa.php");
                    
                    }
                    include("modules/tintuc/index.php");
                    }
                    else
                    if($mod=="ncc")
                    {
                    if(isset($_POST['timkiem']))
                    include("modules/ncc/timkiem.php");
                    
                    if(isset($_REQUEST['ac']))
                    {
                    if($_REQUEST['ac']=='them')
                    include("modules/ncc/them.php");
                    if($_REQUEST['ac']=='sua')
                    include("modules/ncc/sua.php");
                    if($_REQUEST['ac']=='xoa')
                    include("modules/ncc/xoa.php");
                    
                    }
                    include("modules/ncc/index.php");
                    }
                    else
                    if($mod=="loai")
                    {
                    if(isset($_POST['timkiem']))
                    include("modules/loai/timkiem.php");
                    
                    if(isset($_REQUEST['ac']))
                    {
                    if($_REQUEST['ac']=='them')
                    include("modules/loai/them.php");
                    if($_REQUEST['ac']=='sua')
                    include("modules/loai/sua.php");
                    if($_REQUEST['ac']=='xoa')
                    include("modules/loai/xoa.php");
                    
                    }
                    include("modules/loai/index.php");
                    }
                    else
                    if($mod=="sanpham")
                    {
                    if(isset($_POST['timkiem']))
                    include("modules/sanpham/timkiem.php");
                    if(isset($_POST['timkiemtrangthai']))
                    include("modules/sanpham/timkiemtrangthai.php");
                    if(isset($_REQUEST['ac']))
                    {
                    if($_REQUEST['ac']=='them')
                    include("modules/sanpham/them.php");
                    if($_REQUEST['ac']=='sua')
                    include("modules/sanpham/sua.php");
                    if($_REQUEST['ac']=='xoa')
                    include("modules/sanpham/xoa.php");
                    
                    }
                    //include("modules/sanpham/index.php");
                    }
                    else
                    if($mod=="lienhe")
                    {
                    if(isset($_POST['timkiem']))
                    include("modules/lienhe/timkiem.php");
                    
                    if(isset($_REQUEST['ac']))
                    {
                    if($_REQUEST['ac']=='them')
                    include("modules/lienhe/them.php");
                    if($_REQUEST['ac']=='sua')
                    include("modules/lienhe/sua.php");
                    if($_REQUEST['ac']=='xoa')
                    include("modules/lienhe/xoa.php");
                    
                    }
                    include("modules/lienhe/index.php");
                    }
                    else
                    if($mod=="nhanvien")
                    {
                    if(isset($_POST['timkiem']))
                    include("modules/nhanvien/timkiem.php");
                    
                    if(isset($_REQUEST['ac']))
                    {
                    if($_REQUEST['ac']=='them')
                    include("modules/nhanvien/them.php");
                    if($_REQUEST['ac']=='sua')
                    include("modules/nhanvien/sua.php");
                    if($_REQUEST['ac']=='xoa')
                    include("modules/nhanvien/xoa.php");
                    
                    
                    }
                    include("modules/nhanvien/index.php");
                    }
                    else
                    if($mod=="khachhang")
                    {
                    if(isset($_POST['timkiem']))
                    include("modules/khachhang/timkiem.php");
                    
                    if(isset($_REQUEST['ac']))
                    {
                    
                    if($_REQUEST['ac']=='sua')
                    include("modules/khachhang/sua.php");
                    if($_REQUEST['ac']=='xoa')
                    include("modules/khachhang/xoa.php");
                    
                    }
                    include("modules/khachhang/index.php");
                    }
                    else
                    if($mod=="dondathang")
                    {
                    if(isset($_POST['timkiem']))
                    include("modules/dondathang/timkiem.php");
                    if(isset($_POST['timkiemtinhtrang']))
                    include("modules/dondathang/timkiemtinhtrang.php");
                    if(isset($_REQUEST['ac']))
                    {
                    if($_REQUEST['ac']=='ct_ddh')
                    include("modules/dondathang/ct_ddh.php");
                    }
                    include("modules/dondathang/dondathang.php");
                    }
                    else
                    if($mod=="thongkesp")
                    {
                    if(isset($_POST['thongkesp']))
                    include("modules/thongke/thongkesp.php");
                    
                    if(isset($_REQUEST['ac']))
                    {
                    
                    if($_REQUEST['ac']=='bieudosp')
                    include("modules/thongke/bieudosp.php");
                    }
                    // if(isset($_REQUEST['ac']))
                    // {
                    //   if($_REQUEST['ac']=='ct_ddh')
                    //   include("modules/dondathang/ct_ddh.php");
                    // }
                    include("modules/thongke/thongkesp.php");
                    }
                    else
                    if($mod=="thongkeddh")
                    {
                    if(isset($_POST['thongkeddh']))
                    include("modules/thongke/thongkeddh.php");
                    
                    if(isset($_REQUEST['ac']))
                    {
                    
                    if($_REQUEST['ac']=='bieudosp')
                    include("modules/thongke/bieudosp.php");
                    }
                    // if(isset($_REQUEST['ac']))
                    // {
                    //   if($_REQUEST['ac']=='ct_ddh')
                    //   include("modules/dondathang/ct_ddh.php");
                    // }
                    include("modules/thongke/thongkeddh.php");
                    }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--                     // Content                -->
        
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        <footer class="sticky-footer">
          <div class="container">
            <div class="text-center">
              <small>Nguyễn Đình Tài</small>
            </div>
          </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fa fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="public/vendor/jquery/jquery.min.js"></script>
        <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="public/vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="public/js/sb-admin.min.js"></script>
      </div>
    </body>
  </html>