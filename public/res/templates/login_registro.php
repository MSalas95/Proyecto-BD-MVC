<!DOCTYPE html>
<html>
<head>
  	<meta charset="UTF-8">
	<title><?php echo $titulo; ?></title>
	<base href="http://localhost/proyectobd/public/">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/awesome-bootstrap-checkbox.css"         rel="stylesheet">
	<link href="css/custom.css"        rel="stylesheet" type="text/css">
	<link href="css/login.css"         rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<script src="js/jquery.min.js"></script>
</head>
<body>

	<div class="container">
		<div class="principal">

			<h1> <img src="./res/img/logo.png" alt="" width="50" height="50">Logo</h1>

			<div class="cuerpo-login">
				
				<?php echo $contenido; ?>

			</div>
			
					
		</div>
	</div>
	
</body>
</html>