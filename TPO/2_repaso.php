<!--Extracción de datos-->
<!--Manejo de strings-->

<!--include-->
<?php 
	// string subsrt (string, start [, length])
	//Ejemplo1.

	//string - indice
	echo "String - Indice";
	echo "<br>";
	$resultado = substr("prueba este texto", 2);
	echo $resultado;
	echo "<br>";

	//string - indice - cantidad
	echo "String - Indice - Cantidad";
	echo "<br>";
	$resultado = substr("prueba segundo texto", 2, 2);
	echo $resultado;
	echo "<br>";

	//inidice negativo;
	echo "String - Indice Negativo";
	echo "<br>";
	$resultado = substr("prueba una cadena", -3);
	echo $resultado;
	echo "<br>";

	echo "String - Indice Negativo - Cantidad";
	echo "<br>";
	$resultado = substr("prueba un texto diferente", -5, 3);
	echo $resultado;
	echo "<br>";
?>