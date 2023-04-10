<?php 
	$page = $_GET['page'];
	if (!isset($page)) {
		require ('inner.php');
	} elseif ($page == 'registr') {
		require('registration.php');
	} elseif ($page == 'login') {
		require('login.php');
	} elseif ($page == 'main') {
		require('inner.php');
	} elseif ($page == 'blog') {
		require('blog.php');
	} elseif ($page == 'client') {
		require('client-page.php');
	}
?>