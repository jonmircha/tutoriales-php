<?php
session_start();

//Evaluo que la sesion continue verificando una de las variables creadas en control.php, cuando esta ya no coincida con su valor inicial se redirije al archivo de salir.php
if(!$_SESSION["autentificado"]){
	header("Location: salir.php");
}
?>