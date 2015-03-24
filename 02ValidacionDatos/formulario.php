<!DOCTYPE html>
<html lang="es">
<head>
	<title>Validaci&oacute;n de Datos con PHP</title>
	<meta charset="utf-8" />
	<script>
		function validarDatosGET(){
			var verificar=true;
			
			if(!document.valida_datos_get_frm.nombre_txt.value){
				alert("El campo nombre es requerido");
				document.valida_datos_get_frm.nombre_txt.focus();
				verificar = false;
			} else if(!document.valida_datos_get_frm.password_txt.value){
				alert("El campo password es requerido");
				document.valida_datos_get_frm.password_txt.focus();
				verificar = false;
			} else if(!document.valida_datos_get_frm.sexo_rdo[0].checked && !document.valida_datos_get_frm.sexo_rdo[1].checked){
				alert("El campo sexo es requerido");
				document.valida_datos_get_frm.sexo_rdo[0].focus();
				verificar = false;
			}
			
			if(verificar){
				document.valida_datos_get_frm.submit();
			}
		}
		
		function validarDatosPOST(){
			var verificar=true;
			
			if(!document.valida_datos_post_frm.nombre_txt.value){
				alert("El campo nombre es requerido");
				document.valida_datos_post_frm.nombre_txt.focus();
				verificar = false;
			} else if(!document.valida_datos_post_frm.password_txt.value){
				alert("El campo password es requerido");
				document.valida_datos_post_frm.password_txt.focus();
				verificar = false;
			} else if(!document.valida_datos_post_frm.sexo_rdo[0].checked && !document.valida_datos_post_frm.sexo_rdo[1].checked){
				alert("El campo sexo es requerido");
				document.valida_datos_post_frm.sexo_rdo[0].focus();
				verificar = false;
			}
			
			if(verificar){
				document.valida_datos_post_frm.submit();
			}
		}
		
		window.onload = function(){
			document.getElementById("enviar-get").onclick = validarDatosGET;
			document.getElementById("enviar-post").onclick = validarDatosPOST;
		}
	</script>
</head>
<body>
	<?php
	error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
	
	if($_GET["error"]=="si"){
		echo "<span style=\"color:#F00; font-size:2em;\">VERIFICA TUS DATOS</span>";
	}
	?>
	<hgroup><h1>Formulario de Datos GET</h1></hgroup>
	<form name="valida_datos_get_frm" action="validar-datos.php" method="get" enctype="application/x-www-form-urlencoded">
		Ingresa tu Nombre: 
		<input type="text" name="nombre_txt" />
		<br /><br />
		Ingresa tu Password:
		<input type="password" name="password_txt" />
		<br /><br />
		<input type="radio" name="sexo_rdo" value="M"/>Masculino&nbsp;
		<input type="radio" name="sexo_rdo" value="F"/>Femenino&nbsp;
		<br /><br />
		<input type="hidden" name="enviar_hdn" value="get" />
		<input type="button" id="enviar-get" name="enviar_btn" value="Enviar x GET"/>
	</form>
	<hgroup><h1>Formulario de Datos POST</h1></hgroup>
	<form name="valida_datos_post_frm" action="validar-datos.php" method="post" enctype="application/x-www-form-urlencoded">
		Ingresa tu Nombre: 
		<input type="text" name="nombre_txt" />
		<br /><br />
		Ingresa tu Password:
		<input type="password" name="password_txt" />
		<br /><br />
		<input type="radio" name="sexo_rdo" value="M"/>Masculino&nbsp;
		<input type="radio" name="sexo_rdo" value="F"/>Femenino&nbsp;
		<br /><br />
		<input type="hidden" name="enviar_hdn" value="post" />
		<input type="button" id="enviar-post" name="enviar_btn" value="Enviar x POST"/>
	</form>
</body>
</html>