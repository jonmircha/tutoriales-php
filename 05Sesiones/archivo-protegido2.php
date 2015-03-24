<?php include("sesion.php"); ?>
Bienvenido:
<?php echo $_SESSION["usuario"]; ?>
<br /><br />
Estas en otra p&aacute;gina segura con sesiones en PHP
<br /><br />
<a href="archivo-protegido.php">Ir a la primer p&aacute;gina segura</a>
<br /><br />
<a href="salir.php">SALIR</a>