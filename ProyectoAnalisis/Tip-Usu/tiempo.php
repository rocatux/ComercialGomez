<?php 
$segundos = 599; 
if(($_SESSION['tiempo']+$segundos) < time()) { 
	//echo '<meta http-equiv="refresh" content="1"/>';
	//echo'<script type="text/javascript">setTimeout("document.location.reload()",1); </script>';
	echo'<script type="text/javascript">alert("Su sesion ha expirado por inactividad'; 
    echo', vuelva a logearse para continuar");window.location.href="../salir.php";</script>';
    
}else 
   $_SESSION['tiempo']=time(); 
?>