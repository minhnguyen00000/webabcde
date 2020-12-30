<?php 

if(isset($_GET['id']))
{
	$query = $pdo->prepare('DELETE FROM nhacungcap WHERE manhacungcap=:id');
	$query->bindParam(':id',$_GET['id']);
	$query ->execute();
}


?>