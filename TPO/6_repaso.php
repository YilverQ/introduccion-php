<!--Extracción de datos-->
<!--Manejo de strings-->

<!--str-->
<?php
	//str_replace
	//remplaza las cadenas y caracteres de un string
	//str_replace($valor_a_buscar, $valor_de_remplazo, $string, [$contador]);
	echo "<h3>str_replace</h3>";
	$cadena = "Esta es la cadena de ejemplo para sustituir un caracter";
	echo $cadena . "<br>";
	$resultado = str_replace("a", "A", $cadena);
	echo $resultado . "<br>";

	$cadena2 = "Esta es la cadena de ejemplo para sustituir una cadena";
	echo $cadena2 . "<br>";
	$resultado = str_replace("cadena", "CADENA", $cadena2);
	echo $resultado . "<br>";

	//str_pad()
	//se usa para rellenar una string a una longitud determinada
	//str_pad($string, $length, $pad_string, $pad_type);
	echo "<br><br>";
	echo "<h3>str_pad</h3>";
	$string = "hola";
	echo str_pad($string, 12, "*", STR_PAD_BOTH) . "<br>";
	echo str_pad($string, 12, "*", STR_PAD_RIGHT) . "<br>";
	echo str_pad($string, 12, "*", STR_PAD_LEFT) . "<br>";
	//STR_PAD_BOTH; ambos lados del texto original.
	//STR_PAD_RIGHT; rellena desde la derecha.
	//STR_PAD_LEFT; rellena desde la izquierda.
?>