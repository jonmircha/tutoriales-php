<?php
//para que la cookie funcione se tiene que especificar la ruta del directorio  en el cuarto parametro con "/", se entiende que la cookie existirá en todo el directorio del sitio
setcookie("idioma_solicitado",$_GET["idioma"],time()+86400,"/");
header("Location: usar-cookie.php");
?>