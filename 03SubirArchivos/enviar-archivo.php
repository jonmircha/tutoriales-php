<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Subir Archivos al Servidor con PHP</title>
</head>
<body>
	<form name="enviar_archivo_frm" method="post" action="subir-archivo.php" enctype="multipart/form-data">
		<input type="file" name="archivo_fls" />
		<input type="submit" name="subir_btn" value="Subir Archivo" />
	</form>
</body>
</html>