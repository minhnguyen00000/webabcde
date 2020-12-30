<div class="main">
	<div class="content">
		<div class="content_top">
			<div class="heading">
				<h3>Tìm kiem</h3>
			</div>
			<div class="see">
				<p><a href="index.php?ac=dienthoai">Tất cả sản phẩm</a></p>
			</div>
			<div class="clear"></div>
		</div>
		<div class="section group">
			<?php
				if (isset($_POST['timkiem'])) {
					# code...
					$timkiem = $_POST['timkiemt'];
					$sql="select * from sanpham where tensanpham LIKE '%$timkiem%' or giaban LIKE '%$timkiem%'";
			$stmt=$pdo->prepare($sql);
			$stmt->execute();
				}
				
			
			// dem so sp
				if ($sosp=$stmt->rowCount()==0) {
					# code...
					echo '<div class="alert alert-danger" role="alert">
						Không có sản phẩm nào được tìm thấy với từ khóa:'.$timkiem.
					'</div>';
					
				}else{
			
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
			?>
			<div class="grid_1_of_4 images_1_of_4">
				<a href="index.php?ac=chitiet&id=<?php echo $row['masanpham'] ?>"><img src="admin/<?php echo $row['hinh'] ?>" alt="" /></a>
				<h2><?php echo $row['tensanpham'] ?></h2>
				<div class="price-details">
					<div class="price-number">
						<p><span class="rupees"><?php echo $row['giaban'] ?>VNĐ</span></p>
					</div>
					<div class="add-cart">
						<?php if($row['tinhtrang']==0): ?>
						<h4><a href="index.php?ac=themgiohang&id=<?php echo $row['masanpham'] ?>">Mua ngay</a></h4>
						<?php endif ?>
						<?php if($row['tinhtrang']==1): ?>
						
						<button type="button" class="btn btn-warning">Sản phẩm tạm hết hàng</button>
						<?php endif ?>
					</div>
					<div class="clear"></div>
				</div>
				
			</div>
			<?php } } ?>
			
		</div>
		
		
	</div>
	<!-- ssssssssssssssssssssssssssssssssssssssssss -->
	
	<!-- ssssssssssssssssssssssssssssssssssssssssss -->
	
</div>