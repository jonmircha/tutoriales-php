<br />
<div>
	<input type="hidden" name="op" value="consultas" />
	<label for="email">Email: </label>
	<input type="email" id="email" class="cambio" name="email_txt" placeholder="Escribe tu email" title="Tu email" 			 />
</div>
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn" value="buscar" />
<?php 
if($_GET["email_txt"]!=null)
{
	$email=$_GET["email_txt"];
	$consulta = "SELECT * FROM contactos WHERE email like '%$email%'";
	include("tabla-resultados.php");
}
?>