<?php 
	require '../php/db.php';
	session_start();
	$data = $_POST;
	require_once '../php/registration-set.php';
	require_once '../php/login-set.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Main</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/font/fontawesome/all.min.css">
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<?php require '../block/header.php';
		  require '../php/site-map.php';
	      require '../block/footer.php'; ?>
	<script>
		document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
	</script>
	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/owl.carousel.min.js">
	</script>
	<script src="../js/corusel.js"></script>
	<script src="../js/query.js"></script>
	<script src="../js/main.js"></script>
</body>
</html>