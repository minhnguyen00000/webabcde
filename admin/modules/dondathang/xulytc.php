<?php 
include_once("../../../config/config.php");


if (isset($_GET['id'])) {
	# code...
	
	$madondathang = $_GET['id'];
	

	$query = $pdo->prepare('UPDATE dondathang SET tinhtrang=:tinhtrang WHERE  madondathang=:id' );

    $query->bindParam(':id',$madondathang);
          
    $query->bindParam(':tinhtrang',$tinhtrangdonhang);
    $tinhtrangdonhang = 2;

    $query ->execute();

    // $sqlct_dondathang = $pdo->prepare('SELECT masanpham FROM ct_dondathang WHERE madondathang=:id');
    // $sqlct_dondathang->bindParam(':id',$madondathang);
    // $sqlct_dondathang ->execute();
    // foreach ($sqlct_dondathang as $row_ss) {
    //   $masanpham = intval($row_ss['masanpham']);
    //   $sql_sp = $pdo->prepare('SELECT * FROM sanpham WHERE masanpham=:masanpham');
    //   $sql_sp->bindParam(':masanpham',$masanpham);
    //   $sql_sp ->execute();
    //   $dong_sp=$sql_sp->fetch(PDO::FETCH_ASSOC);
    //   // $number = $dong_sp['So_luong'] - $row_ss['So_luong'];
    //   $query_sp = $pdo->prepare('UPDATE sanpham SET dem=:dem + 1 WHERE masanpham=:masanpham');
    //   $query_sp->bindParam(':masanpham',$masanpham);
      
    //   $query_sp->bindParam(':dem',$dong_sp['dem']);
    //   $query_sp ->execute();
    // }

    header("location:../../index.php?mod=dondathang");

}


?>
<!-- <?php if(isset($_GET['id']))
{
                        
  $query = $pdo->prepare('SELECT * FROM ct_dondathang WHERE madondathang=:id');
  $query->bindParam(':id',$_GET['id']);
  $query ->execute();
  $dong_ct_dondathang=$query->fetch(PDO::FETCH_ASSOC);
 }
?>
<td><?php echo $dong_ct_dondathang['masanpham']?></a></td>
 -->
              
 
