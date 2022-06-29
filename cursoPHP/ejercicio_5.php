<!--Curso de PHP-->
<!--Operadores-->
<?php  

	//Operadores aritmeticos
	$num1 = 10;
	$num2 = 5;
	$suma = $num1 + $num2;
	$resta = $num1 - $num2;
	$multiplicacion = $num1 * $num2;
	$division = $num1 / $num2;


	//Operadores relacionales.
	$resultado = $num1 > $num2;
	/*
		> Mayor que
		< Menor que
		= Igual
		!= Diferente
	*/


	//Operadores lógicos
	$resultado = ($num1 > $num2) && ($num2 < $num1); //and
	$resultado = ($num1 > $num2) || ($num2 < $num1); //or

?>