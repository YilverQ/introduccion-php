<!--Extracción de datos-->
<!--Manejo de strings-->

<!--strip_tags-->
<?php

	//strip_tags
	//elimina las etiquetas y tags HTML de una cadena de texto.
	//strip_tags(string, tags_permitidos);
	echo "<h3>strip_tags</h3>";
	$texto = "<h1>Hola Mundo</h1>";
	$super_texto = "<h1>PHP es un lenguaje de programación</h1><h2>Cosas que hacer con php</h2>";
	echo $texto . "<br>";
	echo $super_texto . "<br>";

	//formatear texto
	$texto_formateado = strip_tags($texto);
	echo $texto_formateado . "<br>";
	$texto_formateado2 = strip_tags($super_texto, "<h2>");
	echo $texto_formateado2 . "<br>"; 

?>