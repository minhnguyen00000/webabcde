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
                  <h3 class="page-header">
                   Kết quả tìm kiếm
                    
                  </h3>
                
              </div>
            </div>

                </div>
                <div class="card-body table-responsive">
                  <table class="table table-striped table-borderless">
                    <thead>
                      <tr>
                        <th style="width:20%;">Mã Nhà Cung Cấp</th>                       
                        <th style="width:20%;">Tên Nhà Cung Cấp</th>
                        <th style="width:20%;">Địa Chỉ Nhà Cung Cấp</th>

                        <th style="width:20%;" class="actions">Quản lý</th>

                      </tr>
                    </thead>
                    <tbody class="no-border-x">
                    <?php 

                      

                      if (isset($_POST['timkiem'])) {
                        # code...
                        $timkiem = $_POST['timkiemt'];
                        $sql="select * from nhacungcap where tennhacungcap LIKE '%$timkiem%' or diachi LIKE '%$timkiem%'";
                        $stmt=$pdo->prepare($sql);
                        $stmt->execute();
                      }
                     
                        // dem so sp
                      if ($soncc=$stmt->rowCount()==0) {
                        # code...
                        echo '<div class="alert alert-danger" role="alert">
                          Không có sản phẩm nào được tìm thấy với từ khóa:'.$timkiem.
                        '</div>';
                        
                      }else{                  
                      

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
                    <?php } }?>
                    </tbody>


                  </table>


                  



                </div>
              </div>
            </div>