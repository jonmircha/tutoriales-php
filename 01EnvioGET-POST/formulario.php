<!DOCTYPE html>
<html lang="es">
<head>
	<title>Env&iacute;o de datos por GET y POST</title>
	<meta charset="utf-8" />
</head>
<body>
	<hgroup><h1>Formulario enviado por el m&eacute;todo GET</h1></hgroup>
	<form name="envia-get_frm" action="envia-datos.php" method="get" enctype="application/x-www-form-urlencoded">
		<label>Ingresa tu Nombre:</label>
		<input type="text" name="nombre_txt" />
		<br /><br />
		<label>Ingresa tu Password:</label>
		<input type="password" name="password_txt" />
		<br /><br />
		<input type="submit" name="enviar_btn" value="Envia-GET" />
	</form>
	
	<hgroup><h1>Formulario enviado por el m&eacute;todo POST</h1></hgroup>
	<form name="envia-post_frm" action="envia-datos.php" method="post" enctype="application/x-www-form-urlencoded">
		<label>Ingresa tu Nombre:</label>
		<input type="text" name="nombre_txt" />
		<br /><br />
		<label>Ingresa tu Password:</label>
		<input type="password" name="password_txt" />
		<br /><br />
		<input type="submit" name="enviar_btn" value="Envia-POST" />
	</form>
</body>
<html>