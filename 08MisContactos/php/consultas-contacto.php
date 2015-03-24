<form action="" id="consulta-contacto" name="consulta_form" method="get">
	<fieldset>
		<legend>Consulta de contactos</legend>
		<label for="consulta-lista">Tipo de Consulta: </label>
		<select name="consulta_slc" id="consulta-lista" required>
			<option value=""<?php if($_GET["consulta_slc"]==""){ echo " selected"; } ?>>- - -</option>
			<option value="todos"<?php if($_GET["consulta_slc"]=="todos"){ echo " selected"; } ?>>Todos</option>
			<option value="email"<?php if($_GET["consulta_slc"]=="email"){ echo " selected"; } ?>>Por email</option>
			<option value="inicial"<?php if($_GET["consulta_slc"]=="inicial"){ echo " selected"; } ?>>Por inicial</option>
			<option value="sexo"<?php if($_GET["consulta_slc"]=="sexo"){ echo " selected"; } ?>>Por sexo</option>
			<option value="pais"<?php if($_GET["consulta_slc"]=="pais"){ echo " selected"; } ?>>Por País</option>
			<option value="buscador"<?php if($_GET["consulta_slc"]=="buscador"){ echo " selected"; } ?>>Tipo buscador</option>
		</select>
		<?php
			switch($_GET["consulta_slc"])
			{
				case "todos":
					include("php/consulta-todo.php");
					break;
				case "email":
					include("php/consulta-email.php");
					break;
				case "inicial":
					include("php/consulta-inicial.php");
					break;
				case "sexo":
					include("php/consulta-sexo.php");
					break;
				case "pais":
					include("php/consulta-pais.php");
					break;
				case "buscador":
					include("php/consulta-buscador.php");
					break;
			} 
		?>
	</fieldset>
</form>
<script>
	window.onload = function()
	{
		var lista = document.getElementById("consulta-lista");

		lista.onchange = function()
		{
			window.location="?op=consultas&consulta_slc="+lista.value;
		};
	}
</script>