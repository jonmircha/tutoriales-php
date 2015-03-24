<?php
//Pasos para conectarme a una BD MySQL con PHP
//1)Conectarme al Servidor de BD, mysql_connect necesita 3 datos:
	//1)Servidor
	//2)Usuario de la BD
	//3)Password del usuario de la BD
$conexion = mysql_connect("localhost","root","") or die("No se pudo conectar con el servidor de BD");
echo "Estoy conectado a MySQL<br />";

//2)Seleccionar la BD con la que vamos a trabajar
mysql_select_db("mis_contactos") or die("No se pudo seleccionar la BD 'mis_contactos'");
echo "BD seleccionada: 'mis_contactos'<br />";

//3)Crear una consulta SQL
$consulta = "SELECT * FROM pais";

//4)Ejecutar la consulta SQL
//mysql_query necesita 2 parámetros:
	//1)La consulta
	//2)La conexion a la BD
$ejecutar_consulta = mysql_query($consulta,$conexion) or die("No se pudo ejecutar la consulta en la BD");
echo "Se ejecut&oacute; la consulta SQL<br />";

//5)Mostrar el resultado de ejecutar la consulta, dentro de un ciclo y en una variable voy a ingresar la función mysql_fetch_array
while($registro = mysql_fetch_array($ejecutar_consulta)){
	echo $registro["id_pais"]." - ".$registro["pais"]."<br />";
}

//6)Cerrar la conexión a la bd
mysql_close($conexion) or die("Ocurrió un error al cerrar la conexión a la BD");
echo "Conexi&oacute;n Cerrada";
?>