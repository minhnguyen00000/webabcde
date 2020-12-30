<script type="text/javascript">
function deleteCat(id)
{
  an=confirm("Bạn có chắc muốn xóa?");
  if(an)
  {
    location.href="index.php?mod=loai&ac=xoa&id="+id;
  }
  
}
</script>
<div class="row">
            <div class="col-md-12">
              <div class="card card-table">
                <div class="row">
                  <div class="col-md-9">
                  <h1 class="page-header">
                    Quản lý Loại
                    <a href="index.php?mod=loai&ac=them" class="btn btn-danger">Thêm Mới</a>
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
                        <th style="width:20%;">Mã Loại</th>                       
                        
                        <th style="width:20%;">Tên Loại</th>                       
                                           
                        
                        <th style="width:10%;" class="actions">Quản lý</th>

                      </tr>
                    </thead>
                    <tbody class="no-border-x">
                    <?php 

                      

                      $sql="select * from loaisp";
                      $stmt=$pdo->prepare($sql);
                      $stmt->execute();
                      // dem so sp
                      $soloai=$stmt->rowCount();                   
                      $page=1;
                      if(isset($_GET['page']))
                        $page=$_GET['page'];
                      $bd=($page-1)*$so1trang;
                      if(isset($_GET['maloaisp']))
                      {
                        
                        $sql="select * from loaisp where maloaisp=:ma limit $bd,$so1trang";
                        $stmt=$pdo->prepare($sql);
                        $stmt->bindParam('ma',$maloaisp);
                        $maloaisp=$_GET['maloaisp'];
                        }else
                        {
                          $sql="select * from loaisp order by maloaisp desc limit $bd,$so1trang";
                          $stmt=$pdo->prepare($sql);
                        }
                        
                        $stmt->execute();



                      while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                      {

                    ?>                   
                      <tr>
                        <td><?php echo $row['maloaisp']; ?></td>

                        

                        <td><?php echo $row['tenloaisp']; ?></td>

                        
                        <td>
                          <a class="btn btn-primary" href="index.php?mod=loai&ac=sua&id=<?php echo $row['maloaisp']; ?>"">Sửa</a>
                          <a class="btn btn-danger" href="#" onclick="deleteCat('<?php echo $row['maloaisp']; ?>')">Xóa</a>
                        </td>
                      </tr>
                    <?php } ?>
                    </tbody>


                  </table>


                  <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                      <?php
                      $sotrang=ceil($soloai/$so1trang);
                      if($sotrang>1)
                      {
                        for($i=1;$i<=$sotrang;$i++)
                        if(isset($maloaisp))
                        {
                          if($page==$i)
                            echo '<li class="page-item"><a class="page-link">'.$i.'</a></li>';
                          else  
                            echo '<li class="page-item"><a class="page-link" href="index.php?mod=loai&maloaisp='.$maloaisp.'&page='.$i.'">'.$i.'</a></li>';

                        }
                        else
                        {
                          if($page==$i)
                            echo '<li class="page-item"><a class="page-link">'.$i.'</a></li>';
                          else
                          echo '<li class="page-item"><a class="page-link" href="index.php?mod=loai&page='.$i.'">'.$i.'</a></li>';
                        
                        }
                        
                      
                      }
                      ?>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>