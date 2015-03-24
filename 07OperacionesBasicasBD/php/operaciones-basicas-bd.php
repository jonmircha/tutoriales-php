<?php
$conexion = mysql_connect("localhost","root","") or die("No se pudo conectar con el servidor de BD");
echo "Conectado al servidor de BD MySQL<br />";

mysql_select_db("mis_contactos") or die("No se pudo seleccionar la BD<br />");
echo "BD seleccionada: <b>mis_contactos</b><br />";
echo "<h1>Las 4 operaciones b&aacute;sicas a una BD</h1>";
echo "<h2>1)INSERCI&Oacute;N DE DATOS</h2>";
// INSERT INTO nombre_tabla (campos_tabla) VALUES (valores_campos)
$consulta = "INSERT INTO contactos (email,nombre,sexo,nacimiento,telefono,pais,imagen) VALUES ('jon_mircha@bextlan.com','Jonathan MirCha','M','1984-05-23','525555555555','México','jonmircha.png')";

$ejecutar_consulta = mysql_query($consulta,$conexion);
echo "Se han insertado los datos =)<br />";

echo "<h2>2)ELIMINACI&Oacute;N DE DATOS</h2>";
// DELETE FROM nombre_tabla WHERE campo = valor
$consulta = "DELETE FROM contactos WHERE email = 'jon.mircha@bextlan.com'";

$ejecutar_consulta = mysql_query($consulta,$conexion);
echo "Datos eliminados =( <br />";

echo "<h2>3)MODIFICACI&Oacute;N DE DATOS</h2>";
// UPDATE nombre_tabla SET nombre_campo = valor_campo, otro_campo = otro_valor WHERE campo = valor
$consulta = "UPDATE contactos SET email = 'cursos@bextlan.com', nombre = 'Bextlan', imagen = 'bextlan.png' WHERE email = 'jon_mircha@bextlan.com'";

$ejecutar_consulta = mysql_query($consulta,$conexion);
echo "Los Datos han sido modificados =) <br />";

echo "<h2>4)CONSULTA(b&uacute;squeda) DE DATOS</h2>";
// SELECT * FROM nombre_tabla WHERE campo = valor

$consulta = "SELECT * FROM contactos";
$ejecutar_consulta = mysql_query($consulta,$conexion);
echo "<h3>Consulta que trae todos los registros de la tabla</h3>";

while($registro=mysql_fetch_array($ejecutar_consulta)){
	echo $registro["email"]."---";
	echo $registro["nombre"]."---";
	echo $registro["sexo"]."---";
	echo $registro["nacimiento"]."---";
	echo $registro["telefono"]."---";
	echo $registro["pais"]."---";
	echo $registro["imagen"]."---";
	echo "<br />";
}

$consulta = "SELECT * FROM contactos WHERE nombre = 'Bextlan'";
$ejecutar_consulta = mysql_query($consulta,$conexion);
echo "<h3>Consulta que trae los registros de la tabla con el nombre = 'Bextlan'</h3>";

while($registro=mysql_fetch_array($ejecutar_consulta)){
	echo $registro["email"]."---";
	echo $registro["nombre"]."---";
	echo $registro["sexo"]."---";
	echo $registro["nacimiento"]."---";
	echo $registro["telefono"]."---";
	echo $registro["pais"]."---";
	echo $registro["imagen"]."---";
	echo "<br />";
}

$consulta = "SELECT * FROM contactos WHERE nombre = 'Jonathan MirCha' AND imagen = 'jonmircha.png'";
$ejecutar_consulta = mysql_query($consulta,$conexion);
echo "<h3>Consulta que trae los registros de la tabla con el nombre = 'Jonathan MirCha' y imagen = 'jonmircha.png'</h3>";

while($registro=mysql_fetch_array($ejecutar_consulta)){
	echo $registro["email"]."---";
	echo $registro["nombre"]."---";
	echo $registro["sexo"]."---";
	echo $registro["nacimiento"]."---";
	echo $registro["telefono"]."---";
	echo $registro["pais"]."---";
	echo $registro["imagen"]."---";
	echo "<br />";
}

mysql_close($conexion);
echo "<h4>Conexi&oacute;n Cerrada</h4>";
?>