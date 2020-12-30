<div class="main">
	<div class="content">
		<div class="content_top_1">
			<div class="dienthoai">
				<?php
				$sql="select * from loaisp";
				$stmt=$pdo->prepare($sql);
				$stmt->execute();
				// dem so sp
				$sosp=$stmt->rowCount();
				// dem so sp
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
				?>
				
				<ul>
					<li><a href="index.php?ac=loai&id=<?php echo $row['maloaisp'] ?>"><?php echo $row['tenloaisp'] ?></a></li>
					
				</ul>
				<?php } ?>
			</div>
			
			<div class="clear"></div>
		</div>
		<div class="section group">
			<?php
				if(isset($_GET['id']))
				{
					$query = $pdo->prepare('SELECT * FROM sanpham WHERE maloaisp=:id order by giaban DESC');
					$query->bindParam(':id',$_GET['id']);
					$query ->execute();
			// dem so sp
			while($row=$query->fetch(PDO::FETCH_ASSOC))
			{
			?>
			<div class="grid_1_of_4 images_1_of_4">
				<a href="index.php?ac=chitiet&id=<?php echo $row['masanpham'] ?>"><img src="admin/<?php echo $row['hinh'] ?>" alt="" /></a>
				<h2><?php echo $row['tensanpham'] ?></h2>
				<div class="price-details">
					<div class="price-number">
						<p><span class="rupees"><?php echo number_format($row['giaban'],0,",",".") ?>VNĐ</span></p>
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
			
			<?php } }?>
			
		</div>
		
		
	</div>
</div>
</div>