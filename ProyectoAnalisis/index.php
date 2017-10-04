<?php
	session_start();
	$_SESSION['tiempo']=time();
	
	if (isset($_SESSION['usuario'])) {
		if ($_SESSION['usuario']['tipo_usuario'] == "Admin") {
			header('Location: Tip-Usu/Admin/');
		}else if ($_SESSION['usuario']['tipo_usuario'] == "Admin") {
			header('Location: Tip-Usu/Usuario/');
		}
	}
?>

<!DOCTYPE html>
<html lang ="es">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/main.css">
</head>

<body >

	<!--<img src="img/login.png" style="float:center;width:110px;height:110px;">-->

	<div class="error">
		<span>Datos de Ingreso no válidos, Inténtalo de nuevo</span>
	</div>

	<div class="main">
		<form action="" id="formm">
			<input type="text" name="usuariom" pattern="[A-Za-z0-9_-]{1,15}" required placeholder="Usuario" requered />
			<input type="password" name="passm" pattern="[A-Za-z0-9_-]{1,15}" required placeholder="Contraseña" requered />
			<input type="submit" class="botonm" value ="Iniciar Session"/>
		</form>
	</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  	<script src="js/main.js"></script>

	
</body>
</html>