    
	
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
                      $sql="select * from sanpham";
                      $stmt=$pdo->prepare($sql);
                      $stmt->execute();
                      // dem so sp
                      $sosp=$stmt->rowCount();
                      // dem so sp
                      $page=1;
                      if(isset($_GET['page']))
                        $page=$_GET['page'];
                      $bd=($page-1)*$so1trang;
                      if(isset($_GET['masanpham']))
                      {
                        
                        $sql="select * from sanpham where masanpham=:ma limit $bd,$so1trang";
                        $stmt=$pdo->prepare($sql);
                        $stmt->bindParam('ma',$masanpham);
                        $masanpham=$_GET['masanpham'];
                        }else
                        {
                          $sql="select * from sanpham order by giaban desc limit $bd,$so1trang";
                          $stmt=$pdo->prepare($sql);
                        }
                      
                        $stmt->execute();

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
      <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                      <?php
                      $sotrang=ceil($sosp/$so1trang);
                      if($sotrang>1)
                      {
                        for($i=1;$i<=$sotrang;$i++)
                        if(isset($masanpham))
                        {
                          if($page==$i)
                            echo '<li class="page-item"><a class="page-link">'.$i.'</a></li>';
                          else  
                            echo '<li class="page-item"><a class="page-link" href="index.php?ac=dienthoai&masanpham='.$masanpham.'&page='.$i.'">'.$i.'</a></li>';
                        }
                        else
                        {
                          if($page==$i)
                            echo '<li class="page-item"><a class="page-link">'.$i.'</a></li>';
                          else
                          echo '<li class="page-item"><a class="page-link" href="index.php?ac=dienthoai&page='.$i.'">'.$i.'</a></li>';
                        }
                      }
                      ?>
                    </ul>
                  </nav>
    </div>
 </div>
  
</div>


