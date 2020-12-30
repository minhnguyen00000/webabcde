<?php 

if(isset($_GET['id']))
{
	$query = $pdo->prepare('DELETE FROM khachhang WHERE makhachhang=:id');
	$query->bindParam(':id',$_GET['id']);
	$query ->execute();
}


?>