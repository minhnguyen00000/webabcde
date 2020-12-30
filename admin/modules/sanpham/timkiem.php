<script type="text/javascript">
  function deleteCat(id)
  {
    an=confirm("Bạn có chắc muốn xóa?");
    if(an)
    {
      location.href="index.php?mod=sanpham&ac=xoa&id="+id;
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

 </div>
 <div class="card-body table-responsive">
  <table class="table table-striped table-borderless">
    <thead>
      <tr>
        <th style="width:5%;">Mã SP</th>
        <th style="width:8%;">Tên Sản Phấm</th>
        <th style="width:5%;">Loại sản phẩm</th>                       
        <th style="width:5%;">Nhà cung cấp</th>
        <th style="width:5%;">Quản trị viên</th>


        <th style="width:10%;">Mô tả</th>                       
        <th style="width:10%;">Chi tiết SP</th>
        <th style="width:5%;">Giá Bán</th>                      
        <th style="width:15%;">Hình ảnh</th>
        <th style="width:5%;">Ngày đăng</th>
        <th style="width:5%;">Tình Trạng</th>                      

        <th style="width:10%;" class="actions">Quản lý</th>

      </tr>
    </thead>
    <tbody class="no-border-x">
      <?php 

                      // dem so sp
      

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
          <tr>
            <td><?php echo $row['masanpham']; ?></td>

            <td><?php echo $row['tensanpham']; ?></td>

            <td><?php echo $row['maloaisp']; ?></td>

            <td><?php echo $row['manhacungcap']; ?></td>

            <td><?php echo $row['manhanvien']; ?></td>

            <td><textarea><?php echo $row['motatomtat']; ?></textarea></td>

            <td><textarea><?php echo $row['motachitiet']; ?></textarea></td>

            <td><?php echo $row['giaban']; ?></td>

            <td><img src="<?php echo $row['hinh']; ?>" width=150px; height=100px></td>

            <td><?php echo $row['ngaytao']; ?></td>

            <td>
              <?php if ($row['tinhtrang'] == 0): ?>
                <button  class="btn btn-xs btn-warning">Còn hàng</button>
              <?php endif ?>
              <?php if ($row['tinhtrang'] == 1): ?>
                <button class="btn btn-xs btn-success">Hết hàng</button>
              <?php endif ?>

            </td>
            <td>
              <a class="btn btn-primary" href="index.php?mod=sanpham&ac=sua&id=<?php echo $row['masanpham']; ?>"">Sửa</a>
              <a class="btn btn-danger" href="#" onclick="deleteCat('<?php echo $row['masanpham']; ?>')">Xóa</a>
            </td>
          </tr>
        <?php }  }?>
      </tbody>


    </table>
  </div>
</div>
</div>
</div>