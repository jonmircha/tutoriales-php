<?php
if(empty($_GET["pais_slc"]))
{
	include("conexion.php");
}
include("funciones.php");
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;

//echo $num_regs;
if($num_regs==0)
{
	echo "<br /><br /><span class='mensajes'>No se encontraron registros con esta búsqueda :(</span><br /><br />";
}
else
{
?>
	<br /><br />
	<table>
		<thead>
			<tr>
				<th>email</th>
				<th>nombre</th>
				<th>sexo</th>
				<th>nacimiento</th>
				<th>telefono</th>
				<th>pais</th>
				<th>imagen</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			while($registro = $ejecutar_consulta->fetch_assoc())
			{
			?>
				<tr>
					<td><?php echo utf8_decode($registro["email"]); ?></td>
					<td><?php echo utf8_decode($registro["nombre"]); ?></td>
					<td><?php echo ($registro["sexo"]=="M")?"Masculino":"Femenino"; ?></td>
					<td><?php echo utf8_decode($registro["nacimiento"]); ?></td>
					<td><?php echo utf8_decode($registro["telefono"]); ?></td>
					<td><?php echo utf8_decode($registro["pais"]); ?></td>
					<td><img src="img/fotos/<?php echo utf8_decode($registro["imagen"]); ?>" /></td>
				</tr>
			<?php
			}
			?>
		</tbody>
	</table>
<?php
}
$conexion->close();
?>