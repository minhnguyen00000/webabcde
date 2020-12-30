<?php
session_start();
include_once("config/config.php");
$so1trang=8;
?>
<!DOCTYPE HTML>
<head>
	<title>SMART PHONE</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="public/css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="public/css/slider.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="public/css/sb-admin.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="public/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="public/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="public/js/move-top.js"></script>
	<script type="text/javascript" src="public/js/easing.js"></script>
	<script type="text/javascript" src="public/js/startstop-slider.js"></script>
</head>
<body>
	<div class="wrap">
		<div class="header">
			<!-- ssssssssssssssssssssssssssssssssssssss -->
			<div class="headertop_desc">
				
				<div class="account_desc">
					<ul>
						
					</ul>
				</div>
				<div class="clear"></div>
			</div>
			<div class="header_top">
				<div class="logo">
					<a href="index.php"><img src="public/images/asdsadasd.jpg" width="400px" height="150px" alt="" /></a>
				</div>
				
				<div class="cart">
					<?php
						if (!empty($_SESSION['giohangkhachhang']))
						{
							$i=0;
							foreach ($_SESSION['giohangkhachhang'] as $key => $value)
							{
							$i++;
					?>
					
					
					<?php
						}
						
					?><a href="index.php?ac=giohang" class="btn btn-info btn-lg">Giỏ hàng:
						<span class="glyphicon glyphicon-shopping-cart"></span><?php echo $i; ?>
					</a>
					<?php
						}else{
						echo "Hiện tại chưa có sản phẩm nào trong giỏ hàng!";
					}
					?>
				</div>
				<div id="dd" class="wrapper-dropdown-2"><!-- sad - 0 item(s) - $0.00 -->
				
				<ul class="dropdown">
					<?php
					if (!empty($_SESSION['giohangkhachhang']))
					{
						$i=0;
						foreach ($_SESSION['giohangkhachhang'] as $key => $value)
						{
						$i++;
					?>
					<li><?php echo $i ?> - <?php echo $_SESSION['giohangkhachhang'][$key]['tensanpham'] ?> - Số lượng: <?php echo $_SESSION['giohangkhachhang'][$key]['soluong'] ?> - Đơn giá: <?php echo ($_SESSION['giohangkhachhang'][$key]['soluong'])*$_SESSION['giohangkhachhang'][$key]['giaban']; ?></li>
					<?php
						}
						}else{
						echo "Hiện tại chưa có sản phẩm nào trong giỏ hàng!";
					}
					?>
				</ul>
				
			</div>
		</p>
		
		<script type="text/javascript">
		function DropDown(el) {
			this.dd = el;
			this.initEvents();
		}
		DropDown.prototype = {
			initEvents : function() {
				var obj = this;
				obj.dd.on('click', function(event){
					$(this).toggleClass('active');
					event.stopPropagation();
					});
			}
		}
		$(function() {
			var dd = new DropDown( $('#dd') );
			$(document).click(function() {
				// all dropdowns
				$('.wrapper-dropdown-2').removeClass('active');
			});
		});
		</script>
		<div class="clear"></div>
	</div>
	<!-- ssssssssssssssssssssssssssssssssssssss -->
	<div class="header_bottom">
		<div class="menu">
			
			<ul>
				<li><a href="index.php">Trang Chủ</a></li>
				<li><a href="index.php?ac=dienthoai">Điện Thoại</a></li>
				<li><a href="index.php?ac=dangky">Đăng Ký</a></li>
				<li><a href="#">Giỏ hàng</a></li>
				<li><a href="index.php?ac=thongtinkh">Thông tin khách hàng</a></li>
				
				<div class="clear"></div>
			</ul>
		</div>
		<div class="search_box">
			<form action="" method="post" target="_blank">
				<input type="text" id="timkiemf" name="timkiemt" placeholder="Tìm kiếm...">
				<input type="submit" value="" id="timkiembtn" name="timkiem">
			</form>
		</div>
		<div class="clear"></div>
	</div>
	<div class="header_slide">
		
		<!-- ssssssssssssssssssssssssssssssssssssss -->
		
		<div class="header_bottom_right">
			<?php
			$ac="dsdt";
			if(isset($_REQUEST['ac']))
			$ac=$_REQUEST['ac'];
			//if(isset($_POST['timkiem']))
			//include("modules/timkiem/timkiem.php");
			if(isset($_POST['timkiemtinhtrang']))
			include("modules/giohang/timkiemddh.php");
			// if(!isset($_SESSION['users']))
			
			// 	$ac="dangnhap";
			
			switch ($ac)
			{
			case "dienthoai":
			include ("modules/sanpham/dienthoai.php");
			break;
			case "dangnhap":
			include("modules/khachhang/dangnhap.php");
			break;
			case "dangky":
			include("modules/khachhang/dangky.php");
			break;
				case "dangxuat":
				include("modules/khachhang/dangxuat.php");
				break;
				case "dsdt":
				include("modules/sanpham/dsdt.php");
				break;
				case "loai":
				include("modules/loai/loai.php");
				break;
				case "chitiet":
				include("modules/sanpham/chitietsp.php");
				break;
				case "giohang":
				include("modules/giohang/giohang.php");
				break;
				case "thongtinkh":
				include("modules/khachhang/thongtinkh.php");
				break;
				case "themgiohang":
				include("modules/giohang/themgiohang.php");
				break;
				
				case "dondathang":
				include("modules/giohang/dondathang.php");
				break;
				
				case "usersdondathang":
				include("modules/giohang/usersdondathang.php");
				break;
				case "thongtingiohang":
				include("modules/giohang/thongtingiohang.php");
				break;
				
			}
			?>
		</div>
		
	</div>
	<div class="header_bottom_left">
		<div class="categories">
			<ul>
				<h3>Đăng Nhập</h3>
				<?php
				if(isset($_SESSION['khachhang']))
				{
					echo '<div class="dangxuat" style="text-align:center; padding-top: 10px;">
						<button type="button" name="btndangnhap" class="btn btn-primary">Xin chào:'.$_SESSION['khachhang'] . ", " .Date("l F d, Y").'</button></div>';
					echo '<br>
					<a href="index.php?ac=dangxuat">
						<div class="dangxuat" style="text-align:center; padding-top: 10px;"><button type="button" name="btndangnhap" class="btn btn-secondary">Đăng Xuất</button>
					</div>
					</a>';
					
				}
				else
				{
				?>
				<a href="index.php?ac=dangnhap">
					<div class="dangnhap" style="text-align:center; padding-top: 10px;"><button type="button" name="btndangnhap" class="btn btn-secondary">Đăng Nhập</button>
					</div>
				</a>
				<?php
				}
				?>
				
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="clear"></div>
</div>
</div>
<div class="footer">
<div class="wrap">

</div>
<div class="copy_right">
<p>Nguyễn Đình Tài</p>
</div>
</div>
<script type="text/javascript">
					$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
</script>
<a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>