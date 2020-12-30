


<?php  
$tongtien=0;
$body = '';//gui mail
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// usersdondathang

if (isset($_POST["btnthanhtoan"])) {
  # code...
        $makhachhang        = $_POST['makhachhang'];
        $tennguoinhan        = $_POST['tennguoinhan'];
        $diachinguoinhan          = $_POST['diachinguoinhan'];
        $sodienthoainguoinhan       = $_POST['sodienthoainguoinhan'];
        $emailnguoinhan            = $_POST['emailnguoinhan'];



        $body.='<table class="table table-hover">';
        $body.='<thead><tr><th style="width:2%;">ID</th><th style="width:30%;">Tên sản phẩm</th><th style="width:15%;">Hình ảnh</th><th>Giá</th><th style="width:10%;">Số lượng</th><th>Thành Tiền</th></tr></thead>';
        

        $i=0;
        foreach ($_SESSION['giohangkhachhang'] as $key => $value) {
          # code...
          $i++;
          $tongtien +=($_SESSION['giohangkhachhang'][$key]['soluong'])*$_SESSION['giohangkhachhang'][$key]['giaban'];
          $body.='<thead><tr><th style="width:2%;">'.$i.'</th><th style="width:30%;">'.$_SESSION['giohangkhachhang'][$key]['tensanpham'].'</th><th style="width:15%;"><img src="admin/'.$_SESSION['giohangkhachhang'][$key]['hinh'].'"></th><th>'.$_SESSION['giohangkhachhang'][$key]['giaban'].'</th><th style="width:10%;">'.$_SESSION['giohangkhachhang'][$key]['soluong'].'</th><th>'.($_SESSION['giohangkhachhang'][$key]['soluong'])*$_SESSION['giohangkhachhang'][$key]['giaban'].'</th></tr></thead>';
        }
        $body.='<tbody><tr><td colspan="5"><button type="button" class="btn btn-info">Tổng tiền</button></td><td><button type="button" class="btn btn-info">'.$tongtien.'</button></td></tr></tbody>';
        $body.='</table>';
        
        
        $query_dh = $pdo->prepare('INSERT INTO dondathang(makhachhang,manhanvien,tennguoinhan,diachinguoinhan,sodienthoainguoinhan,emailnguoinhan,tongtien,tinhtrang) VALUES(:makhachhang,:manhanvien,:tennguoinhan,:diachinguoinhan,:sodienthoainguoinhan,:emailnguoinhan,:tongtien,:tinhtrang)');

          
          $query_dh->bindParam(':makhachhang',$makhachhang);
          $query_dh->bindParam(':manhanvien',$manhanvien);
          $manhanvien=2;
          $query_dh->bindParam(':tennguoinhan',$tennguoinhan);
          $query_dh->bindParam(':diachinguoinhan',$diachinguoinhan);
          $query_dh->bindParam(':sodienthoainguoinhan',$sodienthoainguoinhan);
          $query_dh->bindParam(':emailnguoinhan',$emailnguoinhan);
          $query_dh->bindParam(':tongtien',$tongtien);
          $query_dh->bindParam(':tinhtrang',$tinhtrang);
          $tinhtrang = 0;
          
          $query_dh ->execute();


          // chi tiet don hang
          //  lay id cua bang ghi dc chen lan cuoi
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $ct_dondathang = $pdo->lastInsertId();
          

          foreach ($_SESSION['giohangkhachhang'] as $key => $value) {
            # code...
            $query_ct = $pdo->prepare('INSERT INTO ct_dondathang(madondathang,masanpham,soluong,giaban) VALUES(:madondathang,:masanpham,:soluong,:giaban)');
            $query_ct->bindParam(':madondathang',$ct_dondathang);
            $query_ct->bindParam(':masanpham',$key);
            $query_ct->bindParam(':soluong',$value["soluong"]);
            $query_ct->bindParam(':giaban',$value["giaban"]);
             
            $query_ct ->execute();
          }


         
          //Load Composer's autoloader
          require '/../../lib/Exception.php';
          require '/../../lib/PHPMailer.php';
          require '/../../lib/SMTP.php';

          $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
          try {
              //Server settings
              //$mail->SMTPDebug = 2;             // Enable verbose debug output
              $mail->isSMTP();

                              // Set mailer to use SMTP
              $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
              $mail->SMTPAuth = true; 
                      // Enable SMTP authentication
              $mail->Username = 'phamxuanthuy.nguyen96@gmail.com';   // SMTP username
              $mail->Password = 'hpzbukyofvtgkcwp
';                           // SMTP password
              $mail->SMTPSecure = 'tls';           // Enable TLS encryption, `ssl` also accepted
              $mail->Port = 587;

              //Recipients
              $mail->setFrom('systemtest@gmail.com', 'Mailer');
              $mail->addAddress($emailnguoinhan, 'XuanThuy');     // Add a recipient
              //$mail->addAddress('ellen@example.com');               // Name is optional
              //$mail->addReplyTo('info@example.com', 'Information');
              //$mail->addCC('cc@example.com');
              //$mail->addBCC('bcc@example.com');

              //Attachments
              //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
              //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

              //Content
              $mail->isHTML(true);                                  // Set email format to HTML
              $mail->Subject = 'Thông tin đơn đặt hàng';
              $mail->Body    = $body;
              //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
               $mail->send();
                  echo "<script>alert('Đặt hàng thành công!');
                    if (result = confirm('Bạn có muốn in hóa đơn?')) {
                        document.write(result);
                        location.href='modules/giohang/indoadon.php';
                    } else {
                        location.href='index.php'
                    }
                        </script>";
                        
              } catch (Exception $e) {
                  echo 'Không thể gửi Mail. Mailer Error: ', $mail->ErrorInfo;
              }                                  // TCP port to connect to

}

