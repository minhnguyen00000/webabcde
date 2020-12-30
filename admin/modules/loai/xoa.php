<?php 

if(isset($_GET['id']))
{
	$query = $pdo->prepare('DELETE FROM loaisp WHERE maloaisp=:id');
	$query->bindParam(':id',$_GET['id']);
	$query ->execute();
}
?>