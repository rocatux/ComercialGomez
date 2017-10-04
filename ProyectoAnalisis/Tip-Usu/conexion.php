<?php
$mysqli = new mysqli('localhost','root', '', 'analisis_pro');
if($mysqli->connect_error):
	echo "Error al conectarse con MySQL debido al error".$mysqli->connect_error;
endif;
?>