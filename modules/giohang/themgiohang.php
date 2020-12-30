<?php  
if(!isset($_SESSION['khachhang']))
{
  echo "<script>alert('Bạn cần phải đăng nhập để mua hàng');
        location.href='index.php?ac=dangnhap'
        </script>";

}else{
if (isset($_GET['id'])) {
  # code...
  $id = $_GET['id'];
  
  $query = $pdo->prepare('SELECT * FROM sanpham WHERE masanpham=:id');
  $query->bindParam(':id',$_GET['id']);
  $query ->execute();
  $dong=$query->fetch(PDO::FETCH_ASSOC);
  
    
    
        
  if(!empty($_SESSION['giohangkhachhang'])) {

    //kiem tra lan thu 2 mua hang  da co id hay chua
    
    
    if (array_key_exists($id, $_SESSION['giohangkhachhang'])) {
      # code...
          $_SESSION['giohangkhachhang'][$id] = array(
            "soluong" =>(int)$_SESSION['giohangkhachhang'][$id]["soluong"]+1,
            "giaban"  =>$dong['giaban'],
            "hinh"  =>$dong['hinh'],
            "tensanpham"   =>$dong['tensanpham']
          );
    }else{
          $_SESSION['giohangkhachhang'][$id] = array(
            "soluong" =>1,
            "giaban"  =>$dong['giaban'],
            "hinh"  =>$dong['hinh'],
            "tensanpham"   =>$dong['tensanpham']
          );
    }
    # code...
  }else{
    //lan dau tien mua hang
    $_SESSION['giohangkhachhang'][$id] = array(
      "soluong" =>1,
      "giaban"  =>$dong['giaban'],
      "hinh"  =>$dong['hinh'],
      "tensanpham"   =>$dong['tensanpham']
    );
  }
}else{
  header('location: index.php');
}
header('location: index.php');

}
?>
 	




   