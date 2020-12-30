
<?php  
if(!isset($_SESSION['khachhang']))
{
  echo "<script>alert('Bạn cần phải đăng nhập để mua hàng');
        location.href='index.php?ac=dangnhap'
        </script>";
}

if (isset($_GET['id']) && isset($_GET['soluong']) ) {
	//cap nhat gio hang
	$query = $pdo->prepare('SELECT * FROM sanpham WHERE masanpham=:id');
	$query->bindParam(':id',$_GET['id']);
	$query ->execute();
	$dong=$query->fetch(PDO::FETCH_ASSOC);
	if ($_GET['soluong']>0) {
		# code...
		$_SESSION['giohangkhachhang'][$_GET['id']] = array(
            "soluong" =>$_GET['soluong'],
            "giaban"  =>$dong['giaban'],
            "hinh"  =>$dong['hinh'],
            "tensanpham"   =>$dong['tensanpham']
    );

	}else{
		unset($_SESSION['giohangkhachhang'][$_GET['id']]);
	}

	
}


if (isset($_GET['id']) && isset($_GET['action'])) {
	# code...
	unset($_SESSION['giohangkhachhang'][$_GET['id']]);
}



?>

<?php  

if (!empty($_SESSION['giohangkhachhang'])) {
        $i=0;
        $tongtien=0;

?>

<div class="content_top">
    		<div class="heading">
    		<h3>Thông tin giỏ hàng</h3>
    		</div>
    		
    		<div class="clear"></div>
</div>

   <table class="table table-hover">
   	<thead>
   		<tr>
   			<th style="width:2%;">ID</th>
   			<th style="width:15%;">Tên sản phẩm</th>
   			<th style="width:15%;">Hình ảnh</th>
   			<th>Giá</th>
   			<th style="width:5%;">Số lượng</th>
   			<th>Thành Tiền</th>
   			<th class="actions">Quản lý</th>
   			
   			
   		</tr>
   	</thead>
   	<tbody>
   		<?php  

   			foreach ($_SESSION['giohangkhachhang'] as $key => $value) {
   				# code...
   			$i++;
   			

   		?>
   		<tr>
   			
   			<td><?php echo $i ?></td>
   			<td><?php echo $_SESSION['giohangkhachhang'][$key]['tensanpham'] ?></td>
   			<td>
				<img src="admin/<?php echo $_SESSION['giohangkhachhang'][$key]['hinh'] ?>" alt="" width=150px; height=100px>
   			</td>
   			<td><?php echo number_format($_SESSION['giohangkhachhang'][$key]['giaban'] )?></td>
   			<td><input type="text" name="soluong_<?php echo $key ?>" id="soluong_<?php echo $key ?>" value="<?php echo  ( $_SESSION['giohangkhachhang'][$key]['soluong']) ?>"></td>
   			<td>
   				<?php echo number_format($_SESSION['giohangkhachhang'][$key]['soluong']*$_SESSION['giohangkhachhang'][$key]['giaban']);
   				number_format( $tongtien +=($_SESSION['giohangkhachhang'][$key]['soluong'])*$_SESSION['giohangkhachhang'][$key]['giaban']);
          $_SESSION['total']=$tongtien;
   				?>
   				
   			</td>
   			<td>
   				<a class="btn btn-primary" href="javascript:void(0)" onclick="capnhatItem(<?php echo $key ?>)">Cập nhật</a>
                <a class="btn btn-danger" href="javascript:void(0)" onclick="deleteItem(<?php echo $key ?>)">Xóa</a>
   			</td>
   			
   		</tr>

   		

   		<?php

   		}

   		}else{
        echo "<script>alert('Bạn chưa có sản phẩm nào trong giỏ hàng!');
        location.href='index.php'
        </script>";
      }

   		?>
   		<tr>
   			<td  colspan="5"><button type="button" class="btn btn-info">Tổng tiền</button></td>
   			<td><button type="button" class="btn btn-info"><?php if(isset($tongtien)) echo number_format($tongtien,0,",",".") ?></button></td>
   			<td><button type="button" class="btn btn-success" name="btnthanhtoan"><a href="index.php?ac=dondathang">Thanh toán</a></button></td>
   		</tr>
   	</tbody>
   </table>

   

   <!-- <script>
   		function capnhatItem(id){
   			soluong = $("#soluong_"+id).val();
   			$.get("index.php?ac=giohang&id="+id+"&soluong="+soluong, function(data){
   			
   				location.reload();
   			});
   		}

   		function deleteItem(id){
   			$.get("index.php?ac=giohang&id="+id+"&action=del", function(data){
   			
   				location.reload();
   			});
   		}
   </script> -->
