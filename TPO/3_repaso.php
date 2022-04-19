<!--Extracción de datos-->
<!--Manejo de strings-->

<!--implode y explode-->
<?php 
	//implode -> convierte los valores de una array en texto.
	//implode ($string, $array);
	echo "<h3>Implode</h3><br>";
	$array_equipo = array("portero", "laterales", "centrales", "mediocentros", "interiores", "delanteros");
	$cadena_equipo = implode("; ", $array_equipo);
	echo "El equipo separado por ; es este: " . $cadena_equipo;
	echo "<br>";

	$cadena_equipo2 = implode($array_equipo);
	echo "El equipo sin parámetro es el siguiente: " . $cadena_equipo2;

	//explode -> convierete un string en un array.
	echo "<br><br>";
	echo "<h3>Explode</h3><br>";
	$cadena = "uno,dos,tres,cuatro,cinco";
	$array = explode(",", $cadena);
	echo "Cadena de texto: " . $cadena . "<br>";
	echo "Cadena de array: " . $array . "<br>"; //De esta manera sólo imprime el tipo de dato.
	echo "El numero de elementos del array son: " . count($array);
?>