<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2:400,500,700&display=swap" rel="stylesheet">
</head>
<body>
	<?php require 'pages/zastavka.php'; ?>
	<script>
		document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>');
		
    	$('.parallax__list>li').addClass('layer');
		$('.parallax__list').parallax();
		$('.wrapp').addClass('active');
	</script>
</body>
</html>