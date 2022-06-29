<!--Extracción de datos-->
<!--Manejo de strings-->

<!--transformaciones de cadenas-->
<?php

	//strtoupper();
	//convierte toda la cadena en máyuscula.
	echo "<h3>Máyusculas</h3><br>";
	$cadena = "Mi nombre es Yilver";
	$cadena_devuelta = strtoupper($cadena);
	echo "Cadena original: " . $cadena . "<br>";
	echo "Cadena formateada: " . $cadena_devuelta . "<br>";

	//strtolower();
	//convierte toda la cadena en mínuscula.
	echo "<br><br>";
	echo "<h3>Mínusculas</h3><br>";
	$cadena = "MI NOMBRE ES YILVER";
	$cadena_devuelta = strtolower($cadena);
	echo "Cadena original: " . $cadena . "<br>";
	echo "Cadena formateada: " . $cadena_devuelta . "<br>";

	//ucfirst();
	//convierte el primer carácter en máyuscula.
	echo "<br><br>";
	echo "<h3>Primera letra en máyuscula.</h3><br>";
	$cadena = "mi nombre es Yilver";
	$cadena_devuelta = ucfirst($cadena);
	echo "Cadena original: " . $cadena . "<br>";
	echo "Cadena formateada: " . $cadena_devuelta . "<br>";

	//ucwords();
	echo "<br><br>";
	echo "<h3>Cada primer carácter en máyuscula.</h3><br>";
	$cadena = "mi nombre es Yilver";
	$cadena_devuelta = ucwords($cadena);
	echo "Cadena original: " . $cadena . "<br>";
	echo "Cadena formateada: " . $cadena_devuelta . "<br>";

	//ATENCIÓN!!!
	/*
		Para carácteres con vocales acentuadas o letra ñ.
		Se puede usar las siguientes funciones.

		mb_strtoupper();
		mb_strtolower();
		mb_ucfirst();
		mb_ucwords();
	*/
?>