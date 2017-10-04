<?php
  session_start();
	include('../tiempo.php');
  if (isset($_SESSION['usuario'])) {
    if ($_SESSION['usuario']['tipo_usuario'] != "Usuario") {
      header("Location: ../Admin/");
    }
  }else{
    header('Location: ../../');
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Usuarios</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="../../css/bootstrap.min.css" rel="stylesheet">
	<link href="css/estilos.css" rel="stylesheet">
</head>
<body>

<div class="container">
	<div class="jumbotron">
		  <h1>Bienvenido <?php echo $_SESSION['usuario']['nombre'] ?></h1>
		<p>
			Ten un gran día
		</p>
	</div>
</div>

	<li class="nav-item">
	<a class= "nav-link" href="../salir.php">Cerrar Session</a>
	</li>
    
	<script src="../../js/jquery-3.2.1.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
</body>
</html>