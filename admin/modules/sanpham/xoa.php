<?php 

if(isset($_GET['id']))
{
	$query = $pdo->prepare('DELETE FROM sanpham WHERE masanpham=:id');
	$query->bindParam(':id',$_GET['id']);
	$query ->execute();
}


?>