<?php
	$id=$_COOKIE['id'];
	setcookie("username",$id, time()-1);
	header("location: page-logout.php");
	exit();
?>
