  
	
 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Sản Phẩm Mới</h3>
    		</div>
    		<div class="see">
    			<p><a href="index.php?ac=dienthoai">Tất cả sản phẩm</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
	    <div class="section group">
				<?php 
                      $sql="select * from sanpham order by masanpham DESC limit 0,8";
                      $stmt=$pdo->prepare($sql);
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
				<?php } ?>
				
		</div>
			
			
    </div>



    <!-- ssssssssssssssssssssssssssssssssssssssssss -->
	<div class="content_top">
    		<div class="heading">
    		<h3>Sản Phẩm bán chạy</h3>
    		</div>
    		<div class="see">
    			<p><a href="index.php?ac=dienthoai">Tất cả sản phẩm</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
    	<div class="section group">
				<?php 
                      $sql="select * from sanpham order by dem DESC limit 0,8";
                      $stmt=$pdo->prepare($sql);
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
				<?php } ?>
				
			</div>
			<!-- ssssssssssssssssssssssssssssssssssssssssss -->
			


 </div>


</div>

