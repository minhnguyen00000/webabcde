<!DOCTYPE HTML>
<head>
<title>In hoa don</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="../../public/css/report.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body onload="window.print();">
<div id="page" class="page">
    <div class="header">
        <div class="logo"><img src="../../public/images/asdsadasd.jpg" width="200" height="100" /></div>
        <div class="company">C.Ty Jidojo</div>
    </div>
  <br/>
  <div class="title">
        HÓA ĐƠN THANH TOÁN
        <br/>
        -------oOo-------
  </div>
  <br/>
  <br/>
  <table class="TableData">
  	
    <tr>
      <th>STT</th>
      <th>Tên</th>
      <th>Đơn giá</th>
      <th>Số</th>
      <th>Thành tiền</th>
    </tr>
    <?php
    session_start();

    try
    {
      $pdo=new PDO("mysql:host=localhost;dbname=qlbanhang","root","");
      $pdo->query("set names utf8");
    }catch(Exception $e)
    {
      echo $e->getMessage();
    }


    $tongtien = 0;
    $pos = 1;
    if (!empty($_SESSION['giohangkhachhang'])) {

          
        $i=0;
        
        foreach ($_SESSION['giohangkhachhang'] as $key => $value) {
          # code...
        $i++;
        $tongtien += ($_SESSION['giohangkhachhang'][$key]['soluong'])*$_SESSION['giohangkhachhang'][$key]['giaban'];
        echo "<tr>";
        echo "<td class=\"cotSTT\">".$pos++."</td>";
        echo "<td class=\"cotTenSanPham\">".$_SESSION['giohangkhachhang'][$key]['tensanpham']."</td>";
        echo "<td class=\"cotGia\"><div id='giasp".$_SESSION['giohangkhachhang'][$key]['giaban']."' value='".$_SESSION['giohangkhachhang'][$key]['giaban']."'>".number_format($_SESSION['giohangkhachhang'][$key]['giaban'],0,",",".")."</div></td>";
        echo "<td class=\"cotSoLuong\" align='center'>".$_SESSION['giohangkhachhang'][$key]['soluong']."</td>";
        echo "<td class=\"cotSo\">".number_format((($_SESSION['giohangkhachhang'][$key]['soluong'])*$_SESSION['giohangkhachhang'][$key]['giaban']),0,",",".")."</td>";
        echo "</tr>";
    }       
}
?>
    <tr>
      <td colspan="4" class="tong">Tổng cộng</td>
      <td class="cotSo"><?php echo number_format(($tongtien),0,",",".")?></td>
    </tr>
  </table>
  <div class="footer-left">TP. Hồ Chí Minh, <?php echo Date("l F d, Y") ?><br/>
    Khách hàng </div>
  <div class="footer-right">TP. Hồ Chí Minh, <?php echo Date("l F d, Y") ?><br/>
    Nhân viên </div>
</div>
</body>
</html>