?>





<div class="content_top">
    		<div class="heading">
    		<h3>Thông tin đơn đặt hàng</h3>
    		</div>
    		
    		<div class="clear"></div>
</div>

   <table class="table table-hover">
   	<thead>
   		<tr>
   			<th style="width:2%;">ID</th>
   			<th style="width:30%;">Tên sản phẩm</th>
   			<th style="width:15%;">Hình ảnh</th>
   			<th>Giá</th>
   			<th style="width:10%;">Số lượng</th>
   			<th>Thành Tiền</th>
   			
   			
   			
   		</tr>
   	</thead>
   	<tbody>
   		<?php  

      if (!empty($_SESSION['giohangkhachhang'])) {

          
        $i=0;
        
        foreach ($_SESSION['giohangkhachhang'] as $key => $value) {
          # code...
        $i++;
        

      ?>
      <tr>
        
        <td><?php echo $i ?></td>
        <td><?php echo $_SESSION['giohangkhachhang'][$key]['tensanpham'] ?></td>
        <td><img src="admin/<?php echo $_SESSION['giohangkhachhang'][$key]['hinh'] ?>" width=150px; height=100px; ></td>
        <td><?php echo $_SESSION['giohangkhachhang'][$key]['giaban'] ?></td>
        <td><?php echo $_SESSION['giohangkhachhang'][$key]['soluong'] ?></td>
        <td>
          <?php echo ($_SESSION['giohangkhachhang'][$key]['soluong'])*$_SESSION['giohangkhachhang'][$key]['giaban'];
          $tongtien +=($_SESSION['giohangkhachhang'][$key]['soluong'])*$_SESSION['giohangkhachhang'][$key]['giaban'];
          ?>
          
        </td>
        
        
      </tr>

      

      <?php

   		}

   		}

   		?>
   		<tr>
   			<td  colspan="5"><button type="button" class="btn btn-info">Tổng tiền</button></td>
   			<td><button type="button" class="btn btn-info"><?php echo $tongtien ?>VND</button></td>
   			
   		</tr>
   	</tbody>
   </table>


<div class="content_top">
         <div class="heading">
         <h3>Nhập Thông Tin Khách Hàng</h3>
         </div>
         <div class="see">
          <p><a href="index.php?ac=thongtinkh">Cập Nhật Thông tin khách hàng</a></p>
        </div>
         
         <div class="clear"></div>
</div>

   <?php  


   if(isset($_SESSION['khachhang']))
    {
      $khachhang=$_SESSION['khachhang'];
      
      $query = $pdo->prepare('SELECT * FROM khachhang WHERE taikhoan=:khachhang');
      $query->bindParam(':khachhang',$khachhang);
      $query ->execute();
      
      $dong=$query->fetch(PDO::FETCH_ASSOC);
    }
   ?>
   <form action="" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">

          
          <div class="form-group row">
            
            <div class="col-sm-8">
              <input type="hidden" class="form-control" id="makhachhang" readonly placeholder="Nhập Họ và Tên" name="makhachhang" value="<?php echo $dong['makhachhang'] ?>">

            </div>
          </div>
          <div class="form-group row">
            <label for="tennguoinhan" class="col-sm-2 col-form-label">Họ và Tên Người Nhận</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="tennguoinhan"  placeholder="Nhập Họ và Tên" name="tennguoinhan" value="">
            </div>
          </div>
          
          
          <div class="form-group row">
            <label for="diachinguoinhan" class="col-sm-2 col-form-label">Địa chỉ Người Nhận</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="diachinguoinhan"  placeholder="Nhập Địa chỉ" name="diachinguoinhan" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="sodienthoainguoinhan" class="col-sm-2 col-form-label">SĐT Người Nhận</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="sodienthoainguoinhan"  placeholder="Nhập SĐT" name="sodienthoainguoinhan" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="emailnguoinhan" class="col-sm-2 col-form-label">Email Người Nhận</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="emailnguoinhan"  placeholder="Nhập Email" name="emailnguoinhan" value="">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-secondary btn-lg btn-block" name="btnthanhtoan">Thanh toán</button>
            </div>
          </div>  
        </form>
