<?php 
	setcookie("status", 'offline', time()+3600, "/");
	setcookie("id", '', time()-3600, "/");
	header('Location: ../pages/main.php');
?>