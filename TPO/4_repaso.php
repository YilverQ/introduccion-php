<!--Extracción de datos-->
<!--Manejo de strings-->

<!--trim-->
<?php

	/*
		Se supone que elimina espacios en blancos. 
		Solamente al inicio y/o final.	
	*/

	//trim
	echo "<h3>trim</h3>";
	$cadena = " 'frase frase frase frase frase' ";
	$cadena_formateada = trim($cadena);
	echo "La cadena original: " . $cadena . "hola";
	echo "<br>";
	echo "La cadena formateada: " . $cadena . "hola";

	//ltrim
	echo "<br>";
	echo "<h3>ltrim</h3>";
	$cadena = " 'frase frase frase frase frase' ";
	$cadena_formateada = ltrim($cadena);
	echo "La cadena original: " . $cadena . "hola";
	echo "<br>";
	echo "La cadena formateada: " . $cadena . "hola";

	//rtrim
	echo "<br>";
	echo "<h3>rtrim</h3>";
	$cadena = " 'frase frase frase frase frase' ";
	$cadena_formateada = rtrim($cadena);
	echo "La cadena original: " . $cadena . "hola";
	echo "<br>";
	echo "La cadena formateada: " . $cadena . "hola";

?>