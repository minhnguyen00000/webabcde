<div class="content">
	<div class="content_top">
		<div class="heading">
			<h3>Sản Phẩm</h3>
		</div>
		<div class="clear"></div>
	</div>
	<div class="section group">
		<div class="cont-desc span_3_of_3">
			<?php
			if(isset($_GET['id']))
			{
				$query = $pdo->prepare('SELECT * FROM sanpham WHERE masanpham=:id');
				$query->bindParam(':id',$_GET['id']);
				$query ->execute();
				$dong=$query->fetch(PDO::FETCH_ASSOC);
			}
			?>
			<div class="product-details">
				<div class="grid images_3_of_2">
					<div id="container">
						<div id="products_example">
							<div id="products">
								<div class="slides_container">
									<a href="#" target="_blank"><img src="admin/<?php echo $dong['hinh'] ?>" alt=" " /></a>
									
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<div class="desc span_3_of_2">
					<h2><?php echo $dong['tensanpham'] ?></h2>
					<p><?php echo $dong['motatomtat'] ?></p>
					<div class="price">
						<p>Giá: <span><?php echo number_format($dong['giaban'],0,",",".") ?>VND</span></p>
					</div>
					
					<div class="share-desc">
						<div class="button"><span><?php if($dong['tinhtrang']==0): ?>
							<h4><a href="index.php?ac=themgiohang&id=<?php echo $dong['masanpham'] ?>">Mua ngay</a></h4>
							<?php endif ?>
							<?php if($dong['tinhtrang']==1): ?>
							
							<button type="button" class="btn btn-warning">Sản phẩm tạm hết hàng</button>
						<?php endif ?></span></div>
						<div class="clear"></div>
					</div>
					
				</div>
				<div class="clear"></div>
			</div>
			<div class="product_desc">
				<div id="horizontalTab">
					<ul class="resp-tabs-list">
						<div class="content_top">
							<div class="heading">
								<h3>Thông tin sản phẩm</h3>
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="clear"></div>
					</ul>
					<div class="resp-tabs-container">
						<div class="product-desc">
							
							<p><?php echo $dong['motachitiet'] ?></p>
						</div>
					</div>
				</div>
			</div>
			<script type="text/javascript">
			$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion
			width: 'auto', //auto or any width like 600px
			fit: true   // 100% fit in a container
			});
			});
			</script>
			<div class="content_bottom">
				<div class="heading">
					<h3>Sản Phẩm tương tự</h3>
				</div>
				<div class="see">
					<p><a href="index.php?ac=dienthoai">Tất cả sản phẩm</a></p>
				</div>
				<div class="clear"></div>
			</div>
			<div class="section group">
				<?php
				if(isset($_GET['id'])){
					$giaban = $dong['giaban'];
				$sql="SELECT * FROM sanpham WHERE giaban LIKE '%$giaban%' ";
				$stmt=$pdo->prepare($sql);
				$stmt->bindParam(':id',$_GET['id']);
				$stmt->execute();
				// dem so sp
				$sosp=$stmt->rowCount();
				// dem so sp
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
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
				<?php }  }?>
			</div>
		</div>
	</div>
</div>
</div>