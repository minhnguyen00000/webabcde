<script type="text/javascript">
function deleteCat(id)
{
  an=confirm("Bạn có chắc muốn xóa?");
  if(an)
  {
    location.href="index.php?mod=ncc&ac=xoa&id="+id;
  }
  
}
  
</script>



<div class="row">
            <div class="col-md-12">
              <div class="card card-table">
                <div class="row">
                  <div class="col-md-9">
                  <h1 class="page-header">
                    Quản lý Nhà Cung Cấp
                    <a href="index.php?mod=ncc&ac=them" class="btn btn-danger">Thêm Mới</a>
                  </h1>
                </div>



                  <form class="form-inline my-2 my-lg-0 mr-lg-2" action="" method="post">
                  <div class="input-group">
                    <input  type="text" id="timkiemf" name="timkiemt" placeholder="Tìm kiếm...">
                        <input type="submit" value="Tìm kiếm" id="timkiembtn" name="timkiem">
                  </div>
                </form>
                
              </div>
            </div>

                </div>
                <div class="card-body table-responsive">
                  <table class="table table-striped table-borderless">
                    <thead>
                      <tr>
                        <th style="width:20%;">Mã Nhà Cung Cấp</th>                       
                        <th style="width:20%;">Tên Nhà Cung Cấp</th>
                        <th style="width:20%;">Đại Chỉ Nhà Cung Cấp</th>
                        

                        <th style="width:20%;" class="actions">Quản lý</th>

                      </tr>
                    </thead>
                    <tbody class="no-border-x">
                    <?php 

                      

                      $sql="select * from nhacungcap";
                      $stmt=$pdo->prepare($sql);
                      $stmt->execute();

                      $soncc=$stmt->rowCount();                   
                      $page=1;
                      if(isset($_GET['page']))
                        $page=$_GET['page'];
                      $bd=($page-1)*$so1trang;
                      if(isset($_GET['manhacungcap']))
                      {
                        
                        $sql="select * from nhacungcap where manhacungcap=:ma limit $bd,$so1trang";
                        $stmt=$pdo->prepare($sql);
                        $stmt->bindParam('ma',$manhacungcap);
                        $manhacungcap=$_GET['manhacungcap'];
                        }else
                        {
                          $sql="select * from nhacungcap order by manhacungcap desc limit $bd,$so1trang";
                          $stmt=$pdo->prepare($sql);
                        }
                        
                        $stmt->execute();


                      while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                      {

                    ?>                   
                      <tr>
                        <td><?php echo $row['manhacungcap']; ?></td>

                        <td><?php echo $row['tennhacungcap']; ?></td>

                        <td><?php echo $row['diachinhacungcap']; ?></td>

                        
                        
                        <td>
                          <a class="btn btn-primary" href="index.php?mod=ncc&ac=sua&id=<?php echo $row['manhacungcap']; ?>"">Sửa</a>
                          <a class="btn btn-danger" href="#" onclick="deleteCat('<?php echo $row['manhacungcap']; ?>')">Xóa</a>
                        </td>
                      </tr>
                    <?php } ?>
                    </tbody>


                  </table>


                  <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                      <?php
                      $sotrang=ceil($soncc/$so1trang);
                      if($sotrang>1)
                      {
                        for($i=1;$i<=$sotrang;$i++)
                        if(isset($manhacungcap))
                        {
                          if($page==$i)
                            echo '<li class="page-item"><a class="page-link">'.$i.'</a></li>';
                          else  
                            echo '<li class="page-item"><a class="page-link" href="index.php?mod=ncc&manhacungcap='.$manhacungcap.'&page='.$i.'">'.$i.'</a></li>';

                        }
                        else
                        {
                          if($page==$i)
                            echo '<li class="page-item"><a class="page-link">'.$i.'</a></li>';
                          else
                          echo '<li class="page-item"><a class="page-link" href="index.php?mod=ncc&page='.$i.'">'.$i.'</a></li>';
                        
                        }
                        
                      
                      }
                      ?>
                    </ul>
                  </nav>



                </div>
              </div>
            </div>