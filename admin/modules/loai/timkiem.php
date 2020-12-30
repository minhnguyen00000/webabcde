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
                        <th style="width:20%;">Mã Loại</th>                       
                        
                        <th style="width:20%;">Tên Loại</th>                       
                                           
                        
                        <th style="width:10%;" class="actions">Quản lý</th>

                      </tr>
                    </thead>
                    <tbody class="no-border-x">
                    <?php 

                      

                      if (isset($_POST['timkiem'])) {
                        # code...
                        $timkiem = $_POST['timkiemt'];
                        $sql="select * from loaisp where tenloaisp LIKE '%$timkiem%'";
                        $stmt=$pdo->prepare($sql);
                        $stmt->execute();
                      }
                     
                        // dem so sp
                      if ($soloai=$stmt->rowCount()==0) {
                        # code...
                        echo '<div class="alert alert-danger" role="alert">
                          Không có sản phẩm nào được tìm thấy với từ khóa:'.$timkiem.
                        '</div>';
                        
                      }else{   

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
                    <?php } }?>
                    </tbody>


                  </table>


                  
                </div>
              </div>
            </div>